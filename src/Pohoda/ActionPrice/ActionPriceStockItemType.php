<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceStockItemType.
 *
 * XSD Type: actionPriceStockItemType
 */
class ActionPriceStockItemType
{
    /**
     * Skladová zásoba.
     */
    private ?\Pohoda\ActionPrice\StockType $stock = null;

    /**
     * Název.
     */
    private ?string $text = null;

    /**
     * Členění.
     */
    private ?\Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Původní cena skladové zásoby.
     */
    private ?\Pohoda\ActionPrice\DefaultPriceStockType $defaultPriceStock = null;

    /**
     * Akční cena skladové zásoby.
     */
    private ?\Pohoda\ActionPrice\ActionPriceStockType $actionPriceStock = null;

    /**
     * Gets as stock.
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
     * Sets a new stock.
     *
     * Skladová zásoba.
     *
     * @return self
     */
    public function setStock(?\Pohoda\ActionPrice\StockType $stock = null)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Gets as text.
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
     * Sets a new text.
     *
     * Název.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as storage.
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
     * Sets a new storage.
     *
     * Členění.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as defaultPriceStock.
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
     * Sets a new defaultPriceStock.
     *
     * Původní cena skladové zásoby.
     *
     * @return self
     */
    public function setDefaultPriceStock(?\Pohoda\ActionPrice\DefaultPriceStockType $defaultPriceStock = null)
    {
        $this->defaultPriceStock = $defaultPriceStock;

        return $this;
    }

    /**
     * Gets as actionPriceStock.
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
     * Sets a new actionPriceStock.
     *
     * Akční cena skladové zásoby.
     *
     * @return self
     */
    public function setActionPriceStock(?\Pohoda\ActionPrice\ActionPriceStockType $actionPriceStock = null)
    {
        $this->actionPriceStock = $actionPriceStock;

        return $this;
    }
}
