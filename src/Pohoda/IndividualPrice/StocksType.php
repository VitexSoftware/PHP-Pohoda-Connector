<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing StocksType
 *
 *
 * XSD Type: stocksType
 */
class StocksType
{
    /**
     * Individuální cena zásoby
     *
     * @var \Pohoda\IndividualPrice\StockItemType[] $stockItem
     */
    private $stockItem = [
        
    ];

    /**
     * Adds as stockItem
     *
     * Individuální cena zásoby
     *
     * @return self
     * @param \Pohoda\IndividualPrice\StockItemType $stockItem
     */
    public function addToStockItem(\Pohoda\IndividualPrice\StockItemType $stockItem)
    {
        $this->stockItem[] = $stockItem;
        return $this;
    }

    /**
     * isset stockItem
     *
     * Individuální cena zásoby
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
     * Individuální cena zásoby
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
     * Individuální cena zásoby
     *
     * @return \Pohoda\IndividualPrice\StockItemType[]
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Individuální cena zásoby
     *
     * @param \Pohoda\IndividualPrice\StockItemType[] $stockItem
     * @return self
     */
    public function setStockItem(array $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }
}

