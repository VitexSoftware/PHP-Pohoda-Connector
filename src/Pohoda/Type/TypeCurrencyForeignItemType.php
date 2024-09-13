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
 * Class representing TypeCurrencyForeignItemType.
 *
 * XSD Type: typeCurrencyForeignItem
 */
class TypeCurrencyForeignItemType
{
    /**
     * Jednotková cena. Pokud není uvedena, bere se jako NULOVÁ.
     */
    private float $unitPrice = null;

    /**
     * Cena ve snížené sazbě.
     */
    private float $price = null;

    /**
     * DPH.
     */
    private float $priceVAT = null;

    /**
     * Celková cena (pouze pro export).
     */
    private float $priceSum = null;

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
     * Cena ve snížené sazbě.
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
     * Cena ve snížené sazbě.
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
}
