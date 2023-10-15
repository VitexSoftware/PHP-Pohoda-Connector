<?php

namespace Pohoda\MKasa;

/**
 * Class representing ChangeOfModeInCalendarYearType
 *
 *
 * XSD Type: changeOfModeInCalendarYearType
 */
class ChangeOfModeInCalendarYearType
{
    /**
     * @var string $identifiedPerson
     */
    private $identifiedPerson = null;

    /**
     * @var string $taxPeriod
     */
    private $taxPeriod = null;

    /**
     * @var \Pohoda\MKasa\ModeCalendarType $modeCalendar
     */
    private $modeCalendar = null;

    /**
     * Gets as identifiedPerson
     *
     * @return string
     */
    public function getIdentifiedPerson()
    {
        return $this->identifiedPerson;
    }

    /**
     * Sets a new identifiedPerson
     *
     * @param string $identifiedPerson
     * @return self
     */
    public function setIdentifiedPerson($identifiedPerson)
    {
        $this->identifiedPerson = $identifiedPerson;
        return $this;
    }

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

    /**
     * Gets as modeCalendar
     *
     * @return \Pohoda\MKasa\ModeCalendarType
     */
    public function getModeCalendar()
    {
        return $this->modeCalendar;
    }

    /**
     * Sets a new modeCalendar
     *
     * @param \Pohoda\MKasa\ModeCalendarType $modeCalendar
     * @return self
     */
    public function setModeCalendar(\Pohoda\MKasa\ModeCalendarType $modeCalendar)
    {
        $this->modeCalendar = $modeCalendar;
        return $this;
    }
}
