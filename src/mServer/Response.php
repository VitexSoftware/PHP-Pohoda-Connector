<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace mServer;

/**
 * Class ResponseXML.
 */
class Response extends \Ease\Sand
{
    /**
     * State when file was imported successfully.
     */
    public const STATE_OK = 'ok';

    /**
     * State when file was imported with warning.
     */
    public const STATE_WARNING = 'warning';
    /**
     * State when file was imported with error.
     * @var array<string,array<array>>
     */
    public array $messages = ['error' => [], 'warning' => []];
    public array $producedDetails;
    protected \SimpleXMLElement $xml;
    protected array $ns = [];

    /**
     * Parsed Result.
     * @var array[]
     */
    private array $parsed = [];
    private Client $caller;

    /**
     * Operation status.
     */
    private string $state = '';

    /**
     * Operation status note.
     */
    private string $note = '';

    /**
     * Create a new Response Instance.
     *
     * @param Client $caller parent object
     */
    public function __construct(Client $caller)
    {
        $this->setObjectName();
        $this->useCaller($caller);
    }

    public function useCaller(Client $caller): void
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

    public function processResponsePack($responsePackData): void
    {
        if (\array_key_exists('rsp:responsePackItem', $responsePackData)) {
            $this->processResponsePackItem($responsePackData['rsp:responsePackItem']);
        } else {
            $this->state = $responsePackData['@state'];
            $this->note = $responsePackData['@note'];
        }
    }

    public function processResponsePackItem($responsePackItem): void
    {
        foreach ($responsePackItem as $name => $responsePackSubitem) {
            switch ($name) {
                case 'lAdb:listAddressBook':
                    $this->processResponseData($responsePackSubitem);

                    break;
                case 'lst:listBank':
                case 'bnk:bankResponse':
                case 'adb:addressbookResponse':
                case 'lqd:automaticLiquidationResponse':    
                    $this->processResponseData($responsePackSubitem);

                    break;
                case '@state':
                    $this->state = $responsePackSubitem;

                    break;
                case '@note':
                    $note = $responsePackSubitem; // TODO

                    break;
                case '@id':
                case '@version':
                    break;

                default:
                    //                    throw new Exception('Unknown element to process: ' . $name);
                    break;
            }
        }
    }

    public function processProducedDetails($productDetails): void
    {
        $this->producedDetails = self::typeToArray($productDetails);
    }

    public function processImportDetails($importDetails): void
    {
        if (\array_key_exists('rdc:state', $importDetails['rdc:detail'])) {
            $importDetail = self::typeToArray($importDetails['rdc:detail']);
            $this->messages[$importDetail['state']][] = $importDetail;
        } else {
            foreach (self::typesToArray($importDetails['rdc:detail']) as $importDetail) {
                $this->messages[$importDetail['state']][] = $importDetail;
            }
        }

        if (\count($this->messages['error'])) {
            $this->state = 'error';
        } elseif (\count($this->messages['warning'])) {
            $this->state = 'warning';
        }
    }

    /**
     * @param array $responseData
     */
    public function processResponseData($responseData): void
    {
        foreach ($responseData as $key => $value) {
            switch ($key) {
                case 'lAdb:addressbook':
                    $this->parsed = $this->processListAddressBook(\array_key_exists(0, $value) ? $value : [$value]);

                    break;
                case 'rdc:producedDetails':
                    /* $this->parsed = */ $this->processProducedDetails($value);

                    break;
                case 'rdc:importDetails':
                    /* $this->parsed = */ $this->processImportDetails($value);
                    break;
                case 'lqd:automaticLiquidationDetails':
                    $this->parsed = $this->processLiquidationDetails($value);
                    break;
                case 'lst:bank':
                    $this->parsed = $this->processBank(\array_key_exists(0, $value) ? $value : [$value]);

                    break;
                case '@version':
                case '@dateTimeStamp':
                case '@dateValidFrom':
                case '@state':
                    break;

                default:
                    $this->addStatusMessage(_('Unknown response section').': '.$key, 'debug');

                    break;
            }
        }
    }

