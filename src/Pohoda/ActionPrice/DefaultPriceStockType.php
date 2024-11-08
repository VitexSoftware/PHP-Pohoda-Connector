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

namespace Pohoda\ActionPrice;

/**
 * Class representing DefaultPriceStockType.
 *
 * XSD Type: defaultPriceStockType
 */
class DefaultPriceStockType
{
    /**
     * Výchozí cena skladové zásoby.
     */
    private ?float $price = null;

    /**
     * Cena je uvedena: bez DPH, včetně DPH.
     */
    private ?string $payVAT = null;

    /**
     * Cizí měna.
     */
    private ?\Pohoda\ActionPrice\TypeAcpCurrencyForeignType $foreignCurrency = null;

    /**
     * Gets as price.
     *
     * Výchozí cena skladové zásoby.
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
     * Výchozí cena skladové zásoby.
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
     * Gets as payVAT.
     *
     * Cena je uvedena: bez DPH, včetně DPH.
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
     * Cena je uvedena: bez DPH, včetně DPH.
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
     * Gets as foreignCurrency.
     *
     * Cizí měna.
     *
     * @return \Pohoda\ActionPrice\TypeAcpCurrencyForeignType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency.
     *
     * Cizí měna.
     *
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\ActionPrice\TypeAcpCurrencyForeignType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;

        return $this;
    }
}
