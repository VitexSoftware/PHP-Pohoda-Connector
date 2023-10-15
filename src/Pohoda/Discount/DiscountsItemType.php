<?php

namespace Pohoda\Discount;

/**
 * Class representing DiscountsItemType
 *
 *
 * XSD Type: discountsItemType
 */
class DiscountsItemType
{
    /**
     * Sleva/vedeljší cena, která se bude upravovat.
     *
     * @var \Pohoda\Discount\PriceLevelFilterType $filter
     */
    private $filter = null;

    /**
     * Úprava a zafixování ceny.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * Úprava a zafixování marže.
     *
     * @var float $markup
     */
    private $markup = null;

    /**
     * Úprava a zafixování rabatu.
     *
     * @var float $rebate
     */
    private $rebate = null;

    /**
     * Úprava a zafixování slevy.
     *
     * @var float $discountPercent
     */
    private $discountPercent = null;

    /**
     * Gets as filter
     *
     * Sleva/vedeljší cena, která se bude upravovat.
     *
     * @return \Pohoda\Discount\PriceLevelFilterType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Sleva/vedeljší cena, která se bude upravovat.
     *
     * @param \Pohoda\Discount\PriceLevelFilterType $filter
     * @return self
     */
    public function setFilter(\Pohoda\Discount\PriceLevelFilterType $filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Gets as price
     *
     * Úprava a zafixování ceny.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Úprava a zafixování ceny.
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as markup
     *
     * Úprava a zafixování marže.
     *
     * @return float
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Sets a new markup
     *
     * Úprava a zafixování marže.
     *
     * @param float $markup
     * @return self
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
        return $this;
    }

    /**
     * Gets as rebate
     *
     * Úprava a zafixování rabatu.
     *
     * @return float
     */
    public function getRebate()
    {
        return $this->rebate;
    }

    /**
     * Sets a new rebate
     *
     * Úprava a zafixování rabatu.
     *
     * @param float $rebate
     * @return self
     */
    public function setRebate($rebate)
    {
        $this->rebate = $rebate;
        return $this;
    }

    /**
     * Gets as discountPercent
     *
     * Úprava a zafixování slevy.
     *
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * Sets a new discountPercent
     *
     * Úprava a zafixování slevy.
     *
     * @param float $discountPercent
     * @return self
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }
}
