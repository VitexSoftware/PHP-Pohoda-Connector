<?php

namespace Pohoda\MKasa;

/**
 * Class representing NonVatPayerWholePeriodType
 *
 *
 * XSD Type: nonVatPayerWholePeriodType
 */
class NonVatPayerWholePeriodType
{
    /**
     * @var string $identifiedPerson
     */
    private $identifiedPerson = null;

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
}
