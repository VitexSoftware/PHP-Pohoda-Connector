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

namespace Pohoda\Payment;

/**
 * Class representing ForeignCurrencyType.
 *
 * XSD Type: foreignCurrencyType
 */
class ForeignCurrencyType
{
    /**
     * ID - odkaz na cizí měnu, IDS - kod měny.
     */
    private \Pohoda\Type\RefType $currency = null;

    /**
     * Kurz pro přepočet cizí měny na české koruny.
     */
    private float $rate = null;

    /**
     * Množství cizí měny pro kursový přepočet.
     */
    private int $amount = null;

    /**
     * Nastavit kurz automaticky. Kurz je automaticky načten při prvním otevření účetní jednotky toho dne z agendy Kurzový lístek.
     */
    private string $rateAutomaticaly = null;

    /**
     * Použít včerejší kurz. Při načtení kurzu použit vždy kurz zveřejněný ČNB předchozí den. Jen CZ verze.
     */
    private string $useYesterdayRate = null;

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
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as rate.
     *
     * Kurz pro přepočet cizí měny na české koruny.
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
     * Kurz pro přepočet cizí měny na české koruny.
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

    /**
     * Gets as rateAutomaticaly.
     *
     * Nastavit kurz automaticky. Kurz je automaticky načten při prvním otevření účetní jednotky toho dne z agendy Kurzový lístek.
     *
     * @return string
     */
    public function getRateAutomaticaly()
    {
        return $this->rateAutomaticaly;
    }

    /**
     * Sets a new rateAutomaticaly.
     *
     * Nastavit kurz automaticky. Kurz je automaticky načten při prvním otevření účetní jednotky toho dne z agendy Kurzový lístek.
     *
     * @param string $rateAutomaticaly
     *
     * @return self
     */
    public function setRateAutomaticaly($rateAutomaticaly)
    {
        $this->rateAutomaticaly = $rateAutomaticaly;

        return $this;
    }

    /**
     * Gets as useYesterdayRate.
     *
     * Použít včerejší kurz. Při načtení kurzu použit vždy kurz zveřejněný ČNB předchozí den. Jen CZ verze.
     *
     * @return string
     */
    public function getUseYesterdayRate()
    {
        return $this->useYesterdayRate;
    }

    /**
     * Sets a new useYesterdayRate.
     *
     * Použít včerejší kurz. Při načtení kurzu použit vždy kurz zveřejněný ČNB předchozí den. Jen CZ verze.
     *
     * @param string $useYesterdayRate
     *
     * @return self
     */
    public function setUseYesterdayRate($useYesterdayRate)
    {
        $this->useYesterdayRate = $useYesterdayRate;

        return $this;
    }
}
