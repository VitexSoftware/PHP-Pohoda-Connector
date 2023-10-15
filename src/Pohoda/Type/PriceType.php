<?php

namespace Pohoda\Type;

/**
 * Class representing PriceType
 *
 * Rozepsání ceny a DPH
 * XSD Type: priceType
 */
class PriceType
{
    /**
     * Částka v příslušné sazbě.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * Částka DPH.
     *
     * @var float $priceVAT
     */
    private $priceVAT = null;

    /**
     * Gets as price
     *
     * Částka v příslušné sazbě.
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
     * Částka v příslušné sazbě.
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
     * Částka DPH.
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
     * Částka DPH.
     *
     * @param float $priceVAT
     * @return self
     */
    public function setPriceVAT($priceVAT)
    {
        $this->priceVAT = $priceVAT;
        return $this;
    }
}
