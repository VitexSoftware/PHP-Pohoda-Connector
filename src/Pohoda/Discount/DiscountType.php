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

namespace Pohoda\Discount;

/**
 * Class representing DiscountType.
 *
 * XSD Type: discountType
 */
class DiscountType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Discount\DiscountStockItemType[]
     */
    private array $discountStockItem = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as discountStockItem.
     *
     * @return self
     */
    public function addToDiscountStockItem(\Pohoda\Discount\DiscountStockItemType $discountStockItem)
    {
        $this->discountStockItem[] = $discountStockItem;

        return $this;
    }

    /**
     * isset discountStockItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDiscountStockItem($index)
    {
        return isset($this->discountStockItem[$index]);
    }

    /**
     * unset discountStockItem.
     *
     * @param int|string $index
     */
    public function unsetDiscountStockItem($index): void
    {
        unset($this->discountStockItem[$index]);
    }

    /**
     * Gets as discountStockItem.
     *
     * @return \Pohoda\Discount\DiscountStockItemType[]
     */
    public function getDiscountStockItem()
    {
        return $this->discountStockItem;
    }

    /**
     * Sets a new discountStockItem.
     *
     * @param \Pohoda\Discount\DiscountStockItemType[] $discountStockItem
     *
     * @return self
     */
    public function setDiscountStockItem(array $discountStockItem)
    {
        $this->discountStockItem = $discountStockItem;

        return $this;
    }
}
