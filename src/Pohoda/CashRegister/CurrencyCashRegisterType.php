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

namespace Pohoda\CashRegister;

/**
 * Class representing CurrencyCashRegisterType.
 *
 * XSD Type: currencyCashRegisterType
 */
class CurrencyCashRegisterType
{
    /**
     * Měna pokladny.
     */
    private ?\Pohoda\Type\RefType $currency = null;

    /**
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     */
    private ?string $rate = null;

    /**
     * Gets as currency.
     *
     * Měna pokladny.
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
     * Měna pokladny.
     *
     * @return self
     */
    public function setCurrency(\Pohoda\Type\RefType $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as rate.
     *
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate.
     *
     * Kurs použitý pro valutovou pokladnu (denní/pevný).
     *
     * @param string $rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }
}
