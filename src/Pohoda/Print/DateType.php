<?php

namespace Pohoda\Print;

/**
 * Class representing DateType
 *
 *
 * XSD Type: dateType
 */
class DateType
{
    /**
     * Datum.
     *
     * @var \DateTime $value
     */
    private $value = null;

    /**
     * Pouze export.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as value
     *
     * Datum.
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Datum.
     *
     * @param \DateTime $value
     * @return self
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as name
     *
     * Pouze export.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Pouze export.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
