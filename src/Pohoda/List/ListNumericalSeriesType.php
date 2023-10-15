<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListNumericalSeriesType
 *
 *
 * XSD Type: listNumericalSeriesType
 */
class ListNumericalSeriesType extends ListVersionType
{
    /**
     * @var \Pohoda\NumericalSeries\NumericalSeriesType[] $numericalSeries
     */
    private $numericalSeries = [

    ];

    /**
     * Adds as numericalSeries
     *
     * @return self
     * @param \Pohoda\NumericalSeries\NumericalSeriesType $numericalSeries
     */
    public function addToNumericalSeries(\Pohoda\NumericalSeries\NumericalSeriesType $numericalSeries)
    {
        $this->numericalSeries[] = $numericalSeries;
        return $this;
    }

    /**
     * isset numericalSeries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumericalSeries($index)
    {
        return isset($this->numericalSeries[$index]);
    }

    /**
     * unset numericalSeries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumericalSeries($index)
    {
        unset($this->numericalSeries[$index]);
    }

    /**
     * Gets as numericalSeries
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesType[]
     */
    public function getNumericalSeries()
    {
        return $this->numericalSeries;
    }

    /**
     * Sets a new numericalSeries
     *
     * @param \Pohoda\NumericalSeries\NumericalSeriesType[] $numericalSeries
     * @return self
     */
    public function setNumericalSeries(array $numericalSeries = null)
    {
        $this->numericalSeries = $numericalSeries;
        return $this;
    }
}
