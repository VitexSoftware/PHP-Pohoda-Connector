<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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

    /**
     * Convert decimal coordineates to GPS field value
     * 
     * @param string $latitude
     * @param string $longitude
     * 
     * @return string 50° 04' 58.9781" N 000° 00' 00.0000" E
     */
    public static function LatLongToGPS(string $latitude, string $longitude) {
        return self::DECtoDMS($longitude) . 'N ' . self::DECtoDMS($longitude) . 'E ';
    }

    /**
     * Converts decimal longitude / latitude to DMS ( Degrees / minutes / seconds ) 
     * This is the piece of code which may appear to be inefficient, but to avoid 
     * issues with floating point math we extract the integer part and the float 
     * part by using a string function.
     * 
     * @param string $dec float as string ex. 50.111199
     * 
     * @return string 50°06'40.3"
     */
    public static function DECtoDMS(string $dec) {
        $vars = explode(".", $dec);
        $deg = $vars[0];
        $tempma = "0." . $vars[1];
        $tempma = $tempma * 3600;
        $min = floor($tempma / 60);
        $sec = round($tempma - ($min * 60), 4);
        return $deg . '° ' . $min . "' " . $sec . '" ';
    }

}
