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

namespace Pohoda;

/**
 * Class representing ForeignCurrencyType.
 *
 * XSD Type: foreignCurrencyType
 */
class ForeignCurrencyType
{
    /**
     * Cizí měna.
     */
    private ?\Pohoda\Type\RefType $currency = null;

    /**
     * Cena v cizí měně.
     */
    private ?float $price = null;

    /**
     * Gets as currency.
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency.
     *
     * Cizí měna.
     *
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as price.
     *
     * Cena v cizí měně.
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
     * Cena v cizí měně.
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
}
