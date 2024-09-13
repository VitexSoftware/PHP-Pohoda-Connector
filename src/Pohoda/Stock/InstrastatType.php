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

namespace Pohoda\Stock;

/**
 * Class representing InstrastatType.
 *
 * XSD Type: instrastatType
 */
class InstrastatType
{
    /**
     * Kód zboží.
     */
    private string $goodsCode = null;

    /**
     * Popis zboží (pouze SK verze).
     */
    private string $description = null;

    /**
     * Statistický znak (pouze CZ verze).
     */
    private string $statistic = null;

    /**
     * Kód doplňkové měrné jednotky.
     */
    private string $unit = null;

    /**
     * Koeficient pro přepočet měrné jednotky.
     */
    private float $coefficient = null;

    /**
     * Stát původu.
     */
    private string $country = null;

    /**
     * Gets as goodsCode.
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
     * Sets a new goodsCode.
     *
     * Kód zboží.
     *
     * @param string $goodsCode
     *
     * @return self
     */
    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode = $goodsCode;

        return $this;
    }

    /**
     * Gets as description.
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
     * Sets a new description.
     *
     * Popis zboží (pouze SK verze).
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as statistic.
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
     * Sets a new statistic.
     *
     * Statistický znak (pouze CZ verze).
     *
     * @param string $statistic
     *
     * @return self
     */
    public function setStatistic($statistic)
    {
        $this->statistic = $statistic;

        return $this;
    }

    /**
     * Gets as unit.
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
     * Sets a new unit.
     *
     * Kód doplňkové měrné jednotky.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as coefficient.
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
     * Sets a new coefficient.
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @param float $coefficient
     *
     * @return self
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Gets as country.
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
     * Sets a new country.
     *
     * Stát původu.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
