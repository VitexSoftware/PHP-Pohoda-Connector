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
 * Class representing VatPayerType.
 *
 * XSD Type: vatPayerType
 */
class VatPayerType
{
    private ?\Pohoda\MKasa\VatPayerWholePeriodType $vatPayerWholePeriod = null;
    private ?\Pohoda\MKasa\NonVatPayerWholePeriodType $nonVatPayerWholePeriod = null;
    private ?\Pohoda\MKasa\ChangeOfModeInCalendarYearType $changeOfModeInCalendarYear = null;

    /**
     * Gets as vatPayerWholePeriod.
     *
     * @return \Pohoda\MKasa\VatPayerWholePeriodType
     */
    public function getVatPayerWholePeriod()
    {
        return $this->vatPayerWholePeriod;
    }

    /**
     * Sets a new vatPayerWholePeriod.
     *
     * @return self
     */
    public function setVatPayerWholePeriod(?\Pohoda\MKasa\VatPayerWholePeriodType $vatPayerWholePeriod = null)
    {
        $this->vatPayerWholePeriod = $vatPayerWholePeriod;

        return $this;
    }

    /**
     * Gets as nonVatPayerWholePeriod.
     *
     * @return \Pohoda\MKasa\NonVatPayerWholePeriodType
     */
    public function getNonVatPayerWholePeriod()
    {
        return $this->nonVatPayerWholePeriod;
    }

    /**
     * Sets a new nonVatPayerWholePeriod.
     *
     * @return self
     */
    public function setNonVatPayerWholePeriod(?\Pohoda\MKasa\NonVatPayerWholePeriodType $nonVatPayerWholePeriod = null)
    {
        $this->nonVatPayerWholePeriod = $nonVatPayerWholePeriod;

        return $this;
    }

    /**
     * Gets as changeOfModeInCalendarYear.
     *
     * @return \Pohoda\MKasa\ChangeOfModeInCalendarYearType
     */
    public function getChangeOfModeInCalendarYear()
    {
        return $this->changeOfModeInCalendarYear;
    }

    /**
     * Sets a new changeOfModeInCalendarYear.
     *
     * @return self
     */
    public function setChangeOfModeInCalendarYear(?\Pohoda\MKasa\ChangeOfModeInCalendarYearType $changeOfModeInCalendarYear = null)
    {
        $this->changeOfModeInCalendarYear = $changeOfModeInCalendarYear;

        return $this;
    }
}
