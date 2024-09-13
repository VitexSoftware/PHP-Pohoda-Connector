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

namespace Pohoda\List;

/**
 * Class representing ListNumericalSeriesRequestType.
 *
 * XSD Type: listNumericalSeriesRequestType
 */
class ListNumericalSeriesRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $numericalSeriesVersion = null;

    /**
     * @var \Pohoda\Filter\RequestNumericalSeriesType[]
     */
    private array $requestNumericalSeries = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as numericalSeriesVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getNumericalSeriesVersion()
    {
        return $this->numericalSeriesVersion;
    }

    /**
     * Sets a new numericalSeriesVersion.
     *
     * Požadovaná verze.
     *
     * @param string $numericalSeriesVersion
     *
     * @return self
     */
    public function setNumericalSeriesVersion($numericalSeriesVersion)
    {
        $this->numericalSeriesVersion = $numericalSeriesVersion;

        return $this;
    }

    /**
     * Adds as requestNumericalSeries.
     *
     * @return self
     */
    public function addToRequestNumericalSeries(\Pohoda\Filter\RequestNumericalSeriesType $requestNumericalSeries)
    {
        $this->requestNumericalSeries[] = $requestNumericalSeries;

        return $this;
    }

    /**
     * isset requestNumericalSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestNumericalSeries($index)
    {
        return isset($this->requestNumericalSeries[$index]);
    }

    /**
     * unset requestNumericalSeries.
     *
     * @param int|string $index
     */
    public function unsetRequestNumericalSeries($index): void
    {
        unset($this->requestNumericalSeries[$index]);
    }

    /**
     * Gets as requestNumericalSeries.
     *
     * @return \Pohoda\Filter\RequestNumericalSeriesType[]
     */
    public function getRequestNumericalSeries()
    {
        return $this->requestNumericalSeries;
    }

    /**
     * Sets a new requestNumericalSeries.
     *
     * @param \Pohoda\Filter\RequestNumericalSeriesType[] $requestNumericalSeries
     *
     * @return self
     */
    public function setRequestNumericalSeries(array $requestNumericalSeries)
    {
        $this->requestNumericalSeries = $requestNumericalSeries;

        return $this;
    }
}
