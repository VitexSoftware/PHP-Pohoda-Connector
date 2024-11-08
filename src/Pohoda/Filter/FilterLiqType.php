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

namespace Pohoda\Filter;

/**
 * Class representing FilterLiqType.
 *
 * XSD Type: filterLiqType
 */
class FilterLiqType
{
    /**
     * Filtr podle ID záznamu.
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Bankovní účet.
     */
    private ?\Pohoda\Type\RefType $bankAccount = null;

    /**
     * Datum od.
     */
    private ?\DateTime $dateFrom = null;

    /**
     * Datum do.
     */
    private ?\DateTime $dateTill = null;

    /**
     * @var \Pohoda\Type\NumberType[]
     */
    private ?array $selectedNumbers = null;

    /**
     * @var string[]
     */
    private ?array $selectedCompanys = null;

    /**
     * @var string[]
     */
    private ?array $selectedIco = null;

    /**
     * Gets as id.
     *
     * Filtr podle ID záznamu.
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
     * Filtr podle ID záznamu.
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
     * Gets as extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as bankAccount.
     *
     * Bankovní účet.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount.
     *
     * Bankovní účet.
     *
     * @return self
     */
    public function setBankAccount(?\Pohoda\Type\RefType $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Gets as dateFrom.
     *
     * Datum od.
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
     * Datum od.
     *
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTill.
     *
     * Datum do.
     *
     * @return \DateTime
     */
    public function getDateTill()
    {
        return $this->dateTill;
    }

    /**
     * Sets a new dateTill.
     *
     * Datum do.
     *
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;

        return $this;
    }

    /**
     * Adds as number.
     *
     * @return self
     */
    public function addToSelectedNumbers(\Pohoda\Type\NumberType $number)
    {
        $this->selectedNumbers[] = $number;

        return $this;
    }

    /**
     * isset selectedNumbers.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSelectedNumbers($index)
    {
        return isset($this->selectedNumbers[$index]);
    }

    /**
     * unset selectedNumbers.
     *
     * @param int|string $index
     */
    public function unsetSelectedNumbers($index): void
    {
        unset($this->selectedNumbers[$index]);
    }

    /**
     * Gets as selectedNumbers.
     *
     * @return \Pohoda\Type\NumberType[]
     */
    public function getSelectedNumbers()
    {
        return $this->selectedNumbers;
    }

    /**
     * Sets a new selectedNumbers.
     *
     * @param \Pohoda\Type\NumberType[] $selectedNumbers
     *
     * @return self
     */
    public function setSelectedNumbers(?array $selectedNumbers = null)
    {
        $this->selectedNumbers = $selectedNumbers;

        return $this;
    }

    /**
     * Adds as company.
     *
     * @param string $company
     *
     * @return self
     */
    public function addToSelectedCompanys($company)
    {
        $this->selectedCompanys[] = $company;

        return $this;
    }

    /**
     * isset selectedCompanys.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSelectedCompanys($index)
    {
        return isset($this->selectedCompanys[$index]);
    }

    /**
     * unset selectedCompanys.
     *
     * @param int|string $index
     */
    public function unsetSelectedCompanys($index): void
    {
        unset($this->selectedCompanys[$index]);
    }

    /**
     * Gets as selectedCompanys.
     *
     * @return string[]
     */
    public function getSelectedCompanys()
    {
        return $this->selectedCompanys;
    }

    /**
     * Sets a new selectedCompanys.
     *
     * @param string $selectedCompanys
     *
     * @return self
     */
    public function setSelectedCompanys(?array $selectedCompanys = null)
    {
        $this->selectedCompanys = $selectedCompanys;

        return $this;
    }

    /**
     * Adds as ico.
     *
     * @param string $ico
     *
     * @return self
     */
    public function addToSelectedIco($ico)
    {
        $this->selectedIco[] = $ico;

        return $this;
    }

    /**
     * isset selectedIco.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSelectedIco($index)
    {
        return isset($this->selectedIco[$index]);
    }

    /**
     * unset selectedIco.
     *
     * @param int|string $index
     */
    public function unsetSelectedIco($index): void
    {
        unset($this->selectedIco[$index]);
    }

    /**
     * Gets as selectedIco.
     *
     * @return string[]
     */
    public function getSelectedIco()
    {
        return $this->selectedIco;
    }

    /**
     * Sets a new selectedIco.
     *
     * @param string $selectedIco
     *
     * @return self
     */
    public function setSelectedIco(?array $selectedIco = null)
    {
        $this->selectedIco = $selectedIco;

        return $this;
    }
}
