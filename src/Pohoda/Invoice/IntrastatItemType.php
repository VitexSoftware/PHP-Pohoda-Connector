<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Invoice;

/**
 * Class representing IntrastatItemType.
 *
 * XSD Type: intrastatItemType
 */
class IntrastatItemType
{
    /**
     * Datum pro Intrastat.
     */
    private \DateTime $date = null;

    /**
     * Kód zboží.
     */
    private string $goodsCode = null;

    /**
     * Popis zboží (pouze SK).
     */
    private string $description = null;

    /**
     * Stát určení (pouze Vydané faktury).
     */
    private string $countryOfDestination = null;

    /**
     * Stát odeslání (pouze Přijaté faktury).
     */
    private string $countryOfDispatch = null;

    /**
     * Stát původu.
     */
    private string $countryOfOrigin = null;

    /**
     * Region určení (pouze SK).
     */
    private string $region = null;

    /**
     * Fakturovaná hodnota.
     */
    private float $invoicedAmount = null;

    /**
     * Dopravné.
     */
    private float $transportExpenses = null;

    /**
     * Vlastní hmotnost.
     */
    private float $ownWeight = null;

    /**
     * Množství.
     */
    private float $quantity = null;

    /**
     * Doplňková měrná jednotka.
     */
    private string $addUnit = null;

    /**
     * Typ transakce.
     */
    private string $transaction = null;

    /**
     * Dodací podmínky.
     */
    private string $termsOfDelivery = null;

    /**
     * Druh dopravy.
     */
    private string $modeOfTransport = null;

    /**
     * Statistický znak.
     */
    private string $statisticalCode = null;

    /**
     * Zvláštní pohyb.
     */
    private string $specialTransaction = null;

    /**
     * DIČ partnera pro CZ verzi. IČ DPH partnera pro SK verzi. Pouze Vydané faktury.
     */
    private string $vATIdOfPartner = null;

    /**
     * Gets as date.
     *
     * Datum pro Intrastat.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date.
     *
     * Datum pro Intrastat.
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as goodsCode.
     *
     * Kód zboží.
     *
     * @return string
     */
    public function getGoodsCode()
    {
        return $this->goodsCode;
    }

    /**
     * Sets a new goodsCode.
     *
     * Kód zboží.
     *
     * @param string $goodsCode
     *
     * @return self
     */
    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode = $goodsCode;

