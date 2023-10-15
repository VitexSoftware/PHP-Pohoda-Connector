<?php

namespace Pohoda\MKasa;

/**
 * Class representing VatPayerWholePeriodType
 *
 *
 * XSD Type: vatPayerWholePeriodType
 */
class VatPayerWholePeriodType
{
    /**
     * @var string $taxPeriod
     */
    private $taxPeriod = null;

    /**
     * Gets as taxPeriod
     *
     * @return string
     */
    public function getTaxPeriod()
    {
        return $this->taxPeriod;
    }

    /**
     * Sets a new taxPeriod
     *
     * @param string $taxPeriod
     * @return self
     */
    public function setTaxPeriod($taxPeriod)
    {
        $this->taxPeriod = $taxPeriod;
        return $this;
    }
}

