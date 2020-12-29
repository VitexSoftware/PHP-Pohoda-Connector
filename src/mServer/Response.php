<?php

namespace mServer;

/**
 * Class ResponseXML
 */
class Response extends \Ease\Sand {

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
     * @var Description\Sabre\Xml\Service XML Reader
     */
    private $service;

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
     * Create a new Response Instance
     * 
     * @param string $xml path to file
     */
    public function __construct(Client $caller) {
        $this->service = new \Sabre\Xml\Service();
        $this->useCaller($caller);
    }

    /**
     * 
     * @param Client $caller
     */
    public function useCaller(Client $caller) {
        $this->caller = $caller;
        if ($caller->lastCurlResponse) {
            $this->service->elementMap = $caller->getElementMap();
            $this->parsed = $this->service->parse($caller->lastCurlResponse);
            $addressbookResponse = $this->parsed[0]['value']['{http://www.stormware.cz/schema/version_2/addressbook.xsd}addressbookResponse'];

            foreach ($addressbookResponse as $responseData) {
                switch (self::stripNsUri($responseData['name'])) {
                    case 'producedDetails' :
                        $this->producedDetails = self::typesToArray($responseData['value']);
                        if (array_key_exists('extId', $this->producedDetails)) {
                            $this->producedDetails['extId'] = self::typesToArray($this->producedDetails['extId']);
                        }
                        break;
                    case 'importDetails':
                        foreach ($addressbookResponse[0]['value'] as $response) {
                            $importDetails = self::typesToArray($response['value']);
                            $this->messages[$importDetails['state']][] = $importDetails;
                        }

                        if (count($this->messages['error'])) {
                            $this->parsed[0]['attributes']['state'] = 'error';
                        } else if (count($this->messages['warning'])) {
                            $this->parsed[0]['attributes']['state'] = 'warning';
                        }
                        break;
                    default:
                        $this->addStatusMessage(_('Unknown response section') . ': ' . $responseData['name'], 'debug');
                        break;
                }
            }
        } else {
            $this->parsed[0]['attributes']['state'] = 'error';
            $this->parsed[0]['attributes']['note'] = $caller->lastCurlError;
        }
    }

    /**
     * 
     * @param array $source
     * 
     * @return array
     */
    public static function typesToArray(array $source) {
        $details = [];
        foreach ($source as $detail) {
            $details[self::stripNsUri($detail['name'])] = $detail['value'];
        }
        return $details;
    }

    /**
     * 
     * @return string
     */
    public function getNote() {
        return isset($this->parsed[0]['attributes']['note']) ? $this->parsed[0]['attributes']['note'] : null;
    }

    /**
     * Checks if import was successful
     * 
     * @return bool
     */
    public function isOk() {
        return $this->getState() == static::STATE_OK;
    }

    /**
     * Return state of whole file
     * 
     * @return string
     */
    public function getState() {
        return (string) $this->parsed[0]['attributes']['state'];
    }

    public function getAgendaData($agenda) {
        $data = [];
        foreach (current($this->parsed[0]['value']) as $packItemData) {
            $data[current($packItemData)['id']] = current($packItemData);
        }
        return $data;
    }

    static public function stripNsUri($parsedName) {
        return \Sabre\Xml\Service::parseClarkNotation($parsedName)[1];
    }

    /**
     * Convert XML to array.
     *
     * @param string $xml
     *
     * @return array
     */
    public static function xml2array($xml) {
        $arr = [];
        if (!empty($xml)) {
            foreach ($xml->attributes() as $a) {
                $arr['@' . $a->getName()] = strval($a);
            }
            foreach ($xml->children() as $r) {
                if (count($r->children()) == 0) {
                    $arr[$r->getName()] = strval($r);
                } else {
                    $arr[$r->getName()][] = self::xml2array($r);
                }
            }
        }
        return $arr;
    }

    /**
     * Convert Pohoda Response XML to Array
     *
     * @param string|rawXML $xml
     *
     * @return array
     */
    public function anyXmlToArray($xml) {
        return self::xml2array(is_string($xml) ? simplexml_load_string($xml) : $xml);
    }

}
