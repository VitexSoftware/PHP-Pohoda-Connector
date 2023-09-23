<?php

/**
 * PHPmServer - Response parser class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */

namespace mServer;

/**
 * Class ResponseXML
 */
class Response extends \Ease\Sand
{

    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @var array
     */
    protected $ns = array();

    /**
     * State when file was imported successfully
     */
    const STATE_OK = 'ok';

    /**
     * Parsed Result
     * @var array
     */
    private $parsed;

    /**
     * 
     * @var Client
     */
    private $caller;

    /**
     * 
     * @var array
     */
    public $messages = ['error' => [], 'warning' => []];

    /**
     * 
     * @var array
     */
    public $producedDetails;

    /**
     * Operation status
     * @var string
     */
    private $state;

    /**
     * Operation status note
     * @var string
     */
    private $note;

    /**
     * Create a new Response Instance
     * 
     * @param string $caller parent object
     */
    public function __construct(Client $caller)
    {
        $this->useCaller($caller);
    }

    /**
     * 
     * @param Client $caller
     */
    public function useCaller(Client $caller)
    {
        $this->caller = $caller;
        if ($caller->lastCurlResponse) {
            $parsed = $this->parse($this->caller->lastCurlResponse, []);
            $this->processResponsePack($parsed['responsePack']);
        } else {
            $this->state = 'error';
            $this->note = $caller->lastCurlError;
        }
    }

    public function processResponsePack($responsePackData)
    {
        if (array_key_exists('rsp:responsePackItem', $responsePackData)) {
            $this->processResponsePackItem($responsePackData['rsp:responsePackItem']);
        } else {
            $this->state = $responsePackData['@state'];
            $this->note = $responsePackData['@note'];
        }
    }

    public function processResponsePackItem($responsePackItem)
    {

        foreach ($responsePackItem as $name => $responsePackSubitem) {

            switch ($name) {
                case 'adb:addressbookResponse':
                    $this->processResponseData($responsePackSubitem);
                    break;
                case '@state':
                    $this->state = $responsePackSubitem;
                    break;
                case '':
                    break;

                default:
                    //                    throw new Exception('Unknown element to process: ' . $name);
                    break;
            }
        }
    }

    public function processProducedDetails($productDetails)
    {
        $this->producedDetails = self::typeToArray($productDetails);
    }

    public function processImportDetails($importDetails)
    {
        if (array_key_exists('rdc:state', $importDetails['rdc:detail'])) {
            $importDetail = self::typeToArray($importDetails['rdc:detail']);
            $this->messages[$importDetail['state']][] = $importDetail;
        } else {
            foreach (self::typesToArray($importDetails['rdc:detail']) as $importDetail) {
                $this->messages[$importDetail['state']][] = $importDetail;
            }
        }

        if (count($this->messages['error'])) {
            $this->state = 'error';
        } else if (count($this->messages['warning'])) {
            $this->state = 'warning';
        }
    }

    /**
     * 
     * @param array $responseData
     */
    function processResponseData($responseData)
    {
        foreach ($responseData as $key => $value) {
            switch ($key) {
                case 'rdc:producedDetails':
                    $this->processProducedDetails($value);
                    break;
                case 'rdc:importDetails':
                    $this->processImportDetails($value);
                    break;
                default:
                    //                    $this->addStatusMessage(_('Unknown response section') . ': ' . $responseData['name'], 'debug');
                    break;
            }
        }
    }

    /**
     * 
     * @param array $source
     * 
     * @return array
     */
    public static function typesToArray(array $source)
    {
        $details = [];
        foreach ($source as $did => $detail) {
            $details[$did] = self::typeToArray($detail);
        }
        return $details;
    }

    /**
     * 
     * @param array $type
     * 
     * @return array
     */
    public static function typeToArray(array $type)
    {
        $details = [];
        foreach ($type as $key => $value) {
            $details[str_replace(['rdc:', 'typ:'], '', $key)] = is_array($value) ? (array_key_exists('$', $value) ? $value['$'] : self::typeToArray($value)) : $value;
        }
        return $details;
    }

    /**
     * 
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Checks if import was successful
     * 
     * @return bool
     */
    public function isOk()
    {
        return $this->getState() == static::STATE_OK;
    }

