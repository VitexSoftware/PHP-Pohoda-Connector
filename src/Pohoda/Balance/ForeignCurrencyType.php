<?php

namespace Pohoda\Balance;

/**
 * Class representing ForeignCurrencyType
 *
 *
 * XSD Type: foreignCurrencyType
 */
class ForeignCurrencyType
{
    /**
     * ID - odkaz na cizí měnu, IDS - kód měny.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Částka MD (cizí měna).
     *
     * @var float $amountMD
     */
    private $amountMD = null;

    /**
     * Částka D (cizí měna).
     *
     * @var float $amountD
     */
    private $amountD = null;

    /**
     * Částka zůstatku (cizí měna).
     *
     * @var mixed $amountRemain
     */
    private $amountRemain = null;

    /**
     * Kurz použitý pro výpočet částek v cízí měně.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * Množství cizí měny pro kurzový přepočet.
     *
     * @var int $amount
     */
    private $amount = null;

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
     * Gets as amountMD
     *
     * Částka MD (cizí měna).
     *
     * @return float
     */
    public function getAmountMD()
    {
        return $this->amountMD;
    }

    /**
     * Sets a new amountMD
     *
     * Částka MD (cizí měna).
     *
     * @param float $amountMD
     * @return self
     */
    public function setAmountMD($amountMD)
    {
        $this->amountMD = $amountMD;
        return $this;
    }

    /**
     * Gets as amountD
     *
     * Částka D (cizí měna).
     *
     * @return float
     */
    public function getAmountD()
    {
        return $this->amountD;
    }

    /**
     * Sets a new amountD
     *
     * Částka D (cizí měna).
     *
     * @param float $amountD
     * @return self
     */
    public function setAmountD($amountD)
    {
        $this->amountD = $amountD;
        return $this;
    }

    /**
     * Gets as amountRemain
     *
     * Částka zůstatku (cizí měna).
     *
     * @return mixed
     */
    public function getAmountRemain()
    {
        return $this->amountRemain;
    }

    /**
     * Sets a new amountRemain
     *
     * Částka zůstatku (cizí měna).
     *
     * @param mixed $amountRemain
     * @return self
     */
    public function setAmountRemain($amountRemain)
    {
        $this->amountRemain = $amountRemain;
        return $this;
    }

    /**
     * Gets as rate
     *
     * Kurz použitý pro výpočet částek v cízí měně.
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
     * Kurz použitý pro výpočet částek v cízí měně.
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
     * Množství cizí měny pro kurzový přepočet.
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
     * Množství cizí měny pro kurzový přepočet.
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
