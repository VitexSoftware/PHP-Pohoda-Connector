<?php

namespace Pohoda\BankAccount;

/**
 * Class representing CurrencyBankAccountType
 *
 *
 * XSD Type: currencyBankAccountType
 */
class CurrencyBankAccountType
{
    /**
     * Měna bankovního účtu..
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Kurs použitý pro devizový účet (denní/pevný).
     *
     * @var string $rate
     */
    private $rate = null;

    /**
     * Gets as currency
     *
     * Měna bankovního účtu..
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
     * Měna bankovního účtu..
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
     * Kurs použitý pro devizový účet (denní/pevný).
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
     * Kurs použitý pro devizový účet (denní/pevný).
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
