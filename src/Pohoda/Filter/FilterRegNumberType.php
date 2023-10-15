<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterRegNumberType
 *
 *
 * XSD Type: filterRegNumberType
 */
class FilterRegNumberType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Filtr podle evidenčního čísla.
     *
     * @var string $regNumber
     */
    private $regNumber = null;

    /**
     * Filtr podle skladové zásoby.
     *
     * @var \Pohoda\Type\StockItemRegNumberType $stockItem
     */
    private $stockItem = null;

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
     * Vybere záznam dle zadaného externího identifikátoru.
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
     * Vybere záznam dle zadaného externího identifikátoru.
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
     * Filtr podle evidenčního čísla.
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
     * Filtr podle evidenčního čísla.
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
     * Filtr podle skladové zásoby.
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
     * Filtr podle skladové zásoby.
     *
     * @param \Pohoda\Type\StockItemRegNumberType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemRegNumberType $stockItem = null)
    {
        $this->stockItem = $stockItem;
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

