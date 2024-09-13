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

namespace Pohoda\MKasa;

/**
 * Class representing ModeCalendarType.
 *
 * XSD Type: modeCalendarType
 */
class ModeCalendarType
{
    private string $january = null;
    private string $february = null;
    private string $march = null;
    private string $april = null;
    private string $may = null;
    private string $june = null;
    private string $july = null;
    private string $august = null;
    private string $september = null;
    private string $october = null;
    private string $november = null;
    private string $december = null;

    /**
     * Gets as january.
     *
     * @return string
     */
    public function getJanuary()
    {
        return $this->january;
    }

    /**
     * Sets a new january.
     *
     * @param string $january
     *
     * @return self
     */
    public function setJanuary($january)
    {
        $this->january = $january;

        return $this;
    }

    /**
     * Gets as february.
     *
     * @return string
     */
    public function getFebruary()
    {
        return $this->february;
    }

    /**
     * Sets a new february.
     *
     * @param string $february
     *
     * @return self
     */
    public function setFebruary($february)
    {
        $this->february = $february;

        return $this;
    }

    /**
     * Gets as march.
     *
     * @return string
     */
    public function getMarch()
    {
        return $this->march;
    }

    /**
     * Sets a new march.
     *
     * @param string $march
     *
     * @return self
     */
    public function setMarch($march)
    {
        $this->march = $march;

        return $this;
    }

    /**
     * Gets as april.
     *
     * @return string
     */
    public function getApril()
    {
        return $this->april;
    }

    /**
     * Sets a new april.
     *
     * @param string $april
     *
     * @return self
     */
    public function setApril($april)
    {
        $this->april = $april;

        return $this;
    }

    /**
     * Gets as may.
     *
     * @return string
     */
    public function getMay()
    {
        return $this->may;
    }

    /**
     * Sets a new may.
     *
     * @param string $may
     *
     * @return self
     */
    public function setMay($may)
    {
        $this->may = $may;

        return $this;
    }

    /**
     * Gets as june.
     *
     * @return string
     */
    public function getJune()
    {
        return $this->june;
    }

    /**
     * Sets a new june.
     *
     * @param string $june
     *
     * @return self
     */
    public function setJune($june)
    {
        $this->june = $june;

        return $this;
    }

    /**
     * Gets as july.
     *
     * @return string
     */
    public function getJuly()
    {
        return $this->july;
    }

    /**
     * Sets a new july.
     *
     * @param string $july
     *
     * @return self
     */
    public function setJuly($july)
    {
        $this->july = $july;

        return $this;
    }

    /**
     * Gets as august.
     *
     * @return string
     */
    public function getAugust()
    {
        return $this->august;
    }

    /**
     * Sets a new august.
     *
     * @param string $august
     *
     * @return self
     */
    public function setAugust($august)
    {
        $this->august = $august;

        return $this;
    }

    /**
     * Gets as september.
     *
     * @return string
     */
    public function getSeptember()
    {
        return $this->september;
    }

    /**
     * Sets a new september.
     *
     * @param string $september
     *
     * @return self
     */
    public function setSeptember($september)
    {
        $this->september = $september;

        return $this;
    }

    /**
     * Gets as october.
     *
     * @return string
     */
    public function getOctober()
    {
        return $this->october;
    }

    /**
     * Sets a new october.
     *
     * @param string $october
     *
     * @return self
     */
    public function setOctober($october)
    {
        $this->october = $october;

        return $this;
    }

    /**
     * Gets as november.
     *
     * @return string
     */
    public function getNovember()
    {
        return $this->november;
    }

    /**
     * Sets a new november.
     *
     * @param string $november
     *
     * @return self
     */
    public function setNovember($november)
    {
        $this->november = $november;

        return $this;
    }

    /**
     * Gets as december.
     *
     * @return string
     */
    public function getDecember()
    {
        return $this->december;
    }

    /**
     * Sets a new december.
     *
     * @param string $december
     *
     * @return self
     */
    public function setDecember($december)
    {
        $this->december = $december;

        return $this;
    }
}
