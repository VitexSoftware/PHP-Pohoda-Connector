<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceStocksType
 *
 * Akční ceny zásob. Verze 2.1 a vyšší.
 * XSD Type: actionPriceStocksType
 */
class ActionPriceStocksType
{
    /**
     * @var \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceStockItem
     */
    private $actionPriceStockItem = [
    ];

    /**
     * Adds as actionPriceStockItem
     *
     * @return self
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem
     */
    public function addToActionPriceStockItem(\Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem)
    {
        $this->actionPriceStockItem[] = $actionPriceStockItem;
        return $this;
    }

    /**
     * isset actionPriceStockItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPriceStockItem($index)
    {
        return isset($this->actionPriceStockItem[$index]);
    }

    /**
     * unset actionPriceStockItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPriceStockItem($index)
    {
        unset($this->actionPriceStockItem[$index]);
    }

    /**
     * Gets as actionPriceStockItem
     *
     * @return \Pohoda\ActionPrice\ActionPriceStockItemType[]
     */
    public function getActionPriceStockItem()
    {
        return $this->actionPriceStockItem;
    }

    /**
     * Sets a new actionPriceStockItem
     *
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceStockItem
     * @return self
     */
    public function setActionPriceStockItem(array $actionPriceStockItem)
    {
        $this->actionPriceStockItem = $actionPriceStockItem;
        return $this;
    }
}
