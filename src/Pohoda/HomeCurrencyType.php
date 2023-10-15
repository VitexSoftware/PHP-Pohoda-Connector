<?php

namespace Pohoda;

/**
 * Class representing HomeCurrencyType
 *
 *
 * XSD Type: homeCurrencyType
 */
class HomeCurrencyType
{
    /**
     * Cena v cizí měně.
     *
     * @var float $price
     */
    private $price = null;

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

