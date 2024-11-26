<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Type;

/**
 * Class representing RoundingItemType.
 *
 * XSD Type: roundingItemType
 */
class RoundingItemType
{
    /**
     * ID položky dokladu (jen pro export).
     */
    private ?int $id = null;

    /**
     * Text položky - „Zaokrouhlení“.
     */
    private ?string $text = null;

    /**
     * Množství.
     */
    private ?float $quantity = null;

    /**
     * Ceny jsou uvedeny:bez DPH/včetně DPH.Fixní hodnota „false“.
     */
    private ?string $payVAT = null;

    /**
     * Sazba DPH.
     */
    private ?\Pohoda\Type\VatRateType $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     */
    private ?float $percentVAT = null;
    private ?\Pohoda\Type\TypeCurrencyHomeItemRoundingType $homeCurrency = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID položky dokladu (jen pro export).
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as text.
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
     * Sets a new text.
     *
     * Text položky - „Zaokrouhlení“.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as quantity.
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
     * Sets a new quantity.
     *
     * Množství.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as payVAT.
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
     * Sets a new payVAT.
     *
     * Ceny jsou uvedeny:bez DPH/včetně DPH.Fixní hodnota „false“.
     *
     * @param string $payVAT
     *
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;

        return $this;
    }

    /**
     * Gets as rateVAT.
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
     * Sets a new rateVAT.
     *
     * Sazba DPH.
     *
     * @return self
     */
    public function setRateVAT(\Pohoda\Type\VatRateType $rateVAT)
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Gets as percentVAT.
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
     * Sets a new percentVAT.
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @param float $percentVAT
     *
     * @return self
     */
    public function setPercentVAT($percentVAT)
    {
        $this->percentVAT = $percentVAT;

        return $this;
    }

    /**
     * Gets as homeCurrency.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemRoundingType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency.
     *
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemRoundingType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }
}
