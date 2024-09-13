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
 * Class representing CurrencyVATType.
 *
 * Hodnota sazby DPH (jen pro export).
 * XSD Type: currencyVAT
 */
class CurrencyVATType
{
    private float $__value = null;
    private float $rate = null;

    /**
     * Construct.
     *
     * @param float $value
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
     * @return float
     */
    public function value()
    {
        if ($args = \func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets as rate.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }
}
