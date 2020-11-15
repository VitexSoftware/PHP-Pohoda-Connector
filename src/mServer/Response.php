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
     * Create a new Response Instance
     * 
     * @param string $xml path to file
     */
    public function __construct(Client $caller) {
        $this->service = new \Sabre\Xml\Service();
        $this->useCaller($caller);
    }

    public function useCaller(Client $caller) {
        $this->caller = $caller;
        $this->service->elementMap = $caller->getElementMap();
        $this->parsed = $this->service->parse($caller->lastCurlResponse);
        print_r($this->parsed);
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
