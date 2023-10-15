<?php

namespace Pohoda\IntParam;

/**
 * Class representing ParameterSettingsType
 *
 *
 * XSD Type: parameterSettingsType
 */
class ParameterSettingsType
{
    /**
     * @var string $unit
     */
    private $unit = null;

    /**
     * @var int $length
     */
    private $length = null;

    /**
     * @var \Pohoda\IntParam\ParameterListItemType[] $parameterList
     */
    private $parameterList = null;

    /**
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Gets as unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Adds as parameterListItem
     *
     * @return self
     * @param \Pohoda\IntParam\ParameterListItemType $parameterListItem
     */
    public function addToParameterList(\Pohoda\IntParam\ParameterListItemType $parameterListItem)
    {
        $this->parameterList[] = $parameterListItem;
        return $this;
    }

    /**
     * isset parameterList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameterList($index)
    {
        return isset($this->parameterList[$index]);
    }

    /**
     * unset parameterList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameterList($index)
    {
        unset($this->parameterList[$index]);
    }

    /**
     * Gets as parameterList
     *
     * @return \Pohoda\IntParam\ParameterListItemType[]
     */
    public function getParameterList()
    {
        return $this->parameterList;
    }

    /**
     * Sets a new parameterList
     *
     * @param \Pohoda\IntParam\ParameterListItemType[] $parameterList
     * @return self
     */
    public function setParameterList(array $parameterList = null)
    {
        $this->parameterList = $parameterList;
        return $this;
    }

    /**
     * Gets as currency
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param \Pohoda\Type\RefType $currency
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }
}

