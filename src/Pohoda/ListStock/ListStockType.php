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

namespace Pohoda\ListStock;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListStockType.
 *
 * XSD Type: listStockType
 */
class ListStockType extends ListVersionType
{
    /**
     * @var \Pohoda\Stock\StockType[]
     */
    private array $stock = [
    ];

    /**
     * Adds as stock.
     *
     * @return self
     */
    public function addToStock(\Pohoda\Stock\StockType $stock)
    {
        $this->stock[] = $stock;

        return $this;
    }

    /**
     * isset stock.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStock($index)
    {
        return isset($this->stock[$index]);
    }

    /**
     * unset stock.
     *
     * @param int|string $index
     */
    public function unsetStock($index): void
    {
        unset($this->stock[$index]);
    }

    /**
     * Gets as stock.
     *
     * @return \Pohoda\Stock\StockType[]
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets a new stock.
     *
     * @param \Pohoda\Stock\StockType[] $stock
     *
     * @return self
     */
    public function setStock(?array $stock = null)
    {
        $this->stock = $stock;

        return $this;
    }
}
