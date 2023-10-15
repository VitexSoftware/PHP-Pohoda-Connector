<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceType
 *
 *
 * XSD Type: actionPriceType
 */
class ActionPriceType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\ActionPrice\ActionPriceHeaderType $actionPriceHeader
     */
    private $actionPriceHeader = null;

    /**
     * Verze 2.0
     *
     * @var \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceItem
     */
    private $actionPriceItem = null;

    /**
     * Verze 2.1 a vyšší
     *
     * @var \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceStocks
     */
    private $actionPriceStocks = null;

    /**
     * @var \Pohoda\ActionPrice\CustomerType[] $actionPriceCustomers
     */
    private $actionPriceCustomers = null;

    /**
     * @var \Pohoda\ActionPrice\GroupType[] $actionPriceGroups
     */
    private $actionPriceGroups = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as actionPriceHeader
     *
     * @return \Pohoda\ActionPrice\ActionPriceHeaderType
     */
    public function getActionPriceHeader()
    {
        return $this->actionPriceHeader;
    }

    /**
     * Sets a new actionPriceHeader
     *
     * @param \Pohoda\ActionPrice\ActionPriceHeaderType $actionPriceHeader
     * @return self
     */
    public function setActionPriceHeader(?\Pohoda\ActionPrice\ActionPriceHeaderType $actionPriceHeader = null)
    {
        $this->actionPriceHeader = $actionPriceHeader;
        return $this;
    }

    /**
     * Adds as actionPriceStockItem
     *
     * Verze 2.0
     *
     * @return self
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem
     */
    public function addToActionPriceItem(\Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem)
    {
        $this->actionPriceItem[] = $actionPriceStockItem;
        return $this;
    }

    /**
     * isset actionPriceItem
     *
     * Verze 2.0
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPriceItem($index)
    {
        return isset($this->actionPriceItem[$index]);
    }

    /**
     * unset actionPriceItem
     *
     * Verze 2.0
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPriceItem($index)
    {
        unset($this->actionPriceItem[$index]);
    }

    /**
     * Gets as actionPriceItem
     *
     * Verze 2.0
     *
     * @return \Pohoda\ActionPrice\ActionPriceStockItemType[]
     */
    public function getActionPriceItem()
    {
        return $this->actionPriceItem;
    }

    /**
     * Sets a new actionPriceItem
     *
     * Verze 2.0
     *
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceItem
     * @return self
     */
    public function setActionPriceItem(array $actionPriceItem = null)
    {
        $this->actionPriceItem = $actionPriceItem;
        return $this;
    }

    /**
     * Adds as actionPriceStockItem
     *
     * Verze 2.1 a vyšší
     *
     * @return self
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem
     */
    public function addToActionPriceStocks(\Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem)
    {
        $this->actionPriceStocks[] = $actionPriceStockItem;
        return $this;
    }

    /**
     * isset actionPriceStocks
     *
     * Verze 2.1 a vyšší
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPriceStocks($index)
    {
        return isset($this->actionPriceStocks[$index]);
    }

    /**
     * unset actionPriceStocks
     *
     * Verze 2.1 a vyšší
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPriceStocks($index)
    {
        unset($this->actionPriceStocks[$index]);
    }

    /**
     * Gets as actionPriceStocks
     *
     * Verze 2.1 a vyšší
     *
     * @return \Pohoda\ActionPrice\ActionPriceStockItemType[]
     */
    public function getActionPriceStocks()
    {
        return $this->actionPriceStocks;
    }

    /**
     * Sets a new actionPriceStocks
     *
     * Verze 2.1 a vyšší
     *
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceStocks
     * @return self
     */
    public function setActionPriceStocks(array $actionPriceStocks = null)
    {
        $this->actionPriceStocks = $actionPriceStocks;
        return $this;
    }

    /**
     * Adds as customer
     *
     * @return self
     * @param \Pohoda\ActionPrice\CustomerType $customer
     */
    public function addToActionPriceCustomers(\Pohoda\ActionPrice\CustomerType $customer)
    {
        $this->actionPriceCustomers[] = $customer;
        return $this;
    }

    /**
     * isset actionPriceCustomers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPriceCustomers($index)
    {
        return isset($this->actionPriceCustomers[$index]);
    }

    /**
     * unset actionPriceCustomers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPriceCustomers($index)
    {
        unset($this->actionPriceCustomers[$index]);
    }

    /**
     * Gets as actionPriceCustomers
     *
     * @return \Pohoda\ActionPrice\CustomerType[]
     */
    public function getActionPriceCustomers()
    {
        return $this->actionPriceCustomers;
    }

    /**
     * Sets a new actionPriceCustomers
     *
     * @param \Pohoda\ActionPrice\CustomerType[] $actionPriceCustomers
     * @return self
     */
    public function setActionPriceCustomers(array $actionPriceCustomers = null)
    {
        $this->actionPriceCustomers = $actionPriceCustomers;
        return $this;
    }

    /**
     * Adds as group
     *
     * @return self
     * @param \Pohoda\ActionPrice\GroupType $group
     */
    public function addToActionPriceGroups(\Pohoda\ActionPrice\GroupType $group)
    {
        $this->actionPriceGroups[] = $group;
        return $this;
    }

    /**
     * isset actionPriceGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPriceGroups($index)
    {
        return isset($this->actionPriceGroups[$index]);
    }

    /**
     * unset actionPriceGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPriceGroups($index)
    {
        unset($this->actionPriceGroups[$index]);
    }

    /**
     * Gets as actionPriceGroups
     *
     * @return \Pohoda\ActionPrice\GroupType[]
     */
    public function getActionPriceGroups()
    {
        return $this->actionPriceGroups;
    }

    /**
     * Sets a new actionPriceGroups
     *
     * @param \Pohoda\ActionPrice\GroupType[] $actionPriceGroups
     * @return self
     */
    public function setActionPriceGroups(array $actionPriceGroups = null)
    {
        $this->actionPriceGroups = $actionPriceGroups;
        return $this;
    }
}
