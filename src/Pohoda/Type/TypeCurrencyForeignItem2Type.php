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
 * Class representing TypeCurrencyForeignItem2Type.
 *
 * XSD Type: typeCurrencyForeignItem2
 */
class TypeCurrencyForeignItem2Type
{
    /**
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
     */
    private ?float $unitPrice = null;

    /**
     * Cena položky bez DPH.
     */
    private ?float $price = null;

    /**
     * DPH.
     */
    private ?float $priceVAT = null;

    /**
     * Celková cena (pouze pro export).
     */
    private ?float $priceSum = null;

    /**
     * Kurz cizí měny použitý pro výpočet kurzového rozdílu. Není-li uvedeno, použije se kurz konečné faktury.
     */
    private ?float $rateExcRateDiff = null;

    /**
     * Množství cizí měny pro vypočtení kursového rozdílu. Není-li uvedeno, použije se množství cizí měny konečné faktury.
     */
    private ?int $amountExcRateDiff = null;

    /**
     * Gets as unitPrice.
     *
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice.
     *
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Gets as price.
     *
     * Cena položky bez DPH.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price.
     *
     * Cena položky bez DPH.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as priceVAT.
     *
     * DPH.
     *
     * @return float
     */
    public function getPriceVAT()
    {
        return $this->priceVAT;
    }

    /**
     * Sets a new priceVAT.
     *
     * DPH.
     *
     * @param float $priceVAT
     *
     * @return self
     */
    public function setPriceVAT($priceVAT)
    {
        $this->priceVAT = $priceVAT;

        return $this;
    }

    /**
     * Gets as priceSum.
     *
     * Celková cena (pouze pro export).
     *
     * @return float
     */
    public function getPriceSum()
    {
        return $this->priceSum;
    }

    /**
     * Sets a new priceSum.
     *
     * Celková cena (pouze pro export).
     *
     * @param float $priceSum
     *
     * @return self
     */
    public function setPriceSum($priceSum)
    {
        $this->priceSum = $priceSum;

        return $this;
    }

    /**
     * Gets as rateExcRateDiff.
     *
     * Kurz cizí měny použitý pro výpočet kurzového rozdílu. Není-li uvedeno, použije se kurz konečné faktury.
     *
     * @return float
     */
    public function getRateExcRateDiff()
    {
        return $this->rateExcRateDiff;
    }

    /**
     * Sets a new rateExcRateDiff.
     *
     * Kurz cizí měny použitý pro výpočet kurzového rozdílu. Není-li uvedeno, použije se kurz konečné faktury.
     *
     * @param float $rateExcRateDiff
     *
     * @return self
     */
    public function setRateExcRateDiff($rateExcRateDiff)
    {
        $this->rateExcRateDiff = $rateExcRateDiff;

        return $this;
    }

    /**
     * Gets as amountExcRateDiff.
     *
     * Množství cizí měny pro vypočtení kursového rozdílu. Není-li uvedeno, použije se množství cizí měny konečné faktury.
     *
     * @return int
     */
    public function getAmountExcRateDiff()
    {
        return $this->amountExcRateDiff;
    }

    /**
     * Sets a new amountExcRateDiff.
     *
     * Množství cizí měny pro vypočtení kursového rozdílu. Není-li uvedeno, použije se množství cizí měny konečné faktury.
     *
     * @param int $amountExcRateDiff
     *
     * @return self
     */
    public function setAmountExcRateDiff($amountExcRateDiff)
    {
        $this->amountExcRateDiff = $amountExcRateDiff;

        return $this;
    }
}
