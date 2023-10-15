<?php

namespace Pohoda\NumericalSeries;

/**
 * Class representing NumericalSeriesType
 *
 *
 * XSD Type: numericalSeriesType
 */
class NumericalSeriesType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\NumericalSeries\NumericalSeriesHeaderType $numericalSeriesHeader
     */
    private $numericalSeriesHeader = null;

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
     * Gets as numericalSeriesHeader
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesHeaderType
     */
    public function getNumericalSeriesHeader()
    {
        return $this->numericalSeriesHeader;
    }

    /**
     * Sets a new numericalSeriesHeader
     *
     * @param \Pohoda\NumericalSeries\NumericalSeriesHeaderType $numericalSeriesHeader
     * @return self
     */
    public function setNumericalSeriesHeader(?\Pohoda\NumericalSeries\NumericalSeriesHeaderType $numericalSeriesHeader = null)
    {
        $this->numericalSeriesHeader = $numericalSeriesHeader;
        return $this;
    }
}

