<?php

namespace Pohoda\RegistrationNumber;

/**
 * Class representing RegistrationNumberHeaderType
 *
 * Evidenční čísla
 * XSD Type: registrationNumberHeaderType
 */
class RegistrationNumberHeaderType
{
    /**
     * ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Identifikátor externího systému.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Evidenční číslo.
     *
     * @var string $regNumber
     */
    private $regNumber = null;

    /**
     * Odkaz na skladovou položku.
     *
     * @var \Pohoda\Type\StockItemRegNumberType $stockItem
     */
    private $stockItem = null;

    /**
     * Typ evidenčního čísla (výrobní číslo/šarže).
     *
     * @var string $regNumberType
     */
    private $regNumberType = null;

    /**
     * Datum expirace (pouze pro šarže).
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * Stav zásoby.
     *
     * @var float $count
     */
    private $count = null;

    /**
     * Stav zásoby v reklamaci.
     *
     * @var float $reclamation
     */
    private $reclamation = null;

    /**
     * Servis.
     *
     * @var float $service
     */
    private $service = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Volitelné parametry.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as id
     *
     * ID záznamu.
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
     * ID záznamu.
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
     * Identifikátor externího systému.
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
     * Identifikátor externího systému.
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
     * Gets as regNumber
     *
     * Evidenční číslo.
     *
     * @return string
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Sets a new regNumber
     *
     * Evidenční číslo.
     *
     * @param string $regNumber
     * @return self
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockItemRegNumberType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @param \Pohoda\Type\StockItemRegNumberType $stockItem
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemRegNumberType $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as regNumberType
     *
     * Typ evidenčního čísla (výrobní číslo/šarže).
     *
     * @return string
     */
    public function getRegNumberType()
    {
        return $this->regNumberType;
    }

    /**
     * Sets a new regNumberType
     *
     * Typ evidenčního čísla (výrobní číslo/šarže).
     *
     * @param string $regNumberType
     * @return self
     */
    public function setRegNumberType($regNumberType)
    {
        $this->regNumberType = $regNumberType;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Datum expirace (pouze pro šarže).
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Datum expirace (pouze pro šarže).
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as count
     *
     * Stav zásoby.
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Stav zásoby.
     *
     * @param float $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as reclamation
     *
     * Stav zásoby v reklamaci.
     *
     * @return float
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * Sets a new reclamation
     *
     * Stav zásoby v reklamaci.
     *
     * @param float $reclamation
     * @return self
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    /**
     * Gets as service
     *
     * Servis.
     *
     * @return float
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Servis.
     *
     * @param float $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Volitelné parametry.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * Volitelné parametry.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Volitelné parametry.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
