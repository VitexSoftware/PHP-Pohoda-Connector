<?php

namespace Pohoda\Prodejka;

/**
 * Class representing PaymentAdvancedType
 *
 *
 * XSD Type: paymentAdvancedType
 */
class PaymentAdvancedType
{
    /**
     * Hodnota stravenky.
     *
     * @var float $valueFoodVoucher
     */
    private $valueFoodVoucher = null;

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
     * Uhrazeno přes platební terminál.
     *
     * @var string $paymentTerminal
     */
    private $paymentTerminal = null;

    /**
     * Variabilní symbol.
     *
     * @var string $symVar
     */
    private $symVar = null;

    /**
     * Účet.
     *
     * @var \Pohoda\Type\AccountType $account
     */
    private $account = null;

    /**
     * Gets as valueFoodVoucher
     *
     * Hodnota stravenky.
     *
     * @return float
     */
    public function getValueFoodVoucher()
    {
        return $this->valueFoodVoucher;
    }

    /**
     * Sets a new valueFoodVoucher
     *
     * Hodnota stravenky.
     *
     * @param float $valueFoodVoucher
     * @return self
     */
    public function setValueFoodVoucher($valueFoodVoucher)
    {
        $this->valueFoodVoucher = $valueFoodVoucher;
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

    /**
     * Gets as paymentTerminal
     *
     * Uhrazeno přes platební terminál.
     *
     * @return string
     */
    public function getPaymentTerminal()
    {
        return $this->paymentTerminal;
    }

    /**
     * Sets a new paymentTerminal
     *
     * Uhrazeno přes platební terminál.
     *
     * @param string $paymentTerminal
     * @return self
     */
    public function setPaymentTerminal($paymentTerminal)
    {
        $this->paymentTerminal = $paymentTerminal;
        return $this;
    }

    /**
     * Gets as symVar
     *
     * Variabilní symbol.
     *
     * @return string
     */
    public function getSymVar()
    {
        return $this->symVar;
    }

    /**
     * Sets a new symVar
     *
     * Variabilní symbol.
     *
     * @param string $symVar
     * @return self
     */
    public function setSymVar($symVar)
    {
        $this->symVar = $symVar;
        return $this;
    }

    /**
     * Gets as account
     *
     * Účet.
     *
     * @return \Pohoda\Type\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Účet.
     *
     * @param \Pohoda\Type\AccountType $account
     * @return self
     */
    public function setAccount(?\Pohoda\Type\AccountType $account = null)
    {
        $this->account = $account;
        return $this;
    }
}

