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
 * Class representing VatPayerWholePeriodType.
 *
 * XSD Type: vatPayerWholePeriodType
 */
class VatPayerWholePeriodType
{
    private ?string $taxPeriod = null;

    /**
     * Gets as taxPeriod.
     *
     * @return string
     */
    public function getTaxPeriod()
    {
        return $this->taxPeriod;
    }

    /**
     * Sets a new taxPeriod.
     *
     * @param string $taxPeriod
     *
     * @return self
     */
    public function setTaxPeriod($taxPeriod)
    {
        $this->taxPeriod = $taxPeriod;

        return $this;
    }
}
