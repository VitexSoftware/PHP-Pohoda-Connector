<?php

namespace Pohoda\Stock;

/**
 * Class representing IntParameterType
 *
 *
 * XSD Type: intParameterType
 */
class IntParameterType
{
    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\Type\ActionTypeItemType $actionType
     */
    private $actionType = null;

    /**
     * ID internetového parametru.
     *
     * @var int $intParameterID
     */
    private $intParameterID = null;

    /**
     * Název internetového parametru.
     *
     * @var string $intParameterName
     */
    private $intParameterName = null;

    /**
     * Pořadí.
     *
     * @var int $intParameterOrder
     */
    private $intParameterOrder = null;

    /**
     * Typ hodnoty internetového parametru.
     *
     * @var string $intParameterType
     */
    private $intParameterType = null;

    /**
     * @var \Pohoda\Stock\IntParameterValueType[] $intParameterValues
     */
    private $intParameterValues = null;

    /**
     * Gets as actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\Type\ActionTypeItemType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as intParameterID
     *
     * ID internetového parametru.
     *
     * @return int
     */
    public function getIntParameterID()
    {
        return $this->intParameterID;
    }

    /**
     * Sets a new intParameterID
     *
     * ID internetového parametru.
     *
     * @param int $intParameterID
     * @return self
     */
    public function setIntParameterID($intParameterID)
    {
        $this->intParameterID = $intParameterID;
        return $this;
    }

    /**
     * Gets as intParameterName
     *
     * Název internetového parametru.
     *
     * @return string
     */
    public function getIntParameterName()
    {
        return $this->intParameterName;
    }

    /**
     * Sets a new intParameterName
     *
     * Název internetového parametru.
     *
     * @param string $intParameterName
     * @return self
     */
    public function setIntParameterName($intParameterName)
    {
        $this->intParameterName = $intParameterName;
        return $this;
    }

    /**
     * Gets as intParameterOrder
     *
     * Pořadí.
     *
     * @return int
     */
    public function getIntParameterOrder()
    {
        return $this->intParameterOrder;
    }

    /**
     * Sets a new intParameterOrder
     *
     * Pořadí.
     *
     * @param int $intParameterOrder
     * @return self
     */
    public function setIntParameterOrder($intParameterOrder)
    {
        $this->intParameterOrder = $intParameterOrder;
        return $this;
    }

    /**
     * Gets as intParameterType
     *
     * Typ hodnoty internetového parametru.
     *
     * @return string
     */
    public function getIntParameterType()
    {
        return $this->intParameterType;
    }

    /**
     * Sets a new intParameterType
     *
     * Typ hodnoty internetového parametru.
     *
     * @param string $intParameterType
     * @return self
     */
    public function setIntParameterType($intParameterType)
    {
        $this->intParameterType = $intParameterType;
        return $this;
    }

    /**
     * Adds as intParameterValue
     *
     * @return self
     * @param \Pohoda\Stock\IntParameterValueType $intParameterValue
     */
    public function addToIntParameterValues(\Pohoda\Stock\IntParameterValueType $intParameterValue)
    {
        $this->intParameterValues[] = $intParameterValue;
        return $this;
    }

    /**
     * isset intParameterValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntParameterValues($index)
    {
        return isset($this->intParameterValues[$index]);
    }

    /**
     * unset intParameterValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntParameterValues($index)
    {
        unset($this->intParameterValues[$index]);
    }

    /**
     * Gets as intParameterValues
     *
     * @return \Pohoda\Stock\IntParameterValueType[]
     */
    public function getIntParameterValues()
    {
        return $this->intParameterValues;
    }

    /**
     * Sets a new intParameterValues
     *
     * @param \Pohoda\Stock\IntParameterValueType[] $intParameterValues
     * @return self
     */
    public function setIntParameterValues(array $intParameterValues)
    {
        $this->intParameterValues = $intParameterValues;
        return $this;
    }
}
