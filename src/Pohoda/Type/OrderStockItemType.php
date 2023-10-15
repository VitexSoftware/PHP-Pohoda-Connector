<?php

namespace Pohoda\Type;

/**
 * Class representing OrderStockItemType
 *
 *
 * XSD Type: orderStockItemType
 */
class OrderStockItemType
{
    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\Type\ActionTypeStockItemType $actionType
     */
    private $actionType = null;

    /**
     * Pořadí položek.
     *
     * @var int $stockOrder
     */
    private $stockOrder = null;

    /**
     * Odkaz na skladovou položku.
     *
     * @var \Pohoda\Type\StockRefType $stockItem
     */
    private $stockItem = null;

    /**
     * Gets as actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Type\ActionTypeStockItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\Type\ActionTypeStockItemType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeStockItemType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as stockOrder
     *
     * Pořadí položek.
     *
     * @return int
     */
    public function getStockOrder()
    {
        return $this->stockOrder;
    }

    /**
     * Sets a new stockOrder
     *
     * Pořadí položek.
     *
     * @param int $stockOrder
     * @return self
     */
    public function setStockOrder($stockOrder)
    {
        $this->stockOrder = $stockOrder;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockRefType
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
     * @param \Pohoda\Type\StockRefType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockRefType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }
}
