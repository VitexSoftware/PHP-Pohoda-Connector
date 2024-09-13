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
 * Class representing StockSerialNumberType.
 *
 * XSD Type: stockSerialNumberType
 */
class StockSerialNumberType
{
    /**
     * @var \Pohoda\Stock\SerialNumberItemType[]
     */
    private array $serialNumberItem = [
    ];

    /**
     * Adds as serialNumberItem.
     *
     * @return self
     */
    public function addToSerialNumberItem(\Pohoda\Stock\SerialNumberItemType $serialNumberItem)
    {
        $this->serialNumberItem[] = $serialNumberItem;

        return $this;
    }

    /**
     * isset serialNumberItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSerialNumberItem($index)
    {
        return isset($this->serialNumberItem[$index]);
    }

    /**
     * unset serialNumberItem.
     *
     * @param int|string $index
     */
    public function unsetSerialNumberItem($index): void
    {
        unset($this->serialNumberItem[$index]);
    }

    /**
     * Gets as serialNumberItem.
     *
     * @return \Pohoda\Stock\SerialNumberItemType[]
     */
    public function getSerialNumberItem()
    {
        return $this->serialNumberItem;
    }

    /**
     * Sets a new serialNumberItem.
     *
     * @param \Pohoda\Stock\SerialNumberItemType[] $serialNumberItem
     *
     * @return self
     */
    public function setSerialNumberItem(array $serialNumberItem)
    {
        $this->serialNumberItem = $serialNumberItem;

        return $this;
    }
}
