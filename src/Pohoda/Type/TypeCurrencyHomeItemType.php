<?php

namespace Pohoda\Type;

/**
 * Class representing TypeCurrencyHomeItemType
 *
 *
 * XSD Type: typeCurrencyHomeItem
 */
class TypeCurrencyHomeItemType
{
    /**
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
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
     * DPH na položce.
     *
     * @var float $priceVAT
     */
    private $priceVAT = null;

    /**
     * Cena položky včetně DPH (pouze pro export).
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
     * DPH na položce.
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
     * DPH na položce.
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
     * Cena položky včetně DPH (pouze pro export).
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
     * Cena položky včetně DPH (pouze pro export).
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

