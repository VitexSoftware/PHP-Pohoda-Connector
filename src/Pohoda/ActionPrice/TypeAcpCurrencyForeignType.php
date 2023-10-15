<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing TypeAcpCurrencyForeignType
 *
 *
 * XSD Type: typeAcpCurrencyForeign
 */
class TypeAcpCurrencyForeignType
{
    /**
     * ID - odkaz na cizí měnu, IDS - kod měny.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Kurs použitý pro výpočet částek v cízí měně.
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
     * Gets as currency
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
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
     * ID - odkaz na cizí měnu, IDS - kod měny.
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
     * Kurs použitý pro výpočet částek v cízí měně.
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
     * Kurs použitý pro výpočet částek v cízí měně.
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
}

