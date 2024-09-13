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
 * Class representing DiscountStockItemType.
 *
 * XSD Type: discountStockItemType
 */
class DiscountStockItemType
{
    /**
     * Zásoba, jejíž slevy/vedlejší ceny se mají upravit.
     */
    private \Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @var \Pohoda\Discount\DiscountsItemType[]
     */
    private array $discounts = null;

    /**
     * Gets as stockItem.
     *
     * Zásoba, jejíž slevy/vedlejší ceny se mají upravit.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Zásoba, jejíž slevy/vedlejší ceny se mají upravit.
     *
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemType $stockItem)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Adds as discountsItem.
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @return self
     */
    public function addToDiscounts(\Pohoda\Discount\DiscountsItemType $discountsItem)
    {
        $this->discounts[] = $discountsItem;

        return $this;
    }

    /**
     * isset discounts.
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts.
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param int|string $index
     */
    public function unsetDiscounts($index): void
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts.
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @return \Pohoda\Discount\DiscountsItemType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts.
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param \Pohoda\Discount\DiscountsItemType[] $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts)
    {
        $this->discounts = $discounts;

        return $this;
    }
}
