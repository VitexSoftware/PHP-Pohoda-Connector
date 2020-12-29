<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace mServer;

/**
 * Description of Invoice
 *
 * @author vitex
 */
class Invoice extends Client /* implements \Sabre\Xml\XmlDeserializable */ {

    /**
     * Current Object's agenda
     * @var string
     */
    public $agenda = 'invoice';

    /**
     * Request XML helper
     * @var \Riesenia\Pohoda\Invoice
     */
    public $requestXml = null;

    /*
      public function getElementMap($extra = []) {
      return
      array_merge(
      [
      '{http://www.stormware.cz/schema/version_2/list_addBook.xsd}listAddressBook' => function(\Sabre\Xml\Reader $reader) {
      return \Sabre\Xml\Deserializer\repeatingElements($reader, '{http://www.stormware.cz/schema/version_2/list_addBook.xsd}addressbook');
      },
      '{http://www.stormware.cz/schema/version_2/list_addBook.xsd}addressbook' => function(\Sabre\Xml\Reader $reader) {
      return \Sabre\Xml\Deserializer\keyValue($reader, 'http://www.stormware.cz/schema/version_2/list_addBook.xsd');
      },
      '{http://www.stormware.cz/schema/version_2/addressbook.xsd}addressbookHeader' => function(\Sabre\Xml\Reader $reader) {
      return \Sabre\Xml\Deserializer\keyValue($reader, 'http://www.stormware.cz/schema/version_2/addressbook.xsd');
      },
      '{http://www.stormware.cz/schema/version_2/type.xsd}address' => function(\Sabre\Xml\Reader $reader) {
      return \Sabre\Xml\Deserializer\keyValue($reader, 'http://www.stormware.cz/schema/version_2/type.xsd');
      },
      '{http://www.stormware.cz/schema/version_2/type.xsd}shipToAddress' => function(\Sabre\Xml\Reader $reader) {
      return \Sabre\Xml\Deserializer\keyValue($reader, 'http://www.stormware.cz/schema/version_2/type.xsd');
      },
      ], parent::getElementMap($extra));
      }

      static function xmlDeserialize(\Sabre\Xml\Reader $reader) {
      $addressBook = new self();
      // Borrowing a parser from the KeyValue class.
      $keyValue = \Sabre\Xml\Element\KeyValue::xmlDeserialize($reader);

      if (isset($keyValue['{http://example.org/books}title'])) {
      $book->title = $keyValue['{http://example.org/books}title'];
      }
      if (isset($keyValue['{http://example.org/books}author'])) {
      $book->author = $keyValue['{http://example.org/books}author'];
      }

      return $addressBook;
      }
     */

    /**
     * Create Agenda document using given data
     * 
     * @param Array $data
     */
    public function create($data) {
        if (array_key_exists('invoiceSummary', $data)) {
            $summary = $data['invoiceSummary'];
            unset($data['invoiceSummary']);
            $this->requestXml = $this->pohoda->createInvoice($data);
            $this->requestXml->addSummary($summary);
        } else {
            $this->requestXml = $this->pohoda->createInvoice($data);
        }
    }

    public static function extId($ids, $exSystemName = '', $exSystemText = '') {
        $node = new \SimpleXMLElement('<extId></extId>', 0, false, \Riesenia\Pohoda::$namespaces['typ']);

//					<typ:extId>
//						<typ:ids>268</typ:ids>
//						<typ:exSystemName>banager</typ:exSystemName>
//						<typ:exSystemText>Benefitka Manager</typ:exSystemText>
//					</typ:extId>        

        $node->addChild('typ:' . 'ids', \htmlspecialchars((string) $ids), \Riesenia\Pohoda::$namespaces['typ']);
        $node->addChild('typ:' . 'exSystemName', \htmlspecialchars((string) $exSystemName), \Riesenia\Pohoda::$namespaces['typ']);
        $node->addChild('typ:' . 'exSystemText', \htmlspecialchars((string) $exSystemText), \Riesenia\Pohoda::$namespaces['typ']);

        return $node;
    }

}
