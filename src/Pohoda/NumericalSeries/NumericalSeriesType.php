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

namespace Pohoda\NumericalSeries;

/**
 * Class representing NumericalSeriesType.
 *
 * XSD Type: numericalSeriesType
 */
class NumericalSeriesType
{
    private ?string $version = null;
    private ?\Pohoda\NumericalSeries\NumericalSeriesHeaderType $numericalSeriesHeader = null;

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
     * Gets as numericalSeriesHeader.
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesHeaderType
     */
    public function getNumericalSeriesHeader()
    {
        return $this->numericalSeriesHeader;
    }

    /**
     * Sets a new numericalSeriesHeader.
     *
     * @return self
     */
    public function setNumericalSeriesHeader(?\Pohoda\NumericalSeries\NumericalSeriesHeaderType $numericalSeriesHeader = null)
    {
        $this->numericalSeriesHeader = $numericalSeriesHeader;

        return $this;
    }
}
