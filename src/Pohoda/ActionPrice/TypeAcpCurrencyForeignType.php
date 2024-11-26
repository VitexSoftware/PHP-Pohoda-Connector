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
 * Class representing TypeAcpCurrencyForeignType.
 *
 * XSD Type: typeAcpCurrencyForeign
 */
class TypeAcpCurrencyForeignType
{
    /**
     * ID - odkaz na cizí měnu, IDS - kod měny.
     */
    private ?\Pohoda\Type\RefType $currency = null;

    /**
     * Kurs použitý pro výpočet částek v cízí měně.
     */
    private ?float $rate = null;

    /**
     * Množství cizí měny pro kursový přepočet.
     */
    private ?int $amount = null;

    /**
     * Gets as currency.
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
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
     * ID - odkaz na cizí měnu, IDS - kod měny.
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
     * Kurs použitý pro výpočet částek v cízí měně.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate.
     *
     * Kurs použitý pro výpočet částek v cízí měně.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as amount.
     *
     * Množství cizí měny pro kursový přepočet.
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount.
     *
     * Množství cizí měny pro kursový přepočet.
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }
}
