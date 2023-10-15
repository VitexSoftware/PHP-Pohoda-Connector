<?php

namespace Pohoda\Stock;

/**
 * Class representing IntParameterValueType
 *
 *
 * XSD Type: intParameterValueType
 */
class IntParameterValueType
{
    /**
     * ID, používá se jen u typu seznam.
     *
     * @var int $parameterValueID
     */
    private $parameterValueID = null;

    /**
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     *
     * @var string $parameterValue
     */
    private $parameterValue = null;

    /**
     * Pořadí, používá se jen u typu seznam.
     *
     * @var int $parameterOrder
     */
    private $parameterOrder = null;

    /**
     * Gets as parameterValueID
     *
     * ID, používá se jen u typu seznam.
     *
     * @return int
     */
    public function getParameterValueID()
    {
        return $this->parameterValueID;
    }

    /**
     * Sets a new parameterValueID
     *
     * ID, používá se jen u typu seznam.
     *
     * @param int $parameterValueID
     * @return self
     */
    public function setParameterValueID($parameterValueID)
    {
        $this->parameterValueID = $parameterValueID;
        return $this;
    }

    /**
     * Gets as parameterValue
     *
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Sets a new parameterValue
     *
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     *
     * @param string $parameterValue
     * @return self
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;
        return $this;
    }

    /**
     * Gets as parameterOrder
     *
     * Pořadí, používá se jen u typu seznam.
     *
     * @return int
     */
    public function getParameterOrder()
    {
        return $this->parameterOrder;
    }

    /**
     * Sets a new parameterOrder
     *
     * Pořadí, používá se jen u typu seznam.
     *
     * @param int $parameterOrder
     * @return self
     */
    public function setParameterOrder($parameterOrder)
    {
        $this->parameterOrder = $parameterOrder;
        return $this;
    }
}

