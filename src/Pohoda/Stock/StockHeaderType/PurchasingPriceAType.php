<?php

namespace Pohoda\Stock\StockHeaderType;

/**
 * Class representing PurchasingPriceAType
 */
class PurchasingPriceAType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     *
     * @var bool $payVAT
     */
    private $payVAT = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as payVAT
     *
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     *
     * @return bool
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT
     *
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     *
     * @param bool $payVAT
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;
        return $this;
    }
}

