<?php

namespace Pohoda\Type;

/**
 * Class representing TypeRoundType
 *
 *
 * XSD Type: typeRound
 */
class TypeRoundType
{
    /**
     * Celková suma zaokrouhlení.
     *
     * @var float $priceRound
     */
    private $priceRound = null;

    /**
     * @var float $rateVATround
     */
    private $rateVATround = null;

    /**
     * @var float $priceRoundSum
     */
    private $priceRoundSum = null;

    /**
     * @var float $priceRoundSumVAT
     */
    private $priceRoundSumVAT = null;

    /**
     * Gets as priceRound
     *
     * Celková suma zaokrouhlení.
     *
     * @return float
     */
    public function getPriceRound()
    {
        return $this->priceRound;
    }

    /**
     * Sets a new priceRound
     *
     * Celková suma zaokrouhlení.
     *
     * @param float $priceRound
     * @return self
     */
    public function setPriceRound($priceRound)
    {
        $this->priceRound = $priceRound;
        return $this;
    }

    /**
     * Gets as rateVATround
     *
     * @return float
     */
    public function getRateVATround()
    {
        return $this->rateVATround;
    }

    /**
     * Sets a new rateVATround
     *
     * @param float $rateVATround
     * @return self
     */
    public function setRateVATround($rateVATround)
    {
        $this->rateVATround = $rateVATround;
        return $this;
    }

    /**
     * Gets as priceRoundSum
     *
     * @return float
     */
    public function getPriceRoundSum()
    {
        return $this->priceRoundSum;
    }

    /**
     * Sets a new priceRoundSum
     *
     * @param float $priceRoundSum
     * @return self
     */
    public function setPriceRoundSum($priceRoundSum)
    {
        $this->priceRoundSum = $priceRoundSum;
        return $this;
    }

    /**
     * Gets as priceRoundSumVAT
     *
     * @return float
     */
    public function getPriceRoundSumVAT()
    {
        return $this->priceRoundSumVAT;
    }

    /**
     * Sets a new priceRoundSumVAT
     *
     * @param float $priceRoundSumVAT
     * @return self
     */
    public function setPriceRoundSumVAT($priceRoundSumVAT)
    {
        $this->priceRoundSumVAT = $priceRoundSumVAT;
        return $this;
    }
}

