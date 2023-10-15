<?php

namespace Pohoda\Stock;

/**
 * Class representing InstrastatType
 *
 *
 * XSD Type: instrastatType
 */
class InstrastatType
{
    /**
     * Kód zboží.
     *
     * @var string $goodsCode
     */
    private $goodsCode = null;

    /**
     * Popis zboží (pouze SK verze).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Statistický znak (pouze CZ verze).
     *
     * @var string $statistic
     */
    private $statistic = null;

    /**
     * Kód doplňkové měrné jednotky.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Koeficient pro přepočet měrné jednotky.
     *
     * @var float $coefficient
     */
    private $coefficient = null;

    /**
     * Stát původu.
     *
     * @var string $country
     */
    private $country = null;

    /**
     * Gets as goodsCode
     *
     * Kód zboží.
     *
     * @return string
     */
    public function getGoodsCode()
    {
        return $this->goodsCode;
    }

    /**
     * Sets a new goodsCode
     *
     * Kód zboží.
     *
     * @param string $goodsCode
     * @return self
     */
    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode = $goodsCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis zboží (pouze SK verze).
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Popis zboží (pouze SK verze).
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as statistic
     *
     * Statistický znak (pouze CZ verze).
     *
     * @return string
     */
    public function getStatistic()
    {
        return $this->statistic;
    }

    /**
     * Sets a new statistic
     *
     * Statistický znak (pouze CZ verze).
     *
     * @param string $statistic
     * @return self
     */
    public function setStatistic($statistic)
    {
        $this->statistic = $statistic;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Kód doplňkové měrné jednotky.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Kód doplňkové měrné jednotky.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as coefficient
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Sets a new coefficient
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @param float $coefficient
     * @return self
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Gets as country
     *
     * Stát původu.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Stát původu.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}
