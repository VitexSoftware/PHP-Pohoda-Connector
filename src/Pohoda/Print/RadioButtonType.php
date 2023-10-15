<?php

namespace Pohoda\Print;

/**
 * Class representing RadioButtonType
 *
 *
 * XSD Type: radioButtonType
 */
class RadioButtonType
{
    /**
     * Přepínač.
     *
     * @var int $value
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
     * Přepínač.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Přepínač.
     *
     * @param int $value
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
