<?php

namespace Pohoda\Type;

/**
 * Class representing TypeCurrencyHomeItemRoundingType
 *
 *
 * XSD Type: typeCurrencyHomeItemRounding
 */
class TypeCurrencyHomeItemRoundingType
{
    /**
     * Jednotková cena.
     *
     * @var float $unitPrice
     */
    private $unitPrice = null;

    /**
     * Cena položky bez DPH.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * DPH.
     *
     * @var float $priceVAT
     */
    private $priceVAT = null;

    /**
     * Gets as unitPrice
     *
     * Jednotková cena.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * Jednotková cena.
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as price
     *
     * Cena položky bez DPH.
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
     * Cena položky bez DPH.
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
     * Gets as priceVAT
     *
     * DPH.
     *
     * @return float
     */
    public function getPriceVAT()
    {
        return $this->priceVAT;
    }

    /**
     * Sets a new priceVAT
     *
     * DPH.
     *
     * @param float $priceVAT
     * @return self
     */
    public function setPriceVAT($priceVAT)
    {
        $this->priceVAT = $priceVAT;
        return $this;
    }
}
