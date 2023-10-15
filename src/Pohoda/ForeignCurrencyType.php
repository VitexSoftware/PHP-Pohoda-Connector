<?php

namespace Pohoda;

/**
 * Class representing ForeignCurrencyType
 *
 *
 * XSD Type: foreignCurrencyType
 */
class ForeignCurrencyType
{
    /**
     * Cizí měna.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Cena v cizí měně.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * Gets as currency
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Cizí měna.
     *
     * @param \Pohoda\Type\RefType $currency
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as price
     *
     * Cena v cizí měně.
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
     * Cena v cizí měně.
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
