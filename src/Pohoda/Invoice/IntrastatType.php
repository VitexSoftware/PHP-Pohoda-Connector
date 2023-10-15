<?php

namespace Pohoda\Invoice;

/**
 * Class representing IntrastatType
 *
 *
 * XSD Type: intrastatType
 */
class IntrastatType
{
    /**
     * Stát určení (pouze Vydané faktury).
     *
     * @var string $countryOfDestination
     */
    private $countryOfDestination = null;

    /**
     * Stát odeslání (pouze Přijaté faktury).
     *
     * @var string $countryOfDispatch
     */
    private $countryOfDispatch = null;

    /**
     * Stát původu.
     *
     * @var string $countryOfOrigin
     */
    private $countryOfOrigin = null;

    /**
     * Region určení (pouze SK).
     *
     * @var string $region
     */
    private $region = null;

    /**
     * Typ transakce.
     *
     * @var string $transaction
     */
    private $transaction = null;

    /**
     * Zvláštní pohyb.
     *
     * @var string $specialTransaction
     */
    private $specialTransaction = null;

    /**
     * Skupinové dodací podmínky.
     *
     * @var string $termsOfDelivery
     */
    private $termsOfDelivery = null;

    /**
     * Druh dopravy.
     *
     * @var string $modeOfTransport
     */
    private $modeOfTransport = null;

    /**
     * Rozpočítat náklady na dopravu (dle částky).
     *
     * @var float $shippingCosts
     */
    private $shippingCosts = null;

    /**
     * DIČ partnera pro CZ verzi. IČ DPH partnera pro SK verzi. Pouze Vydané faktury.
     *
     * @var string $vATIdOfPartner
     */
    private $vATIdOfPartner = null;

    /**
     * Gets as countryOfDestination
     *
     * Stát určení (pouze Vydané faktury).
     *
     * @return string
     */
    public function getCountryOfDestination()
    {
        return $this->countryOfDestination;
    }

    /**
     * Sets a new countryOfDestination
     *
     * Stát určení (pouze Vydané faktury).
     *
     * @param string $countryOfDestination
     * @return self
     */
    public function setCountryOfDestination($countryOfDestination)
    {
        $this->countryOfDestination = $countryOfDestination;
        return $this;
    }

    /**
     * Gets as countryOfDispatch
     *
     * Stát odeslání (pouze Přijaté faktury).
     *
     * @return string
     */
    public function getCountryOfDispatch()
    {
        return $this->countryOfDispatch;
    }

    /**
     * Sets a new countryOfDispatch
     *
     * Stát odeslání (pouze Přijaté faktury).
     *
     * @param string $countryOfDispatch
     * @return self
     */
    public function setCountryOfDispatch($countryOfDispatch)
    {
        $this->countryOfDispatch = $countryOfDispatch;
        return $this;
    }

    /**
     * Gets as countryOfOrigin
     *
     * Stát původu.
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * Sets a new countryOfOrigin
     *
     * Stát původu.
     *
     * @param string $countryOfOrigin
     * @return self
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }

    /**
     * Gets as region
     *
     * Region určení (pouze SK).
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * Region určení (pouze SK).
     *
     * @param string $region
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as transaction
     *
     * Typ transakce.
     *
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * Typ transakce.
     *
     * @param string $transaction
     * @return self
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Gets as specialTransaction
     *
     * Zvláštní pohyb.
     *
     * @return string
     */
    public function getSpecialTransaction()
    {
        return $this->specialTransaction;
    }

    /**
     * Sets a new specialTransaction
     *
     * Zvláštní pohyb.
     *
     * @param string $specialTransaction
     * @return self
     */
    public function setSpecialTransaction($specialTransaction)
    {
        $this->specialTransaction = $specialTransaction;
        return $this;
    }

    /**
     * Gets as termsOfDelivery
     *
     * Skupinové dodací podmínky.
     *
     * @return string
     */
    public function getTermsOfDelivery()
    {
        return $this->termsOfDelivery;
    }

    /**
     * Sets a new termsOfDelivery
     *
     * Skupinové dodací podmínky.
     *
     * @param string $termsOfDelivery
     * @return self
     */
    public function setTermsOfDelivery($termsOfDelivery)
    {
        $this->termsOfDelivery = $termsOfDelivery;
        return $this;
    }

    /**
     * Gets as modeOfTransport
     *
     * Druh dopravy.
     *
     * @return string
     */
    public function getModeOfTransport()
    {
        return $this->modeOfTransport;
    }

    /**
     * Sets a new modeOfTransport
     *
     * Druh dopravy.
     *
     * @param string $modeOfTransport
     * @return self
     */
    public function setModeOfTransport($modeOfTransport)
    {
        $this->modeOfTransport = $modeOfTransport;
        return $this;
    }

    /**
     * Gets as shippingCosts
     *
     * Rozpočítat náklady na dopravu (dle částky).
     *
     * @return float
     */
    public function getShippingCosts()
    {
        return $this->shippingCosts;
    }

    /**
     * Sets a new shippingCosts
     *
     * Rozpočítat náklady na dopravu (dle částky).
     *
     * @param float $shippingCosts
     * @return self
     */
    public function setShippingCosts($shippingCosts)
    {
        $this->shippingCosts = $shippingCosts;
        return $this;
    }

    /**
     * Gets as vATIdOfPartner
     *
     * DIČ partnera pro CZ verzi. IČ DPH partnera pro SK verzi. Pouze Vydané faktury.
     *
     * @return string
     */
    public function getVATIdOfPartner()
    {
        return $this->vATIdOfPartner;
    }

    /**
     * Sets a new vATIdOfPartner
     *
     * DIČ partnera pro CZ verzi. IČ DPH partnera pro SK verzi. Pouze Vydané faktury.
     *
     * @param string $vATIdOfPartner
     * @return self
     */
    public function setVATIdOfPartner($vATIdOfPartner)
    {
        $this->vATIdOfPartner = $vATIdOfPartner;
        return $this;
    }
}
