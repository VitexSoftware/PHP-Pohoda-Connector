<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ValidityActionType
 *
 *
 * XSD Type: validityActionType
 */
class ValidityActionType
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
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;
        return $this;
    }
}