        return $this;
    }

    /**
     * Gets as description.
     *
     * Popis zboží (pouze SK).
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description.
     *
     * Popis zboží (pouze SK).
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as countryOfDestination.
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
     * Sets a new countryOfDestination.
     *
     * Stát určení (pouze Vydané faktury).
     *
     * @param string $countryOfDestination
     *
     * @return self
     */
    public function setCountryOfDestination($countryOfDestination)
    {
        $this->countryOfDestination = $countryOfDestination;

        return $this;
    }

    /**
     * Gets as countryOfDispatch.
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
     * Sets a new countryOfDispatch.
     *
     * Stát odeslání (pouze Přijaté faktury).
     *
     * @param string $countryOfDispatch
     *
     * @return self
     */
    public function setCountryOfDispatch($countryOfDispatch)
    {
        $this->countryOfDispatch = $countryOfDispatch;

        return $this;
    }

    /**
     * Gets as countryOfOrigin.
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
     * Sets a new countryOfOrigin.
     *
     * Stát původu.
     *
     * @param string $countryOfOrigin
     *
     * @return self
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;

        return $this;
    }

    /**
     * Gets as region.
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
     * Sets a new region.
     *
     * Region určení (pouze SK).
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets as invoicedAmount.
     *
     * Fakturovaná hodnota.
     *
     * @return float
     */
    public function getInvoicedAmount()
    {
        return $this->invoicedAmount;
    }

    /**
     * Sets a new invoicedAmount.
     *
     * Fakturovaná hodnota.
     *
     * @param float $invoicedAmount
     *
     * @return self
     */
    public function setInvoicedAmount($invoicedAmount)
    {
        $this->invoicedAmount = $invoicedAmount;

        return $this;
    }

    /**
     * Gets as transportExpenses.
     *
     * Dopravné.
     *
     * @return float
     */
    public function getTransportExpenses()
    {
        return $this->transportExpenses;
    }

    /**
     * Sets a new transportExpenses.
     *
     * Dopravné.
     *
     * @param float $transportExpenses
     *
     * @return self
     */
    public function setTransportExpenses($transportExpenses)
    {
        $this->transportExpenses = $transportExpenses;

        return $this;
    }

    /**
     * Gets as ownWeight.
     *
     * Vlastní hmotnost.
     *
     * @return float
     */
    public function getOwnWeight()
    {
        return $this->ownWeight;
    }

    /**
     * Sets a new ownWeight.
     *
     * Vlastní hmotnost.
     *
     * @param float $ownWeight
     *
     * @return self
     */
    public function setOwnWeight($ownWeight)
    {
        $this->ownWeight = $ownWeight;

        return $this;
    }

    /**
     * Gets as quantity.
     *
     * Množství.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity.
     *
     * Množství.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as addUnit.
     *
     * Doplňková měrná jednotka.
     *
     * @return string
     */
    public function getAddUnit()
    {
        return $this->addUnit;
    }

    /**
     * Sets a new addUnit.
     *
     * Doplňková měrná jednotka.
     *
     * @param string $addUnit
     *
     * @return self
     */
    public function setAddUnit($addUnit)
    {
        $this->addUnit = $addUnit;

        return $this;
    }

    /**
     * Gets as transaction.
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
     * Sets a new transaction.
     *
     * Typ transakce.
     *
     * @param string $transaction
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Gets as termsOfDelivery.
     *
     * Dodací podmínky.
     *
     * @return string
     */
    public function getTermsOfDelivery()
    {
        return $this->termsOfDelivery;
    }

    /**
     * Sets a new termsOfDelivery.
     *
     * Dodací podmínky.
     *
     * @param string $termsOfDelivery
     *
     * @return self
     */
    public function setTermsOfDelivery($termsOfDelivery)
    {
        $this->termsOfDelivery = $termsOfDelivery;

        return $this;
    }

    /**
     * Gets as modeOfTransport.
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
     * Sets a new modeOfTransport.
     *
     * Druh dopravy.
     *
     * @param string $modeOfTransport
     *
     * @return self
     */
    public function setModeOfTransport($modeOfTransport)
    {
        $this->modeOfTransport = $modeOfTransport;

        return $this;
    }

    /**
     * Gets as statisticalCode.
     *
     * Statistický znak.
     *
     * @return string
     */
    public function getStatisticalCode()
    {
        return $this->statisticalCode;
    }

    /**
     * Sets a new statisticalCode.
     *
     * Statistický znak.
     *
     * @param string $statisticalCode
     *
     * @return self
     */
    public function setStatisticalCode($statisticalCode)
    {
        $this->statisticalCode = $statisticalCode;

        return $this;
    }

    /**
     * Gets as specialTransaction.
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
     * Sets a new specialTransaction.
     *
     * Zvláštní pohyb.
     *
     * @param string $specialTransaction
     *
     * @return self
     */
    public function setSpecialTransaction($specialTransaction)
    {
        $this->specialTransaction = $specialTransaction;

        return $this;
    }

    /**
     * Gets as vATIdOfPartner.
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
     * Sets a new vATIdOfPartner.
     *
     * DIČ partnera pro CZ verzi. IČ DPH partnera pro SK verzi. Pouze Vydané faktury.
     *
     * @param string $vATIdOfPartner
     *
     * @return self
     */
    public function setVATIdOfPartner($vATIdOfPartner)
    {
        $this->vATIdOfPartner = $vATIdOfPartner;

        return $this;
    }
}
