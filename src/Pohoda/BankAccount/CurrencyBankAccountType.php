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

namespace Pohoda\BankAccount;

/**
 * Class representing CurrencyBankAccountType.
 *
 * XSD Type: currencyBankAccountType
 */
class CurrencyBankAccountType
{
    /**
     * Měna bankovního účtu..
     */
    private \Pohoda\Type\RefType $currency = null;

    /**
     * Kurs použitý pro devizový účet (denní/pevný).
     */
    private string $rate = null;

    /**
     * Gets as currency.
     *
     * Měna bankovního účtu..
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
     * Měna bankovního účtu..
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
     * Kurs použitý pro devizový účet (denní/pevný).
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
     * Kurs použitý pro devizový účet (denní/pevný).
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
