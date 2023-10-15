<?php

namespace Pohoda\Balance;

/**
 * Class representing HomeCurrencyType
 *
 *
 * XSD Type: homeCurrencyType
 */
class HomeCurrencyType
{
    /**
     * Částka MD.
     *
     * @var float $amountMD
     */
    private $amountMD = null;

    /**
     * Částka D.
     *
     * @var float $amountD
     */
    private $amountD = null;

    /**
     * Částka zůstatku.
     *
     * @var mixed $amountRemain
     */
    private $amountRemain = null;

    /**
     * Gets as amountMD
     *
     * Částka MD.
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
     * Částka MD.
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
     * Částka D.
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
     * Částka D.
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
     * Částka zůstatku.
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
     * Částka zůstatku.
     *
     * @param mixed $amountRemain
     * @return self
     */
    public function setAmountRemain($amountRemain)
    {
        $this->amountRemain = $amountRemain;
        return $this;
    }
}

