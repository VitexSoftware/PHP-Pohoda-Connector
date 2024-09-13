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

namespace Pohoda\Type;

/**
 * Class representing VatRateType.
 *
 * XSD Type: vatRateType
 */
class VatRateType
{
    private string $__value = null;

    /**
     * Hodnota sazby DPH (pouze export).
     */
    private float $value = null;

    /**
     * Construct.
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets a string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->__value;
    }

    /**
     * Gets or sets the inner value.
     *
     * @return string
     */
    public function value()
    {
        if ($args = \func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets as value.
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
     * Sets a new value.
     *
     * Hodnota sazby DPH (pouze export).
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
