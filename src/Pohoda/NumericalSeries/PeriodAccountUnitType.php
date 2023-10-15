<?php

namespace Pohoda\NumericalSeries;

/**
 * Class representing PeriodAccountUnitType
 *
 * Období platnosti účetní jednotky (pouze pro export).
 * XSD Type: periodAccountUnitType
 */
class PeriodAccountUnitType
{
    /**
     * Datum od.
     *
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * Datum do.
     *
     * @var \DateTime $dateTill
     */
    private $dateTill = null;

    /**
     * Gets as dateFrom
     *
     * Datum od.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * Datum od.
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTill
     *
     * Datum do.
     *
     * @return \DateTime
     */
    public function getDateTill()
    {
        return $this->dateTill;
    }

    /**
     * Sets a new dateTill
     *
     * Datum do.
     *
     * @param \DateTime $dateTill
     * @return self
     */
    public function setDateTill(\DateTime $dateTill)
    {
        $this->dateTill = $dateTill;
        return $this;
    }
}

