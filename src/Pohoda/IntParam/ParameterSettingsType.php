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

namespace Pohoda\IntParam;

/**
 * Class representing ParameterSettingsType.
 *
 * XSD Type: parameterSettingsType
 */
class ParameterSettingsType
{
    private string $unit = null;
    private int $length = null;

    /**
     * @var \Pohoda\IntParam\ParameterListItemType[]
     */
    private array $parameterList = null;
    private \Pohoda\Type\RefType $currency = null;

    /**
     * Gets as unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as length.
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length.
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Adds as parameterListItem.
     *
     * @return self
     */
    public function addToParameterList(\Pohoda\IntParam\ParameterListItemType $parameterListItem)
    {
        $this->parameterList[] = $parameterListItem;

        return $this;
    }

    /**
     * isset parameterList.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameterList($index)
    {
        return isset($this->parameterList[$index]);
    }

    /**
     * unset parameterList.
     *
     * @param int|string $index
     */
    public function unsetParameterList($index): void
    {
        unset($this->parameterList[$index]);
    }

    /**
     * Gets as parameterList.
     *
     * @return \Pohoda\IntParam\ParameterListItemType[]
     */
    public function getParameterList()
    {
        return $this->parameterList;
    }

    /**
     * Sets a new parameterList.
     *
     * @param \Pohoda\IntParam\ParameterListItemType[] $parameterList
     *
     * @return self
     */
    public function setParameterList(?array $parameterList = null)
    {
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Gets as currency.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency.
     *
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }
}
