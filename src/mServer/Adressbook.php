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
class Adressbook extends Client {

    public $addressbookXml = null;

    public function processInit($init) {
        $this->create(\Ease\Functions::recursiveIconv('UTF-8', 'Windows-1250', $init));
    }

    public function insertToPohoda() {
        $this->addressbookXml->addActionType('add/update'); // "add", "add/update", "update", "delete"
        $this->pohoda->addItem(2, $this->addressbookXml);

        $this->setPostFields($this->pohoda->close());
        return $this->performRequest('/xml', 'POST');
    }

    public function create($data) {
        $this->addressbookXml = $this->pohoda->createAddressbook($data);
    }

}
