<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterDocsType
 *
 *
 * XSD Type: filterDocsType
 */
class FilterDocsType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Datum od.
     *
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * Datum do.
     *
     * @var \DateTime $dateTill
     */
    private $dateTill = null;

    /**
     * @var \Pohoda\Type\NumberType[] $selectedNumbers
     */
    private $selectedNumbers = null;

    /**
     * @var string[] $selectedCompanys
     */
    private $selectedCompanys = null;

    /**
     * @var string[] $selectedIco
     */
    private $selectedIco = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.
     *
     * @var \DateTime $lastChanges
     */
    private $lastChanges = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * Filtr podle ID záznamu.
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
     * Gets as extId
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
     * Sets a new extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as dateFrom
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
     * Sets a new dateFrom
     *
     * Datum od.
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTill
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
     * Sets a new dateTill
     *
     * Datum do.
     *
     * @param \DateTime $dateTill
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;
        return $this;
    }

    /**
     * Adds as number
     *
     * @return self
     * @param \Pohoda\Type\NumberType $number
     */
    public function addToSelectedNumbers(\Pohoda\Type\NumberType $number)
    {
        $this->selectedNumbers[] = $number;
        return $this;
    }

    /**
     * isset selectedNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSelectedNumbers($index)
    {
        return isset($this->selectedNumbers[$index]);
    }

    /**
     * unset selectedNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSelectedNumbers($index)
    {
        unset($this->selectedNumbers[$index]);
    }

    /**
     * Gets as selectedNumbers
     *
     * @return \Pohoda\Type\NumberType[]
     */
    public function getSelectedNumbers()
    {
        return $this->selectedNumbers;
    }

    /**
     * Sets a new selectedNumbers
     *
     * @param \Pohoda\Type\NumberType[] $selectedNumbers
     * @return self
     */
    public function setSelectedNumbers(array $selectedNumbers = null)
    {
        $this->selectedNumbers = $selectedNumbers;
        return $this;
    }

    /**
     * Adds as company
     *
     * @return self
     * @param string $company
     */
    public function addToSelectedCompanys($company)
    {
        $this->selectedCompanys[] = $company;
        return $this;
    }

    /**
     * isset selectedCompanys
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSelectedCompanys($index)
    {
        return isset($this->selectedCompanys[$index]);
    }

    /**
     * unset selectedCompanys
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSelectedCompanys($index)
    {
        unset($this->selectedCompanys[$index]);
    }

    /**
     * Gets as selectedCompanys
     *
     * @return string[]
     */
    public function getSelectedCompanys()
    {
        return $this->selectedCompanys;
    }

    /**
     * Sets a new selectedCompanys
     *
     * @param string $selectedCompanys
     * @return self
     */
    public function setSelectedCompanys(array $selectedCompanys = null)
    {
        $this->selectedCompanys = $selectedCompanys;
        return $this;
    }

    /**
     * Adds as ico
     *
     * @return self
     * @param string $ico
     */
    public function addToSelectedIco($ico)
    {
        $this->selectedIco[] = $ico;
        return $this;
    }

    /**
     * isset selectedIco
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSelectedIco($index)
    {
        return isset($this->selectedIco[$index]);
    }

    /**
     * unset selectedIco
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSelectedIco($index)
    {
        unset($this->selectedIco[$index]);
    }

    /**
     * Gets as selectedIco
     *
     * @return string[]
     */
    public function getSelectedIco()
    {
        return $this->selectedIco;
    }

    /**
     * Sets a new selectedIco
     *
     * @param string $selectedIco
     * @return self
     */
    public function setSelectedIco(array $selectedIco = null)
    {
        $this->selectedIco = $selectedIco;
        return $this;
    }

    /**
     * Gets as lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.
     *
     * @return \DateTime
     */
    public function getLastChanges()
    {
        return $this->lastChanges;
    }

    /**
     * Sets a new lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.
     *
     * @param \DateTime $lastChanges
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;
        return $this;
    }
}

