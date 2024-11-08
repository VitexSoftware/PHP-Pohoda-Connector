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
 * Class representing ChangeOfModeInCalendarYearType.
 *
 * XSD Type: changeOfModeInCalendarYearType
 */
class ChangeOfModeInCalendarYearType
{
    private ?string $identifiedPerson = null;
    private ?string $taxPeriod = null;
    private ?\Pohoda\MKasa\ModeCalendarType $modeCalendar = null;

    /**
     * Gets as identifiedPerson.
     *
     * @return string
     */
    public function getIdentifiedPerson()
    {
        return $this->identifiedPerson;
    }

    /**
     * Sets a new identifiedPerson.
     *
     * @param string $identifiedPerson
     *
     * @return self
     */
    public function setIdentifiedPerson($identifiedPerson)
    {
        $this->identifiedPerson = $identifiedPerson;

        return $this;
    }

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

    /**
     * Gets as modeCalendar.
     *
     * @return \Pohoda\MKasa\ModeCalendarType
     */
    public function getModeCalendar()
    {
        return $this->modeCalendar;
    }

    /**
     * Sets a new modeCalendar.
     *
     * @return self
     */
    public function setModeCalendar(\Pohoda\MKasa\ModeCalendarType $modeCalendar)
    {
        $this->modeCalendar = $modeCalendar;

        return $this;
    }
}
