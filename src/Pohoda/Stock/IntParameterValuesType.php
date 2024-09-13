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

namespace Pohoda\Stock;

/**
 * Class representing IntParameterValuesType.
 *
 * XSD Type: intParameterValuesType
 */
class IntParameterValuesType
{
    /**
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @var \Pohoda\Stock\IntParameterValueType[]
     */
    private array $intParameterValue = [
    ];

    /**
     * Adds as intParameterValue.
     *
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @return self
     */
    public function addToIntParameterValue(\Pohoda\Stock\IntParameterValueType $intParameterValue)
    {
        $this->intParameterValue[] = $intParameterValue;

        return $this;
    }

    /**
     * isset intParameterValue.
     *
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParameterValue($index)
    {
        return isset($this->intParameterValue[$index]);
    }

    /**
     * unset intParameterValue.
     *
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @param int|string $index
     */
    public function unsetIntParameterValue($index): void
    {
        unset($this->intParameterValue[$index]);
    }

    /**
     * Gets as intParameterValue.
     *
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @return \Pohoda\Stock\IntParameterValueType[]
     */
    public function getIntParameterValue()
    {
        return $this->intParameterValue;
    }

    /**
     * Sets a new intParameterValue.
     *
     * Hodnota internetového parametru, je různá dle typu.
     *
     * @param \Pohoda\Stock\IntParameterValueType[] $intParameterValue
     *
     * @return self
     */
    public function setIntParameterValue(?array $intParameterValue = null)
    {
        $this->intParameterValue = $intParameterValue;

        return $this;
    }
}
