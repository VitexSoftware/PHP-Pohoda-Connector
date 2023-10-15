<?php

namespace Pohoda\CashRegister;

/**
 * Class representing CurrencyCashRegisterType
 *
 *
 * XSD Type: currencyCashRegisterType
 */
class CurrencyCashRegisterType
{
    /**
     * Měna pokladny.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     *
     * @var string $rate
     */
    private $rate = null;

    /**
     * Gets as currency
     *
     * Měna pokladny.
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
     * Měna pokladny.
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
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     *
     * @param string $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
}

