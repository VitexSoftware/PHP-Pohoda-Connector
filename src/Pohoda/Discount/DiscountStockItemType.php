<?php

namespace Pohoda\Discount;

/**
 * Class representing DiscountStockItemType
 *
 *
 * XSD Type: discountStockItemType
 */
class DiscountStockItemType
{
    /**
     * Zásoba, jejíž slevy/vedlejší ceny se mají upravit.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @var \Pohoda\Discount\DiscountsItemType[] $discounts
     */
    private $discounts = null;

    /**
     * Gets as stockItem
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
     * Sets a new stockItem
     *
     * Zásoba, jejíž slevy/vedlejší ceny se mají upravit.
     *
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemType $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Adds as discountsItem
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @return self
     * @param \Pohoda\Discount\DiscountsItemType $discountsItem
     */
    public function addToDiscounts(\Pohoda\Discount\DiscountsItemType $discountsItem)
    {
        $this->discounts[] = $discountsItem;
        return $this;
    }

    /**
     * isset discounts
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscounts($index)
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts
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
     * Sets a new discounts
     *
     * Slevy/vedeljší ceny, které se mají upravit.
     *
     * @param \Pohoda\Discount\DiscountsItemType[] $discounts
     * @return self
     */
    public function setDiscounts(array $discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }
}
