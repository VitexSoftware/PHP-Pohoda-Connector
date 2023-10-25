<?php
/**
 * PHPmServer - Addressbook helper class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020,2023 Vitex Software
 */

namespace mServer;

/**
 * Address Adresa
 *
 * @author vitex
 */
class Bank extends Client
{
    /**
     * Current Object's agenda
     * @var string
     */
    public $agenda = 'bank';

    /**
     * Request XML helper
     * @var \Riesenia\Pohoda\Agenda
     */
    public $requestXml = null;

    /**
     * Create Agenda document using given data
     *
     * @param array $data
     */
    public function create($data)
    {
        $this->requestXml = $this->pohoda->createBank($data);
    }

    public function takeData($data)
    {
        $summaryData = [];
        \Ease\Functions::divDataArray($data, $summaryData, 'roundingDocument');
        \Ease\Functions::divDataArray($data, $summaryData, 'roundingVAT');
        \Ease\Functions::divDataArray($data, $summaryData, 'homeCurrency');
        \Ease\Functions::divDataArray($data, $summaryData, 'foreignCurrency');
        $taken = parent::takeData($data);
        return $taken + $this->addSummary($summaryData);
    }

    public function addSummary($data)
    {

        $this->requestXml->addSummary($data);
    }
    /**
     * AddressBook records name column
     * @var string
     */
    public $nameColumn = 'address:company';
}
