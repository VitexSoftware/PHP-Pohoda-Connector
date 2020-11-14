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
class Adressbook extends Client implements \Sabre\Xml\XmlDeserializable {

    public $agenda = 'addressBook';
    public $addressbookXml = null;

    public function processInit($init) {
        $this->create(\Ease\Functions::recursiveIconv('UTF-8', 'Windows-1250', $init));
    }

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

    public function insertToPohoda() {
        $this->addressbookXml->addActionType('add/update'); // "add", "add/update", "update", "delete"
        $this->pohoda->addItem(2, $this->addressbookXml);

        $this->setPostFields($this->pohoda->close());
        return $this->performRequest('/xml');
    }

    public function create($data) {
        $this->addressbookXml = $this->pohoda->createAddressbook($data);
    }

    public function getColumnsFromPohoda($columns = ['id'], $conditions = []) {
        $this->addressbookXml = $this->pohoda->createListRequest(['type' => ucfirst($this->agenda)]);
        if (count($conditions)) {
            $this->addressbookXml->addFilter($conditions);
        }
        $this->pohoda->addItem(2, $this->addressbookXml);
        $this->setPostFields($this->pohoda->close());
        return $this->performRequest('/xml') ? $this->response->getAgendaData($this->agenda) : null;
    }

}
