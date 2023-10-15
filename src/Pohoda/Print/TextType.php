<?php

namespace Pohoda\Print;

/**
 * Class representing TextType
 *
 *
 * XSD Type: textType
 */
class TextType
{
    /**
     * Textová hodnota.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as value
     *
     * Textová hodnota.
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
     * Textová hodnota.
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
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

