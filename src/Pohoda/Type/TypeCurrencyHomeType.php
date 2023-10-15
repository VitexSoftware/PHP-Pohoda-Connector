<?php

namespace Pohoda\Type;

/**
 * Class representing TypeCurrencyHomeType
 *
 *
 * XSD Type: typeCurrencyHome
 */
class TypeCurrencyHomeType
{
    /**
     * Cena v nulové sazbě DPH.
     *
     * @var float $priceNone
     */
    private $priceNone = null;

    /**
     * Cena bez DPH ve snížené sazbě.
     *
     * @var float $priceLow
     */
    private $priceLow = null;

    /**
     * DPH ve snížené sazbě.
     *
     * @var \Pohoda\Type\CurrencyVATType $priceLowVAT
     */
    private $priceLowVAT = null;

    /**
     * Cena včetně DPH ve snížené sazbě.
     *
     * @var float $priceLowSum
     */
    private $priceLowSum = null;

    /**
     * Cena bez DPH ve zvýšené sazbě.
     *
     * @var float $priceHigh
     */
    private $priceHigh = null;

    /**
     * DPH ve zvýšené sazbě.
     *
     * @var \Pohoda\Type\CurrencyVATType $priceHighVAT
     */
    private $priceHighVAT = null;

    /**
     * Cena včetně DPH ve zvýšené sazbě.
     *
     * @var float $priceHighSum
     */
    private $priceHighSum = null;

    /**
     * Cena bez DPH v 3. sazbě.
     *
     * @var float $price3
     */
    private $price3 = null;

    /**
     * DPH v 3. sazbě.
     *
     * @var \Pohoda\Type\CurrencyVATType $price3VAT
     */
    private $price3VAT = null;

    /**
     * Cena včetně DPH v 3. sazbě.
     *
     * @var float $price3Sum
     */
    private $price3Sum = null;

    /**
     * Zaokrouhlení.
     *
     * @var \Pohoda\Type\TypeRoundType $round
     */
    private $round = null;

    /**
     * Gets as priceNone
     *
     * Cena v nulové sazbě DPH.
     *
     * @return float
     */
    public function getPriceNone()
    {
        return $this->priceNone;
    }

    /**
     * Sets a new priceNone
     *
     * Cena v nulové sazbě DPH.
     *
     * @param float $priceNone
     * @return self
     */
    public function setPriceNone($priceNone)
    {
        $this->priceNone = $priceNone;
        return $this;
    }

    /**
     * Gets as priceLow
     *
     * Cena bez DPH ve snížené sazbě.
     *
     * @return float
     */
    public function getPriceLow()
    {
        return $this->priceLow;
    }

    /**
     * Sets a new priceLow
     *
     * Cena bez DPH ve snížené sazbě.
     *
     * @param float $priceLow
     * @return self
     */
    public function setPriceLow($priceLow)
    {
        $this->priceLow = $priceLow;
        return $this;
    }

    /**
     * Gets as priceLowVAT
     *
     * DPH ve snížené sazbě.
     *
     * @return \Pohoda\Type\CurrencyVATType
     */
    public function getPriceLowVAT()
    {
        return $this->priceLowVAT;
    }

    /**
     * Sets a new priceLowVAT
     *
     * DPH ve snížené sazbě.
     *
     * @param \Pohoda\Type\CurrencyVATType $priceLowVAT
     * @return self
     */
    public function setPriceLowVAT(?\Pohoda\Type\CurrencyVATType $priceLowVAT = null)
    {
        $this->priceLowVAT = $priceLowVAT;
        return $this;
    }

    /**
     * Gets as priceLowSum
     *
     * Cena včetně DPH ve snížené sazbě.
     *
     * @return float
     */
    public function getPriceLowSum()
    {
        return $this->priceLowSum;
    }

    /**
     * Sets a new priceLowSum
     *
     * Cena včetně DPH ve snížené sazbě.
     *
     * @param float $priceLowSum
     * @return self
     */
    public function setPriceLowSum($priceLowSum)
    {
        $this->priceLowSum = $priceLowSum;
        return $this;
    }

    /**
     * Gets as priceHigh
     *
     * Cena bez DPH ve zvýšené sazbě.
     *
     * @return float
     */
    public function getPriceHigh()
    {
        return $this->priceHigh;
    }

    /**
     * Sets a new priceHigh
     *
     * Cena bez DPH ve zvýšené sazbě.
     *
     * @param float $priceHigh
     * @return self
     */
    public function setPriceHigh($priceHigh)
    {
        $this->priceHigh = $priceHigh;
        return $this;
    }

    /**
     * Gets as priceHighVAT
     *
     * DPH ve zvýšené sazbě.
     *
     * @return \Pohoda\Type\CurrencyVATType
     */
    public function getPriceHighVAT()
    {
        return $this->priceHighVAT;
    }

    /**
     * Sets a new priceHighVAT
     *
     * DPH ve zvýšené sazbě.
     *
     * @param \Pohoda\Type\CurrencyVATType $priceHighVAT
     * @return self
     */
    public function setPriceHighVAT(?\Pohoda\Type\CurrencyVATType $priceHighVAT = null)
    {
        $this->priceHighVAT = $priceHighVAT;
        return $this;
    }

    /**
     * Gets as priceHighSum
     *
     * Cena včetně DPH ve zvýšené sazbě.
     *
     * @return float
     */
    public function getPriceHighSum()
    {
        return $this->priceHighSum;
    }

    /**
     * Sets a new priceHighSum
     *
     * Cena včetně DPH ve zvýšené sazbě.
     *
     * @param float $priceHighSum
     * @return self
     */
    public function setPriceHighSum($priceHighSum)
    {
        $this->priceHighSum = $priceHighSum;
        return $this;
    }

    /**
     * Gets as price3
     *
     * Cena bez DPH v 3. sazbě.
     *
     * @return float
     */
    public function getPrice3()
    {
        return $this->price3;
    }

    /**
     * Sets a new price3
     *
     * Cena bez DPH v 3. sazbě.
     *
     * @param float $price3
     * @return self
     */
    public function setPrice3($price3)
    {
        $this->price3 = $price3;
        return $this;
    }

    /**
     * Gets as price3VAT
     *
     * DPH v 3. sazbě.
     *
     * @return \Pohoda\Type\CurrencyVATType
     */
    public function getPrice3VAT()
    {
        return $this->price3VAT;
    }

    /**
     * Sets a new price3VAT
     *
     * DPH v 3. sazbě.
     *
     * @param \Pohoda\Type\CurrencyVATType $price3VAT
     * @return self
     */
    public function setPrice3VAT(?\Pohoda\Type\CurrencyVATType $price3VAT = null)
    {
        $this->price3VAT = $price3VAT;
        return $this;
    }

    /**
     * Gets as price3Sum
     *
     * Cena včetně DPH v 3. sazbě.
     *
     * @return float
     */
    public function getPrice3Sum()
    {
        return $this->price3Sum;
    }

    /**
     * Sets a new price3Sum
     *
     * Cena včetně DPH v 3. sazbě.
     *
     * @param float $price3Sum
     * @return self
     */
    public function setPrice3Sum($price3Sum)
    {
        $this->price3Sum = $price3Sum;
        return $this;
    }

    /**
     * Gets as round
     *
     * Zaokrouhlení.
     *
     * @return \Pohoda\Type\TypeRoundType
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * Sets a new round
     *
     * Zaokrouhlení.
     *
     * @param \Pohoda\Type\TypeRoundType $round
     * @return self
     */
    public function setRound(?\Pohoda\Type\TypeRoundType $round = null)
    {
        $this->round = $round;
        return $this;
    }
}

