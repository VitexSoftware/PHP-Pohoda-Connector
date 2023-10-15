<?php

namespace Pohoda\RulesPairing;

/**
 * Class representing RulesPairingHeaderType
 *
 *
 * XSD Type: rulesPairingHeaderType
 */
class RulesPairingHeaderType
{
    /**
     * ID záznamu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název pravidla párování dokladů.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Nabízet při automatické likvidaci.
     *
     * @var string $automaticLiquidation
     */
    private $automaticLiquidation = null;

    /**
     * Poznámka
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
     * Gets as ids
     *
     * Název pravidla párování dokladů.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * Název pravidla párování dokladů.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as automaticLiquidation
     *
     * Nabízet při automatické likvidaci.
     *
     * @return string
     */
    public function getAutomaticLiquidation()
    {
        return $this->automaticLiquidation;
    }

    /**
     * Sets a new automaticLiquidation
     *
     * Nabízet při automatické likvidaci.
     *
     * @param string $automaticLiquidation
     * @return self
     */
    public function setAutomaticLiquidation($automaticLiquidation)
    {
        $this->automaticLiquidation = $automaticLiquidation;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka
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
     * Poznámka
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

