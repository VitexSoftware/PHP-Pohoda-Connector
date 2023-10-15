<?php

namespace Pohoda\Print;

/**
 * Class representing CheckboxType
 *
 *
 * XSD Type: checkboxType
 */
class CheckboxType
{
    /**
     * Zatržítko.
     *
     * @var string $value
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
     * Zatržítko.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Zatržítko.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
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
