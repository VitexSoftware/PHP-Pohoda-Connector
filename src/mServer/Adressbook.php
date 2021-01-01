<?php

/**
 * PHPmServer - Addressbook helper class
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
class Adressbook extends Client {

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

    /**
     * Create Agenda document using given data
     * 
     * @param Array $data
     */
    public function create($data) {
        $this->requestXml = $this->pohoda->createAddressbook($data);
    }

    /**
     * AddressBook records name column
     * @var string
     */
    public $nameColumn = 'address:company';

}
