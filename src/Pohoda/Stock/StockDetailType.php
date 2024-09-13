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

namespace Pohoda\Stock;

/**
 * Class representing StockDetailType.
 *
 * XSD Type: stockDetailType
 */
class StockDetailType
{
    /**
     * @var \Pohoda\Stock\StockItemType[]
     */
    private array $stockItem = [
    ];

    /**
     * Adds as stockItem.
     *
     * @return self
     */
    public function addToStockItem(\Pohoda\Stock\StockItemType $stockItem)
    {
        $this->stockItem[] = $stockItem;

        return $this;
    }

    /**
     * isset stockItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockItem($index)
    {
        return isset($this->stockItem[$index]);
    }

    /**
     * unset stockItem.
     *
     * @param int|string $index
     */
    public function unsetStockItem($index): void
    {
        unset($this->stockItem[$index]);
    }

    /**
     * Gets as stockItem.
     *
     * @return \Pohoda\Stock\StockItemType[]
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * @param \Pohoda\Stock\StockItemType[] $stockItem
     *
     * @return self
     */
    public function setStockItem(array $stockItem)
    {
        $this->stockItem = $stockItem;

        return $this;
    }
}
