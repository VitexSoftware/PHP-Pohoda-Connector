<?php

/**
 * PHPmPohoda - Addressbook helper class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */


namespace mServer;

/**
 * Description of Adresa
 *
 * @author vitex
 */
class Adressbook extends Client /* implements \Sabre\Xml\XmlDeserializable */ {

    /**
     * Current Object's agenda
     * @var string
     */
    public $agenda = 'addressBook';

    /**
     * Request XML helper
     * @var \Riesenia\Pohoda\Addressbook
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
        $this->requestXml = $this->pohoda->createAddressbook($data);
    }

}
