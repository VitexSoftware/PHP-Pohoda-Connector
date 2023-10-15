<?php

namespace Pohoda\Type;

/**
 * Class representing VatRateType
 *
 *
 * XSD Type: vatRateType
 */
class VatRateType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Hodnota sazby DPH (pouze export).
     *
     * @var float $value
     */
    private $value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as value
     *
     * Hodnota sazby DPH (pouze export).
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Hodnota sazby DPH (pouze export).
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
