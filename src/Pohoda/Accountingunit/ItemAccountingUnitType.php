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

namespace Pohoda\Accountingunit;

/**
 * Class representing ItemAccountingUnitType.
 *
 * XSD Type: itemAccountingUnitType
 */
class ItemAccountingUnitType
{
    /**
     * ID záznamu. Používá se při requestu.
     */
    private int $id = null;

    /**
     * Účetní rok.
     */
    private int $year = null;

    /**
     * Typ účetního období.
     */
    private string $yearType = null;

    /**
     * Počátek účetního období.
     */
    private \DateTime $dateFrom = null;

    /**
     * Konec účetního období.
     */
    private \DateTime $dateTo = null;

    /**
     * Typ účetní jednotky.
     */
    private string $unitType = null;

    /**
     * Stav - fyzická nebo právnická osoba.
     */
    private string $stateType = null;

    /**
     * Adresa účetní jednotky.
     */
    private \Pohoda\Type\MyAddressType $accountingUnitIdentity = null;

    /**
     * Adresa účetní jednotky.
     */
    private string $dataFile = null;

    /**
     * Jedinečný identifikátor účetnictví firmy.
     */
    private string $key = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID záznamu. Používá se při requestu.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as year.
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
     * Sets a new year.
     *
     * Účetní rok
     *
     * @param int $year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Gets as yearType.
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
     * Sets a new yearType.
     *
     * Typ účetního období.
     *
     * @param string $yearType
     *
     * @return self
     */
    public function setYearType($yearType)
    {
        $this->yearType = $yearType;

        return $this;
    }

    /**
     * Gets as dateFrom.
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
     * Sets a new dateFrom.
     *
     * Počátek účetního období.
     *
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTo.
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
     * Sets a new dateTo.
     *
     * Konec účetního období.
     *
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Gets as unitType.
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
     * Sets a new unitType.
     *
     * Typ účetní jednotky.
     *
     * @param string $unitType
     *
     * @return self
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * Gets as stateType.
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
     * Sets a new stateType.
     *
     * Stav - fyzická nebo právnická osoba.
     *
     * @param string $stateType
     *
     * @return self
     */
    public function setStateType($stateType)
    {
        $this->stateType = $stateType;

        return $this;
    }

    /**
     * Gets as accountingUnitIdentity.
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
     * Sets a new accountingUnitIdentity.
     *
     * Adresa účetní jednotky.
     *
     * @return self
     */
    public function setAccountingUnitIdentity(?\Pohoda\Type\MyAddressType $accountingUnitIdentity = null)
    {
        $this->accountingUnitIdentity = $accountingUnitIdentity;

        return $this;
    }

    /**
     * Gets as dataFile.
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
     * Sets a new dataFile.
     *
     * Adresa účetní jednotky.
     *
     * @param string $dataFile
     *
     * @return self
     */
    public function setDataFile($dataFile)
    {
        $this->dataFile = $dataFile;

        return $this;
    }

    /**
     * Gets as key.
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
     * Sets a new key.
     *
     * Jedinečný identifikátor účetnictví firmy.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
