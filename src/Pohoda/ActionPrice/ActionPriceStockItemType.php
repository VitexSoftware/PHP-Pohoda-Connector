<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceStockItemType
 *
 *
 * XSD Type: actionPriceStockItemType
 */
class ActionPriceStockItemType
{
    /**
     * Skladová zásoba.
     *
     * @var \Pohoda\ActionPrice\StockType $stock
     */
    private $stock = null;

    /**
     * Název.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Členění.
     *
     * @var \Pohoda\Type\RefTypeStorageType $storage
     */
    private $storage = null;

    /**
     * Původní cena skladové zásoby.
     *
     * @var \Pohoda\ActionPrice\DefaultPriceStockType $defaultPriceStock
     */
    private $defaultPriceStock = null;

    /**
     * Akční cena skladové zásoby.
     *
     * @var \Pohoda\ActionPrice\ActionPriceStockType $actionPriceStock
     */
    private $actionPriceStock = null;

    /**
     * Gets as stock
     *
     * Skladová zásoba.
     *
     * @return \Pohoda\ActionPrice\StockType
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets a new stock
     *
     * Skladová zásoba.
     *
     * @param \Pohoda\ActionPrice\StockType $stock
     * @return self
     */
    public function setStock(?\Pohoda\ActionPrice\StockType $stock = null)
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * Gets as text
     *
     * Název.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Název.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as storage
     *
     * Členění.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage
     *
     * Členění.
     *
     * @param \Pohoda\Type\RefTypeStorageType $storage
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * Gets as defaultPriceStock
     *
     * Původní cena skladové zásoby.
     *
     * @return \Pohoda\ActionPrice\DefaultPriceStockType
     */
    public function getDefaultPriceStock()
    {
        return $this->defaultPriceStock;
    }

    /**
     * Sets a new defaultPriceStock
     *
     * Původní cena skladové zásoby.
     *
     * @param \Pohoda\ActionPrice\DefaultPriceStockType $defaultPriceStock
     * @return self
     */
    public function setDefaultPriceStock(?\Pohoda\ActionPrice\DefaultPriceStockType $defaultPriceStock = null)
    {
        $this->defaultPriceStock = $defaultPriceStock;
        return $this;
    }

    /**
     * Gets as actionPriceStock
     *
     * Akční cena skladové zásoby.
     *
     * @return \Pohoda\ActionPrice\ActionPriceStockType
     */
    public function getActionPriceStock()
    {
        return $this->actionPriceStock;
    }

    /**
     * Sets a new actionPriceStock
     *
     * Akční cena skladové zásoby.
     *
     * @param \Pohoda\ActionPrice\ActionPriceStockType $actionPriceStock
     * @return self
     */
    public function setActionPriceStock(?\Pohoda\ActionPrice\ActionPriceStockType $actionPriceStock = null)
    {
        $this->actionPriceStock = $actionPriceStock;
        return $this;
    }
}

