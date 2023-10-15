<?php

namespace Pohoda\GroupStocks;

/**
 * Class representing VariantsItemType
 *
 *
 * XSD Type: variantsItemType
 */
class VariantsItemType
{
    /**
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     *
     * @var \Pohoda\Type\ActionTypeItemAddDeleteType $actionType
     */
    private $actionType = null;

    /**
     * Odkaz na skladovou položku.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Pořadí skladových položek (Pouze pro export).
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Název skladové položky.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Množství skladové položky.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Gets as actionType
     *
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     *
     * @return \Pohoda\Type\ActionTypeItemAddDeleteType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     *
     * @param \Pohoda\Type\ActionTypeItemAddDeleteType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemAddDeleteType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockItemType
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
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as order
     *
     * Pořadí skladových položek (Pouze pro export).
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Pořadí skladových položek (Pouze pro export).
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název skladové položky.
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
     * Název skladové položky.
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
     * Gets as quantity
     *
     * Množství skladové položky.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Množství skladové položky.
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}

