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

namespace Pohoda\IndividualPrice;

/**
 * Class representing StocksType.
 *
 * XSD Type: stocksType
 */
class StocksType
{
    /**
     * Individuální cena zásoby.
     *
     * @var \Pohoda\IndividualPrice\StockItemType[]
     */
    private array $stockItem = [
    ];

    /**
     * Adds as stockItem.
     *
     * Individuální cena zásoby
     *
     * @return self
     */
    public function addToStockItem(\Pohoda\IndividualPrice\StockItemType $stockItem)
    {
        $this->stockItem[] = $stockItem;

        return $this;
    }

    /**
     * isset stockItem.
     *
     * Individuální cena zásoby
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
     * Individuální cena zásoby
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
     * Individuální cena zásoby
     *
     * @return \Pohoda\IndividualPrice\StockItemType[]
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Individuální cena zásoby
     *
     * @param \Pohoda\IndividualPrice\StockItemType[] $stockItem
     *
     * @return self
     */
    public function setStockItem(?array $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }
}
