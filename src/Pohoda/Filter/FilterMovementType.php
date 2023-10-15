<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterMovementType
 *
 *
 * XSD Type: filterMovementType
 */
class FilterMovementType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Filtr podle skladové zásoby.
     *
     * @var \Pohoda\Type\StockItemMovementType $stockItem
     */
    private $stockItem = null;

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
     * Typ agendy.
     *
     * @var string $agenda
     */
    private $agenda = null;

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
     * Gets as stockItem
     *
     * Filtr podle skladové zásoby.
     *
     * @return \Pohoda\Type\StockItemMovementType
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
     * @param \Pohoda\Type\StockItemMovementType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemMovementType $stockItem = null)
    {
        $this->stockItem = $stockItem;
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
     * Gets as agenda
     *
     * Typ agendy.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * Typ agendy.
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }
}

