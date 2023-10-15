<?php

namespace Pohoda\Gdpr;

/**
 * Class representing GDPRHeaderType
 *
 * Důvody zpracování dat GDPR.
 * XSD Type: GDPRHeaderType
 */
class GDPRHeaderType
{
    /**
     * ID záznamu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Typ zpracování dat GDPR.
     *
     * @var string $gDPRType
     */
    private $gDPRType = null;

    /**
     * Název.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Hodnota délky platnosti souhlasu.
     *
     * @var int $valueOfValidity
     */
    private $valueOfValidity = null;

    /**
     * Typ rozsahu platnosti souhlasu.
     *
     * @var string $typeOfValidity
     */
    private $typeOfValidity = null;

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
     * Gets as id
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Gets as gDPRType
     *
     * Typ zpracování dat GDPR.
     *
     * @return string
     */
    public function getGDPRType()
    {
        return $this->gDPRType;
    }

    /**
     * Sets a new gDPRType
     *
     * Typ zpracování dat GDPR.
     *
     * @param string $gDPRType
     * @return self
     */
    public function setGDPRType($gDPRType)
    {
        $this->gDPRType = $gDPRType;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Název.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Popis.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as valueOfValidity
     *
     * Hodnota délky platnosti souhlasu.
     *
     * @return int
     */
    public function getValueOfValidity()
    {
        return $this->valueOfValidity;
    }

    /**
     * Sets a new valueOfValidity
     *
     * Hodnota délky platnosti souhlasu.
     *
     * @param int $valueOfValidity
     * @return self
     */
    public function setValueOfValidity($valueOfValidity)
    {
        $this->valueOfValidity = $valueOfValidity;
        return $this;
    }

    /**
     * Gets as typeOfValidity
     *
     * Typ rozsahu platnosti souhlasu.
     *
     * @return string
     */
    public function getTypeOfValidity()
    {
        return $this->typeOfValidity;
    }

    /**
     * Sets a new typeOfValidity
     *
     * Typ rozsahu platnosti souhlasu.
     *
     * @param string $typeOfValidity
     * @return self
     */
    public function setTypeOfValidity($typeOfValidity)
    {
        $this->typeOfValidity = $typeOfValidity;
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
}