    /**
     * Return state of whole file
     * 
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    public function getAgendaData($agenda)
    {
        $data = [];
        foreach (current($this->parsed[0]['value']) as $packItemData) {
            $data[current($packItemData)['id']] = current($packItemData);
        }
        return $data;
    }

    public static function prepareElement($elementData)
    {
        $name = self::stripNsUri($elementData['name']);
        $data = [];
        foreach ($elementData['value'] as $subitems) {
            foreach ($subitems as $subitem) {
                if (is_array($subitem)) {
                    if (array_key_exists('name', $subitem)) {
                        $data = array_merge($data, self::prepareElement($subitem));
                    }
                } else {
                    $data[] = $subitem;
                }
            }
        }
        return [$name => $data];
    }

    /**
     * Convert Pohoda Response XML to Array
     *
     * @param string|\rawXML $xml
     *
     * @return array
     */
    public function anyXmlToArray($xml)
    {
        return self::xmlToArray(is_string($xml) ? simplexml_load_string($xml) : $xml);
    }

    /**
     * Convert XML to Array
     * 
     * @param string $xml
     * @param array $alwaysArrayElements
     * 
     * @return array
     */
    public static function parse($xml, array $alwaysArrayElements)
    {
        $xmlNode = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $arrayData = self::xmlToArray($xmlNode, array(
            'alwaysArray' => $alwaysArrayElements,
            'autoText' => false,
        )
        );

        return $arrayData;
    }

    /**
     * @param \SimpleXMLElement $xml
     * @param array $options
     * 
     * @return array
     * 
     * @author Tamlyn Rhodes
     * @link http://outlandish.com/blog/xml-to-json/
     */
    public static function xmlToArray(\SimpleXMLElement $xml, $options = array())
    {
        $defaults = array(
            'namespaceSeparator' => ':',
            //you may want this to be something other than a colon
            'attributePrefix' => '@',
            //to distinguish between attributes and nodes with the same name
            'alwaysArray' => array(),
            //array of xml tag names which should always become arrays
            'autoArray' => true,
            //only create arrays for tags which appear more than once
            'textContent' => '$',
            //key used for the text content of elements
            'autoText' => true,
            //skip textContent key if node has no attributes or child nodes
            'keySearch' => false,
            //optional search and replace on tag and attribute names
            'keyReplace' => false //replace values for above search values (as passed to str_replace())
        );
        $options = array_merge($defaults, $options);
        $namespaces = $xml->getDocNamespaces();
        $namespaces[''] = null; //add base (empty) namespace
        //get attributes from all namespaces
        $attributesArray = array();
        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->attributes($namespace) as $attributeName => $attribute) {
                //replace characters in attribute name
                if ($options['keySearch'])
                    $attributeName = str_replace($options['keySearch'], $options['keyReplace'], $attributeName);
                $attributeKey = $options['attributePrefix']
                    . ($prefix ? $prefix . $options['namespaceSeparator'] : '')
                    . $attributeName;
                $attributesArray[$attributeKey] = (string) $attribute;
            }
        }

        //get child nodes from all namespaces
        $tagsArray = array();
        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->children($namespace) as $childXml) {
                //recurse into child nodes
                $childArray = self::xmlToArray($childXml, $options);
                $childTagName = key($childArray);
                $childProperties = current($childArray);

                //list($childTagName, $childProperties) = each($childArray);
                //replace characters in tag name
                if ($options['keySearch'])
                    $childTagName = str_replace($options['keySearch'], $options['keyReplace'], $childTagName);
                //add namespace prefix, if any
                if ($prefix)
                    $childTagName = $prefix . $options['namespaceSeparator'] . $childTagName;

                if (!isset($tagsArray[$childTagName])) {
                    //only entry with this key
                    //test if tags of this type should always be arrays, no matter the element count
                    $tagsArray[$childTagName] = in_array($childTagName, $options['alwaysArray']) || !$options['autoArray'] ? array($childProperties) : $childProperties;
                } elseif (
                    is_array($tagsArray[$childTagName]) && array_keys($tagsArray[$childTagName]) === range(0, count($tagsArray[$childTagName]) - 1)
                ) {
                    //key already exists and is integer indexed array
                    $tagsArray[$childTagName][] = $childProperties;
                } else {
                    //key exists so convert to integer indexed array with previous value in position 0
                    $tagsArray[$childTagName] = array($tagsArray[$childTagName], $childProperties);
                }
            }
        }

        //get text content of node
        $textContentArray = array();
        $plainText = trim((string) $xml);
        if ($plainText !== '')
            $textContentArray[$options['textContent']] = $plainText;

        //stick it all together
        $propertiesArray = !$options['autoText'] || $attributesArray || $tagsArray || ($plainText === '') ? array_merge($attributesArray, $tagsArray, $textContentArray) : $plainText;

        //return node as array
        return array(
            $xml->getName() => $propertiesArray
        );
    }

}