<?php

namespace Pohoda;

/**
 * Class representing MovementDetailType
 *
 *
 * XSD Type: movementDetailType
 */
class MovementDetailType
{
    /**
     * ID bankovního dokladu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Evidenční číslo bankovního dokladu.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Typ bankovního dokladu.
     *
     * @var string $bankType
     */
    private $bankType = null;

    /**
     * Datum platby.
     *
     * @var \DateTime $datePayment
     */
    private $datePayment = null;

    /**
     * Celková částka.
     *
     * @var \Pohoda\HomeCurrencyType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Celková částka v cizí měně.
     *
     * @var \Pohoda\ForeignCurrencyType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * ID bankovního dokladu.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as number
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
     * Sets a new number
     *
     * Evidenční číslo bankovního dokladu.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as bankType
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
     * Sets a new bankType
     *
     * Typ bankovního dokladu.
     *
     * @param string $bankType
     * @return self
     */
    public function setBankType($bankType)
    {
        $this->bankType = $bankType;
        return $this;
    }

    /**
     * Gets as datePayment
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
     * Sets a new datePayment
     *
     * Datum platby.
     *
     * @param \DateTime $datePayment
     * @return self
     */
    public function setDatePayment(?\DateTime $datePayment = null)
    {
        $this->datePayment = $datePayment;
        return $this;
    }

    /**
     * Gets as homeCurrency
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
     * Sets a new homeCurrency
     *
     * Celková částka.
     *
     * @param \Pohoda\HomeCurrencyType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(\Pohoda\HomeCurrencyType $homeCurrency)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
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
     * Sets a new foreignCurrency
     *
     * Celková částka v cizí měně.
     *
     * @param \Pohoda\ForeignCurrencyType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\ForeignCurrencyType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }
}
