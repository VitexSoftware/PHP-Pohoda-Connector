<?php

namespace Pohoda\Stock;

/**
 * Class representing StockPriceItemType
 *
 *
 * XSD Type: stockPriceItemType
 */
class StockPriceItemType
{
    /**
     * @var \Pohoda\Type\StockPriceType[] $stockPrice
     */
    private $stockPrice = [
        
    ];

    /**
     * Adds as stockPrice
     *
     * @return self
     * @param \Pohoda\Type\StockPriceType $stockPrice
     */
    public function addToStockPrice(\Pohoda\Type\StockPriceType $stockPrice)
    {
        $this->stockPrice[] = $stockPrice;
        return $this;
    }

    /**
     * isset stockPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStockPrice($index)
    {
        return isset($this->stockPrice[$index]);
    }

    /**
     * unset stockPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStockPrice($index)
    {
        unset($this->stockPrice[$index]);
    }

    /**
     * Gets as stockPrice
     *
     * @return \Pohoda\Type\StockPriceType[]
     */
    public function getStockPrice()
    {
        return $this->stockPrice;
    }

    /**
     * Sets a new stockPrice
     *
     * @param \Pohoda\Type\StockPriceType[] $stockPrice
     * @return self
     */
    public function setStockPrice(array $stockPrice)
    {
        $this->stockPrice = $stockPrice;
        return $this;
    }
}

