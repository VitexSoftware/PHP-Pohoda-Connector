<?php

namespace Pohoda\ListStock;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListStockType
 *
 *
 * XSD Type: listStockType
 */
class ListStockType extends ListVersionType
{
    /**
     * @var \Pohoda\Stock\StockType[] $stock
     */
    private $stock = [

    ];

    /**
     * Adds as stock
     *
     * @return self
     * @param \Pohoda\Stock\StockType $stock
     */
    public function addToStock(\Pohoda\Stock\StockType $stock)
    {
        $this->stock[] = $stock;
        return $this;
    }

    /**
     * isset stock
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStock($index)
    {
        return isset($this->stock[$index]);
    }

    /**
     * unset stock
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStock($index)
    {
        unset($this->stock[$index]);
    }

    /**
     * Gets as stock
     *
     * @return \Pohoda\Stock\StockType[]
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets a new stock
     *
     * @param \Pohoda\Stock\StockType[] $stock
     * @return self
     */
    public function setStock(array $stock = null)
    {
        $this->stock = $stock;
        return $this;
    }
}
