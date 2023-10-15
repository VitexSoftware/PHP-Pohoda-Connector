<?php

namespace Pohoda\Type;

/**
 * Class representing TypeCurrencyForeignType
 *
 *
 * XSD Type: typeCurrencyForeign
 */
class TypeCurrencyForeignType
{
    /**
     * ID - odkaz na cizí měnu, IDS - kód měny.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Kurs použitý pro výpočet částek v cizí měně.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * Množství cizí měny pro kursový přepočet.
     *
     * @var int $amount
     */
    private $amount = null;

    /**
     * Cena v cizí měně.
     *
     * @var float $priceSum
     */
    private $priceSum = null;

    /**
     * Zaokrouhlení (Pouze pro export).
     *
     * @var \Pohoda\Type\TypeRoundType $round
     */
    private $round = null;

    /**
     * Gets as currency
     *
     * ID - odkaz na cizí měnu, IDS - kód měny.
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
     * ID - odkaz na cizí měnu, IDS - kód měny.
     *
     * @param \Pohoda\Type\RefType $currency
     * @return self
     */
    public function setCurrency(\Pohoda\Type\RefType $currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as rate
     *
     * Kurs použitý pro výpočet částek v cizí měně.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Kurs použitý pro výpočet částek v cizí měně.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Množství cizí měny pro kursový přepočet.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Množství cizí měny pro kursový přepočet.
     *
     * @param int $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as priceSum
     *
     * Cena v cizí měně.
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
     * Cena v cizí měně.
     *
     * @param float $priceSum
     * @return self
     */
    public function setPriceSum($priceSum)
    {
        $this->priceSum = $priceSum;
        return $this;
    }

    /**
     * Gets as round
     *
     * Zaokrouhlení (Pouze pro export).
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
     * Zaokrouhlení (Pouze pro export).
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
