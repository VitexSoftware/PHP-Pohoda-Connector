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
 * Class representing MovementDetailType.
 *
 * XSD Type: movementDetailType
 */
class MovementDetailType
{
    /**
     * ID bankovního dokladu.
     */
    private int $id = null;

    /**
     * Evidenční číslo bankovního dokladu.
     */
    private string $number = null;

    /**
     * Typ bankovního dokladu.
     */
    private string $bankType = null;

    /**
     * Datum platby.
     */
    private \DateTime $datePayment = null;

    /**
     * Celková částka.
     */
    private \Pohoda\HomeCurrencyType $homeCurrency = null;

    /**
     * Celková částka v cizí měně.
     */
    private \Pohoda\ForeignCurrencyType $foreignCurrency = null;

    /**
     * Gets as id.
     *
     * ID bankovního dokladu.
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
     * ID bankovního dokladu.
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
     * Gets as number.
     *
     * Evidenční číslo bankovního dokladu.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Evidenční číslo bankovního dokladu.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as bankType.
     *
     * Typ bankovního dokladu.
     *
     * @return string
     */
    public function getBankType()
    {
        return $this->bankType;
    }

    /**
     * Sets a new bankType.
     *
     * Typ bankovního dokladu.
     *
     * @param string $bankType
     *
     * @return self
     */
    public function setBankType($bankType)
    {
        $this->bankType = $bankType;

        return $this;
    }

    /**
     * Gets as datePayment.
     *
     * Datum platby.
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Sets a new datePayment.
     *
     * Datum platby.
     *
     * @return self
     */
    public function setDatePayment(?\DateTime $datePayment = null)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Gets as homeCurrency.
     *
     * Celková částka.
     *
     * @return \Pohoda\HomeCurrencyType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency.
     *
     * Celková částka.
     *
     * @return self
     */
    public function setHomeCurrency(\Pohoda\HomeCurrencyType $homeCurrency)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }

    /**
     * Gets as foreignCurrency.
     *
     * Celková částka v cizí měně.
     *
     * @return \Pohoda\ForeignCurrencyType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency.
     *
     * Celková částka v cizí měně.
     *
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\ForeignCurrencyType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;

        return $this;
    }
}
