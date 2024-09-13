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
 * Class representing RelatedStocksType.
 *
 * Seznam ID souvisejících zásob.
 * XSD Type: relatedStocksType
 */
class RelatedStocksType
{
    /**
     * @var \Pohoda\Type\OrderStockItemType[]
     */
    private array $idStocks = [
    ];

    /**
     * Adds as idStocks.
     *
     * @return self
     */
    public function addToIdStocks(\Pohoda\Type\OrderStockItemType $idStocks)
    {
        $this->idStocks[] = $idStocks;

        return $this;
    }

    /**
     * isset idStocks.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIdStocks($index)
    {
        return isset($this->idStocks[$index]);
    }

    /**
     * unset idStocks.
     *
     * @param int|string $index
     */
    public function unsetIdStocks($index): void
    {
        unset($this->idStocks[$index]);
    }

    /**
     * Gets as idStocks.
     *
     * @return \Pohoda\Type\OrderStockItemType[]
     */
    public function getIdStocks()
    {
        return $this->idStocks;
    }

    /**
     * Sets a new idStocks.
     *
     * @param \Pohoda\Type\OrderStockItemType[] $idStocks
     *
     * @return self
     */
    public function setIdStocks(?array $idStocks = null)
    {
        $this->idStocks = $idStocks;

        return $this;
    }
}
