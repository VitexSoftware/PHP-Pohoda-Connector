<?php

namespace Pohoda\Stock;

/**
 * Class representing StockDetailType
 *
 *
 * XSD Type: stockDetailType
 */
class StockDetailType
{
    /**
     * @var \Pohoda\Stock\StockItemType[] $stockItem
     */
    private $stockItem = [

    ];

    /**
     * Adds as stockItem
     *
     * @return self
     * @param \Pohoda\Stock\StockItemType $stockItem
     */
    public function addToStockItem(\Pohoda\Stock\StockItemType $stockItem)
    {
        $this->stockItem[] = $stockItem;
        return $this;
    }

    /**
     * isset stockItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStockItem($index)
    {
        return isset($this->stockItem[$index]);
    }

    /**
     * unset stockItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStockItem($index)
    {
        unset($this->stockItem[$index]);
    }

    /**
     * Gets as stockItem
     *
     * @return \Pohoda\Stock\StockItemType[]
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * @param \Pohoda\Stock\StockItemType[] $stockItem
     * @return self
     */
    public function setStockItem(array $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }
}
