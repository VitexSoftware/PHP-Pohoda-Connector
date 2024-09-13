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
 * Class representing StockPriceItemType.
 *
 * XSD Type: stockPriceItemType
 */
class StockPriceItemType
{
    /**
     * @var \Pohoda\Type\StockPriceType[]
     */
    private array $stockPrice = [
    ];

    /**
     * Adds as stockPrice.
     *
     * @return self
     */
    public function addToStockPrice(\Pohoda\Type\StockPriceType $stockPrice)
    {
        $this->stockPrice[] = $stockPrice;

        return $this;
    }

    /**
     * isset stockPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockPrice($index)
    {
        return isset($this->stockPrice[$index]);
    }

    /**
     * unset stockPrice.
     *
     * @param int|string $index
     */
    public function unsetStockPrice($index): void
    {
        unset($this->stockPrice[$index]);
    }

    /**
     * Gets as stockPrice.
     *
     * @return \Pohoda\Type\StockPriceType[]
     */
    public function getStockPrice()
    {
        return $this->stockPrice;
    }

    /**
     * Sets a new stockPrice.
     *
     * @param \Pohoda\Type\StockPriceType[] $stockPrice
     *
     * @return self
     */
    public function setStockPrice(array $stockPrice)
    {
        $this->stockPrice = $stockPrice;

        return $this;
    }
}
