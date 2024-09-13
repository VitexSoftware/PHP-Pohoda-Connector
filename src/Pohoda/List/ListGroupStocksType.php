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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListGroupStocksType.
 *
 * XSD Type: listGroupStocksType
 */
class ListGroupStocksType extends ListVersionType
{
    /**
     * @var \Pohoda\GroupStocks\GroupStocksType[]
     */
    private array $groupStocks = [
    ];

    /**
     * Adds as groupStocks.
     *
     * @return self
     */
    public function addToGroupStocks(\Pohoda\GroupStocks\GroupStocksType $groupStocks)
    {
        $this->groupStocks[] = $groupStocks;

        return $this;
    }

    /**
     * isset groupStocks.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGroupStocks($index)
    {
        return isset($this->groupStocks[$index]);
    }

    /**
     * unset groupStocks.
     *
     * @param int|string $index
     */
    public function unsetGroupStocks($index): void
    {
        unset($this->groupStocks[$index]);
    }

    /**
     * Gets as groupStocks.
     *
     * @return \Pohoda\GroupStocks\GroupStocksType[]
     */
    public function getGroupStocks()
    {
        return $this->groupStocks;
    }

    /**
     * Sets a new groupStocks.
     *
     * @param \Pohoda\GroupStocks\GroupStocksType[] $groupStocks
     *
     * @return self
     */
    public function setGroupStocks(?array $groupStocks = null)
    {
        $this->groupStocks = $groupStocks;

        return $this;
    }
}