    /**
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
     * @return array
     */
    public static function typeToArray(array $type)
    {
        $details = [];

        foreach ($type as $key => $value) {
            $details[str_replace(['rdc:', 'typ:'], '', $key)] = \is_array($value) ? (\array_key_exists('$', $value) ? $value['$'] : self::typeToArray($value)) : $value;
        }

        return $details;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Checks if import was successful.
     *
     * @return bool
     */
    public function isOk()
    {
        return $this->getState() === static::STATE_OK;
    }

    /**
     * Checks if import produced warnings.
     *
     * @return bool
     */
    public function isWarning()
    {
        return $this->getState() === static::STATE_WARNING;
    }

    /**
     * Return state of whole file.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Obtain response data.
     *
     * @param string $agenda
     *
     * @return array item or array of items
     */
    public function getAgendaData($agenda): array
    {
        if (\array_key_exists(0, $this->parsed)) {
            $data = [];

            foreach (current($this->parsed[0]['value']) as $packItemData) {
                $data[current($packItemData)['id']] = current($packItemData);
            }
        } else {
            $data = $this->parsed;
        }

        return $data;
    }

    public static function prepareElement($elementData)
    {
        $name = /* self::stripNsUri */ $elementData['name'];
        $data = [];

        foreach ($elementData['value'] as $subitems) {
            foreach ($subitems as $subitem) {
                if (\is_array($subitem)) {
                    if (\array_key_exists('name', $subitem)) {
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
     * Convert Pohoda Response XML to Array.
     *
     * @param \rawXML|string $xml
     *
     * @return array
     */
    public function anyXmlToArray($xml)
    {
        return self::xmlToArray(\is_string($xml) ? simplexml_load_string($xml) : $xml);
    }

    /**
     * Convert XML to Array.
     *
     * @param string $xml
     *
     * @return array
     */
    public static function parse($xml, array $alwaysArrayElements)
    {
        $xmlNode = simplexml_load_string($xml, 'SimpleXMLElement', \LIBXML_NOCDATA);

        return self::xmlToArray($xmlNode, [
            'alwaysArray' => $alwaysArrayElements,
            'autoText' => false,
        ]);
    }

    /**
     * Convert XML to Array.
     *
     * @param \SimpleXMLElement $xml
     * @param array<string,string> $options
     *
     * @return array<mixed>
     *
     * @author Tamlyn Rhodes
     *
     * @see http://outlandish.com/blog/xml-to-json/
     */
    public static function xmlToArray(\SimpleXMLElement $xml, array $options = [])
    {
        $defaults = [
            'namespaceSeparator' => ':',
            // you may want this to be something other than a colon
            'attributePrefix' => '@',
            // to distinguish between attributes and nodes with the same name
            'alwaysArray' => [],
            // array of xml tag names which should always become arrays
            'autoArray' => true,
            // only create arrays for tags which appear more than once
            'textContent' => '$',
            // key used for the text content of elements
            'autoText' => true,
            // skip textContent key if node has no attributes or child nodes
            'keySearch' => false,
            // optional search and replace on tag and attribute names
            'keyReplace' => false, // replace values for above search values (as passed to str_replace())
        ];
        $options = array_merge($defaults, $options);
        $namespaces = $xml->getDocNamespaces();
        $namespaces[''] = null; // add base (empty) namespace
        // get attributes from all namespaces
        $attributesArray = [];

        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->attributes($namespace) as $attributeName => $attribute) {
                // replace characters in attribute name
                if ($options['keySearch']) {
                    $attributeName = str_replace($options['keySearch'], $options['keyReplace'], $attributeName);
                }

                $attributeKey = $options['attributePrefix']
                        .($prefix ? $prefix.$options['namespaceSeparator'] : '')
                        .$attributeName;
                $attributesArray[$attributeKey] = (string) $attribute;
            }
        }

        // get child nodes from all namespaces
        $tagsArray = [];

        foreach ($namespaces as $prefix => $namespace) {
            foreach ($xml->children($namespace) as $childXml) {
                // recurse into child nodes
                $childArray = self::xmlToArray($childXml, $options);
                $childTagName = key($childArray);
                $childProperties = current($childArray);

                // list($childTagName, $childProperties) = each($childArray);
                // replace characters in tag name
                if ($options['keySearch']) {
                    $childTagName = str_replace($options['keySearch'], $options['keyReplace'], $childTagName);
                }

                // add namespace prefix, if any
                if ($prefix) {
                    $childTagName = $prefix.$options['namespaceSeparator'].$childTagName;
                }

                if (!isset($tagsArray[$childTagName])) {
                    // only entry with this key
                    // test if tags of this type should always be arrays, no matter the element count
                    $tagsArray[$childTagName] = \in_array($childTagName, $options['alwaysArray'], true) || !$options['autoArray'] ? [$childProperties] : $childProperties;
                } elseif (
                    \is_array($tagsArray[$childTagName]) && array_keys($tagsArray[$childTagName]) === range(0, \count($tagsArray[$childTagName]) - 1)
                ) {
                    // key already exists and is integer indexed array
                    $tagsArray[$childTagName][] = $childProperties;
                } else {
                    // key exists so convert to integer indexed array with previous value in position 0
                    $tagsArray[$childTagName] = [$tagsArray[$childTagName], $childProperties];
                }
            }
        }

        // get text content of node
        $textContentArray = [];
        $plainText = trim((string) $xml);

        if ($plainText !== '') {
            $textContentArray[$options['textContent']] = $plainText;
        }

        // stick it all together
        $propertiesArray = !$options['autoText'] || $attributesArray || $tagsArray || ($plainText === '') ? array_merge($attributesArray, $tagsArray, $textContentArray) : $plainText;

        // return node as array
        return [
            $xml->getName() => $propertiesArray,
        ];
    }

    public function processListAddressBook($listAddressBook): array
    {
        $addressBook = [];

        foreach ($listAddressBook as $apos => $addressEntry) {
            $addressData = self::adbToArray($addressEntry);
            $addressBook[$addressData['addressbookHeader']['id']] = $addressData;
        }

        return $addressBook;
    }

    /**
     * Strip adb: prefix form key names.
     */
    public static function adbToArray(array $entryData): array
    {
        return self::stripArrayNames('adb', $entryData);
    }

    /**
     * Strip prefix form key names.
     */
    public static function stripArrayNames(string $prefix, array $entryData): array
    {
        $entry = [];

        foreach ($entryData as $entryKey => $entryValue) {
            if (preg_match('/^'.$prefix.':/', (string) $entryKey)) {
                if (\is_array($entryValue)) {
                    $value = \array_key_exists('$', $entryValue) ? $entryValue['$'] : self::stripArrayNames($prefix, $entryValue);
                } else {
                    $value = $entryValue;
                }

                $entry[str_replace($prefix.':', '', $entryKey)] = $value;
            } else {
                if (\is_array($entryValue) && key($entryValue) === '$') {
                    $entry[$entryKey] = $entryValue['$'];
                } else {
                    if (\is_array($entryValue)) {
                        $entry[$entryKey] = self::stripArrayNames($prefix, $entryValue);
                    } else {
                        $entry[$entryKey] = $entryValue;
                    }
                }
            }
        }

        return $entry;
    }

    public function processBank(array $bank): array
    {
        $bankItems = [];

        foreach ($bank as $bankEntry) {
            if (\is_array($bankEntry)) {
                $striped = self::stripArrayNames('bnk', $bankEntry);

                if (\array_key_exists('bankHeader', $striped)) {
                    $bankItems[$striped['bankHeader']['id']] = $striped;
                } elseif (\array_key_exists('bankItem', $striped)) {
                    $bankItems[$striped['bankItem']['id']] = $striped;
                } elseif (\array_key_exists('id', $striped)) {
                    $bankItems[$striped['id']] = $striped;
                }
            }
        }

        return self::stripArrayNames('typ', $bankItems);
    }

    public function processLiquidationDetails(array $liquidationDetails )
    {
        return array_key_exists('lqd:automaticLiquidationDetail', $liquidationDetails) ? self::stripArrayNames('lqd', $liquidationDetails['lqd:automaticLiquidationDetail']) : [];
    }
}
