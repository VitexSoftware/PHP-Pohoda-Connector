<?php

namespace Pohoda\Type;

/**
 * Class representing TypeCurrencyForeignItemType
 *
 *
 * XSD Type: typeCurrencyForeignItem
 */
class TypeCurrencyForeignItemType
{
    /**
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @var float $unitPrice
     */
    private $unitPrice = null;

    /**
     * Cena ve snížené sazbě.
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
     * Celková cena (pouze pro export).
     *
     * @var float $priceSum
     */
    private $priceSum = null;

    /**
     * Gets as unitPrice
     *
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
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
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
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
     * Cena ve snížené sazbě.
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
     * Cena ve snížené sazbě.
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

    /**
     * Gets as priceSum
     *
     * Celková cena (pouze pro export).
     *
     * @return float
     */
    public function getPriceSum()
    {
        return $this->priceSum;
    }

    /**
     * Sets a new priceSum
     *
     * Celková cena (pouze pro export).
     *
     * @param float $priceSum
     * @return self
     */
    public function setPriceSum($priceSum)
    {
        $this->priceSum = $priceSum;
        return $this;
    }
}

