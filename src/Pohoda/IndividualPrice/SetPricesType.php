<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing SetPricesType
 *
 *
 * XSD Type: setPricesType
 */
class SetPricesType
{
    /**
     * Individuální ceny zásob.
     *
     * @var \Pohoda\IndividualPrice\StockItemType[] $stocks
     */
    private $stocks = null;

    /**
     * Individuální ceny cenových skupin.
     *
     * @var \Pohoda\IndividualPrice\PriceGroupItemType[] $priceGroups
     */
    private $priceGroups = null;

    /**
     * Sleva na všechny zásoby.
     *
     * @var \Pohoda\IndividualPrice\AllStocksType $allStocks
     */
    private $allStocks = null;

    /**
     * Adds as stockItem
     *
     * Individuální ceny zásob.
     *
     * @return self
     * @param \Pohoda\IndividualPrice\StockItemType $stockItem
     */
    public function addToStocks(\Pohoda\IndividualPrice\StockItemType $stockItem)
    {
        $this->stocks[] = $stockItem;
        return $this;
    }

    /**
     * isset stocks
     *
     * Individuální ceny zásob.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStocks($index)
    {
        return isset($this->stocks[$index]);
    }

    /**
     * unset stocks
     *
     * Individuální ceny zásob.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStocks($index)
    {
        unset($this->stocks[$index]);
    }

    /**
     * Gets as stocks
     *
     * Individuální ceny zásob.
     *
     * @return \Pohoda\IndividualPrice\StockItemType[]
     */
    public function getStocks()
    {
        return $this->stocks;
    }

    /**
     * Sets a new stocks
     *
     * Individuální ceny zásob.
     *
     * @param \Pohoda\IndividualPrice\StockItemType[] $stocks
     * @return self
     */
    public function setStocks(array $stocks = null)
    {
        $this->stocks = $stocks;
        return $this;
    }

    /**
     * Adds as priceGroupItem
     *
     * Individuální ceny cenových skupin.
     *
     * @return self
     * @param \Pohoda\IndividualPrice\PriceGroupItemType $priceGroupItem
     */
    public function addToPriceGroups(\Pohoda\IndividualPrice\PriceGroupItemType $priceGroupItem)
    {
        $this->priceGroups[] = $priceGroupItem;
        return $this;
    }

    /**
     * isset priceGroups
     *
     * Individuální ceny cenových skupin.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceGroups($index)
    {
        return isset($this->priceGroups[$index]);
    }

    /**
     * unset priceGroups
     *
     * Individuální ceny cenových skupin.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceGroups($index)
    {
        unset($this->priceGroups[$index]);
    }

    /**
     * Gets as priceGroups
     *
     * Individuální ceny cenových skupin.
     *
     * @return \Pohoda\IndividualPrice\PriceGroupItemType[]
     */
    public function getPriceGroups()
    {
        return $this->priceGroups;
    }

    /**
     * Sets a new priceGroups
     *
     * Individuální ceny cenových skupin.
     *
     * @param \Pohoda\IndividualPrice\PriceGroupItemType[] $priceGroups
     * @return self
     */
    public function setPriceGroups(array $priceGroups = null)
    {
        $this->priceGroups = $priceGroups;
        return $this;
    }

    /**
     * Gets as allStocks
     *
     * Sleva na všechny zásoby.
     *
     * @return \Pohoda\IndividualPrice\AllStocksType
     */
    public function getAllStocks()
    {
        return $this->allStocks;
    }

    /**
     * Sets a new allStocks
     *
     * Sleva na všechny zásoby.
     *
     * @param \Pohoda\IndividualPrice\AllStocksType $allStocks
     * @return self
     */
    public function setAllStocks(?\Pohoda\IndividualPrice\AllStocksType $allStocks = null)
    {
        $this->allStocks = $allStocks;
        return $this;
    }
}
