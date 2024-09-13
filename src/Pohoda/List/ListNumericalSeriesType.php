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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListNumericalSeriesType.
 *
 * XSD Type: listNumericalSeriesType
 */
class ListNumericalSeriesType extends ListVersionType
{
    /**
     * @var \Pohoda\NumericalSeries\NumericalSeriesType[]
     */
    private array $numericalSeries = [
    ];

    /**
     * Adds as numericalSeries.
     *
     * @return self
     */
    public function addToNumericalSeries(\Pohoda\NumericalSeries\NumericalSeriesType $numericalSeries)
    {
        $this->numericalSeries[] = $numericalSeries;

        return $this;
    }

    /**
     * isset numericalSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetNumericalSeries($index)
    {
        return isset($this->numericalSeries[$index]);
    }

    /**
     * unset numericalSeries.
     *
     * @param int|string $index
     */
    public function unsetNumericalSeries($index): void
    {
        unset($this->numericalSeries[$index]);
    }

    /**
     * Gets as numericalSeries.
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesType[]
     */
    public function getNumericalSeries()
    {
        return $this->numericalSeries;
    }

    /**
     * Sets a new numericalSeries.
     *
     * @param \Pohoda\NumericalSeries\NumericalSeriesType[] $numericalSeries
     *
     * @return self
     */
    public function setNumericalSeries(?array $numericalSeries = null)
    {
        $this->numericalSeries = $numericalSeries;

        return $this;
    }
}
