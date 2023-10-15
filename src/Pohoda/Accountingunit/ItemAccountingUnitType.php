<?php

namespace Pohoda\Accountingunit;

/**
 * Class representing ItemAccountingUnitType
 *
 *
 * XSD Type: itemAccountingUnitType
 */
class ItemAccountingUnitType
{
    /**
     * ID záznamu. Používá se při requestu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Účetní rok
     *
     * @var int $year
     */
    private $year = null;

    /**
     * Typ účetního období.
     *
     * @var string $yearType
     */
    private $yearType = null;

    /**
     * Počátek účetního období.
     *
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * Konec účetního období.
     *
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * Typ účetní jednotky.
     *
     * @var string $unitType
     */
    private $unitType = null;

    /**
     * Stav - fyzická nebo právnická osoba.
     *
     * @var string $stateType
     */
    private $stateType = null;

    /**
     * Adresa účetní jednotky.
     *
     * @var \Pohoda\Type\MyAddressType $accountingUnitIdentity
     */
    private $accountingUnitIdentity = null;

    /**
     * Adresa účetní jednotky.
     *
     * @var string $dataFile
     */
    private $dataFile = null;

    /**
     * Jedinečný identifikátor účetnictví firmy.
     *
     * @var string $key
     */
    private $key = null;

    /**
     * Gets as id
     *
     * ID záznamu. Používá se při requestu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID záznamu. Používá se při requestu.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as year
     *
     * Účetní rok
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * Účetní rok
     *
     * @param int $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as yearType
     *
     * Typ účetního období.
     *
     * @return string
     */
    public function getYearType()
    {
        return $this->yearType;
    }

    /**
     * Sets a new yearType
     *
     * Typ účetního období.
     *
     * @param string $yearType
     * @return self
     */
    public function setYearType($yearType)
    {
        $this->yearType = $yearType;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * Počátek účetního období.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * Počátek účetního období.
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * Konec účetního období.
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * Konec účetního období.
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as unitType
     *
     * Typ účetní jednotky.
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * Sets a new unitType
     *
     * Typ účetní jednotky.
     *
     * @param string $unitType
     * @return self
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;
        return $this;
    }

    /**
     * Gets as stateType
     *
     * Stav - fyzická nebo právnická osoba.
     *
     * @return string
     */
    public function getStateType()
    {
        return $this->stateType;
    }

    /**
     * Sets a new stateType
     *
     * Stav - fyzická nebo právnická osoba.
     *
     * @param string $stateType
     * @return self
     */
    public function setStateType($stateType)
    {
        $this->stateType = $stateType;
        return $this;
    }

    /**
     * Gets as accountingUnitIdentity
     *
     * Adresa účetní jednotky.
     *
     * @return \Pohoda\Type\MyAddressType
     */
    public function getAccountingUnitIdentity()
    {
        return $this->accountingUnitIdentity;
    }

    /**
     * Sets a new accountingUnitIdentity
     *
     * Adresa účetní jednotky.
     *
     * @param \Pohoda\Type\MyAddressType $accountingUnitIdentity
     * @return self
     */
    public function setAccountingUnitIdentity(?\Pohoda\Type\MyAddressType $accountingUnitIdentity = null)
    {
        $this->accountingUnitIdentity = $accountingUnitIdentity;
        return $this;
    }

    /**
     * Gets as dataFile
     *
     * Adresa účetní jednotky.
     *
     * @return string
     */
    public function getDataFile()
    {
        return $this->dataFile;
    }

    /**
     * Sets a new dataFile
     *
     * Adresa účetní jednotky.
     *
     * @param string $dataFile
     * @return self
     */
    public function setDataFile($dataFile)
    {
        $this->dataFile = $dataFile;
        return $this;
    }

    /**
     * Gets as key
     *
     * Jedinečný identifikátor účetnictví firmy.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * Jedinečný identifikátor účetnictví firmy.
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}

