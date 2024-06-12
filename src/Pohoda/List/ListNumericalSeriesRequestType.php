<?php

namespace Pohoda\List;

/**
 * Class representing ListNumericalSeriesRequestType
 *
 *
 * XSD Type: listNumericalSeriesRequestType
 */
class ListNumericalSeriesRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $numericalSeriesVersion
     */
    private $numericalSeriesVersion = null;

    /**
     * @var \Pohoda\Filter\RequestNumericalSeriesType[] $requestNumericalSeries
     */
    private $requestNumericalSeries = [
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as numericalSeriesVersion
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
     * Sets a new numericalSeriesVersion
     *
     * Požadovaná verze.
     *
     * @param string $numericalSeriesVersion
     * @return self
     */
    public function setNumericalSeriesVersion($numericalSeriesVersion)
    {
        $this->numericalSeriesVersion = $numericalSeriesVersion;
        return $this;
    }

    /**
     * Adds as requestNumericalSeries
     *
     * @return self
     * @param \Pohoda\Filter\RequestNumericalSeriesType $requestNumericalSeries
     */
    public function addToRequestNumericalSeries(\Pohoda\Filter\RequestNumericalSeriesType $requestNumericalSeries)
    {
        $this->requestNumericalSeries[] = $requestNumericalSeries;
        return $this;
    }

    /**
     * isset requestNumericalSeries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestNumericalSeries($index)
    {
        return isset($this->requestNumericalSeries[$index]);
    }

    /**
     * unset requestNumericalSeries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestNumericalSeries($index)
    {
        unset($this->requestNumericalSeries[$index]);
    }

    /**
     * Gets as requestNumericalSeries
     *
     * @return \Pohoda\Filter\RequestNumericalSeriesType[]
     */
    public function getRequestNumericalSeries()
    {
        return $this->requestNumericalSeries;
    }

    /**
     * Sets a new requestNumericalSeries
     *
     * @param \Pohoda\Filter\RequestNumericalSeriesType[] $requestNumericalSeries
     * @return self
     */
    public function setRequestNumericalSeries(array $requestNumericalSeries)
    {
        $this->requestNumericalSeries = $requestNumericalSeries;
        return $this;
    }
}
