<?php

namespace Pohoda\Stock;

/**
 * Class representing AlternativeStocksType
 *
 * Seznam ID alternativních zásob.
 * XSD Type: alternativeStocksType
 */
class AlternativeStocksType
{
    /**
     * @var \Pohoda\Type\OrderStockItemType[] $idStocks
     */
    private $idStocks = [

    ];

    /**
     * Adds as idStocks
     *
     * @return self
     * @param \Pohoda\Type\OrderStockItemType $idStocks
     */
    public function addToIdStocks(\Pohoda\Type\OrderStockItemType $idStocks)
    {
        $this->idStocks[] = $idStocks;
        return $this;
    }

    /**
     * isset idStocks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdStocks($index)
    {
        return isset($this->idStocks[$index]);
    }

    /**
     * unset idStocks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdStocks($index)
    {
        unset($this->idStocks[$index]);
    }

    /**
     * Gets as idStocks
     *
     * @return \Pohoda\Type\OrderStockItemType[]
     */
    public function getIdStocks()
    {
        return $this->idStocks;
    }

    /**
     * Sets a new idStocks
     *
     * @param \Pohoda\Type\OrderStockItemType[] $idStocks
     * @return self
     */
    public function setIdStocks(array $idStocks = null)
    {
        $this->idStocks = $idStocks;
        return $this;
    }
}
