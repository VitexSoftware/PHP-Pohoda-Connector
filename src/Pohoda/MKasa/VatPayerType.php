<?php

namespace Pohoda\MKasa;

/**
 * Class representing VatPayerType
 *
 *
 * XSD Type: vatPayerType
 */
class VatPayerType
{
    /**
     * @var \Pohoda\MKasa\VatPayerWholePeriodType $vatPayerWholePeriod
     */
    private $vatPayerWholePeriod = null;

    /**
     * @var \Pohoda\MKasa\NonVatPayerWholePeriodType $nonVatPayerWholePeriod
     */
    private $nonVatPayerWholePeriod = null;

    /**
     * @var \Pohoda\MKasa\ChangeOfModeInCalendarYearType $changeOfModeInCalendarYear
     */
    private $changeOfModeInCalendarYear = null;

    /**
     * Gets as vatPayerWholePeriod
     *
     * @return \Pohoda\MKasa\VatPayerWholePeriodType
     */
    public function getVatPayerWholePeriod()
    {
        return $this->vatPayerWholePeriod;
    }

    /**
     * Sets a new vatPayerWholePeriod
     *
     * @param \Pohoda\MKasa\VatPayerWholePeriodType $vatPayerWholePeriod
     * @return self
     */
    public function setVatPayerWholePeriod(?\Pohoda\MKasa\VatPayerWholePeriodType $vatPayerWholePeriod = null)
    {
        $this->vatPayerWholePeriod = $vatPayerWholePeriod;
        return $this;
    }

    /**
     * Gets as nonVatPayerWholePeriod
     *
     * @return \Pohoda\MKasa\NonVatPayerWholePeriodType
     */
    public function getNonVatPayerWholePeriod()
    {
        return $this->nonVatPayerWholePeriod;
    }

    /**
     * Sets a new nonVatPayerWholePeriod
     *
     * @param \Pohoda\MKasa\NonVatPayerWholePeriodType $nonVatPayerWholePeriod
     * @return self
     */
    public function setNonVatPayerWholePeriod(?\Pohoda\MKasa\NonVatPayerWholePeriodType $nonVatPayerWholePeriod = null)
    {
        $this->nonVatPayerWholePeriod = $nonVatPayerWholePeriod;
        return $this;
    }

    /**
     * Gets as changeOfModeInCalendarYear
     *
     * @return \Pohoda\MKasa\ChangeOfModeInCalendarYearType
     */
    public function getChangeOfModeInCalendarYear()
    {
        return $this->changeOfModeInCalendarYear;
    }

    /**
     * Sets a new changeOfModeInCalendarYear
     *
     * @param \Pohoda\MKasa\ChangeOfModeInCalendarYearType $changeOfModeInCalendarYear
     * @return self
     */
    public function setChangeOfModeInCalendarYear(?\Pohoda\MKasa\ChangeOfModeInCalendarYearType $changeOfModeInCalendarYear = null)
    {
        $this->changeOfModeInCalendarYear = $changeOfModeInCalendarYear;
        return $this;
    }
}

