<?php

namespace Pohoda\Type;

/**
 * Class representing RoundingItemType
 *
 *
 * XSD Type: roundingItemType
 */
class RoundingItemType
{
    /**
     * ID položky dokladu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Text položky - „Zaokrouhlení“.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Ceny jsou uvedeny:bez DPH/včetně DPH.Fixní hodnota „false“.
     *
     * @var string $payVAT
     */
    private $payVAT = null;

    /**
     * Sazba DPH.
     *
     * @var \Pohoda\Type\VatRateType $rateVAT
     */
    private $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @var float $percentVAT
     */
    private $percentVAT = null;

    /**
     * @var \Pohoda\Type\TypeCurrencyHomeItemRoundingType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Gets as id
     *
     * ID položky dokladu (jen pro export).
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID položky dokladu (jen pro export).
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text položky - „Zaokrouhlení“.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text položky - „Zaokrouhlení“.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Množství.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Množství.
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as payVAT
     *
     * Ceny jsou uvedeny:bez DPH/včetně DPH.Fixní hodnota „false“.
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT
     *
     * Ceny jsou uvedeny:bez DPH/včetně DPH.Fixní hodnota „false“.
     *
     * @param string $payVAT
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;
        return $this;
    }

    /**
     * Gets as rateVAT
     *
     * Sazba DPH.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getRateVAT()
    {
        return $this->rateVAT;
    }

    /**
     * Sets a new rateVAT
     *
     * Sazba DPH.
     *
     * @param \Pohoda\Type\VatRateType $rateVAT
     * @return self
     */
    public function setRateVAT(\Pohoda\Type\VatRateType $rateVAT)
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }

    /**
     * Gets as percentVAT
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @return float
     */
    public function getPercentVAT()
    {
        return $this->percentVAT;
    }

    /**
     * Sets a new percentVAT
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @param float $percentVAT
     * @return self
     */
    public function setPercentVAT($percentVAT)
    {
        $this->percentVAT = $percentVAT;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemRoundingType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * @param \Pohoda\Type\TypeCurrencyHomeItemRoundingType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemRoundingType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }
}

