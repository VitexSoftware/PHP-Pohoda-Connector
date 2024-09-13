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
 * Class representing ActionPriceStocksType.
 *
 * Akční ceny zásob. Verze 2.1 a vyšší.
 * XSD Type: actionPriceStocksType
 */
class ActionPriceStocksType
{
    /**
     * @var \Pohoda\ActionPrice\ActionPriceStockItemType[]
     */
    private array $actionPriceStockItem = [
    ];

    /**
     * Adds as actionPriceStockItem.
     *
     * @return self
     */
    public function addToActionPriceStockItem(\Pohoda\ActionPrice\ActionPriceStockItemType $actionPriceStockItem)
    {
        $this->actionPriceStockItem[] = $actionPriceStockItem;

        return $this;
    }

    /**
     * isset actionPriceStockItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActionPriceStockItem($index)
    {
        return isset($this->actionPriceStockItem[$index]);
    }

    /**
     * unset actionPriceStockItem.
     *
     * @param int|string $index
     */
    public function unsetActionPriceStockItem($index): void
    {
        unset($this->actionPriceStockItem[$index]);
    }

    /**
     * Gets as actionPriceStockItem.
     *
     * @return \Pohoda\ActionPrice\ActionPriceStockItemType[]
     */
    public function getActionPriceStockItem()
    {
        return $this->actionPriceStockItem;
    }

    /**
     * Sets a new actionPriceStockItem.
     *
     * @param \Pohoda\ActionPrice\ActionPriceStockItemType[] $actionPriceStockItem
     *
     * @return self
     */
    public function setActionPriceStockItem(array $actionPriceStockItem)
    {
        $this->actionPriceStockItem = $actionPriceStockItem;

        return $this;
    }
}
