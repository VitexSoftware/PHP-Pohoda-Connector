<?php

namespace Pohoda\Stock;

/**
 * Class representing IntParametersType
 *
 *
 * XSD Type: intParametersType
 */
class IntParametersType
{
    /**
     * @var \Pohoda\Stock\IntParameterType[] $intParameter
     */
    private $intParameter = [
        
    ];

    /**
     * Adds as intParameter
     *
     * @return self
     * @param \Pohoda\Stock\IntParameterType $intParameter
     */
    public function addToIntParameter(\Pohoda\Stock\IntParameterType $intParameter)
    {
        $this->intParameter[] = $intParameter;
        return $this;
    }

    /**
     * isset intParameter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntParameter($index)
    {
        return isset($this->intParameter[$index]);
    }

    /**
     * unset intParameter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntParameter($index)
    {
        unset($this->intParameter[$index]);
    }

    /**
     * Gets as intParameter
     *
     * @return \Pohoda\Stock\IntParameterType[]
     */
    public function getIntParameter()
    {
        return $this->intParameter;
    }

    /**
     * Sets a new intParameter
     *
     * @param \Pohoda\Stock\IntParameterType[] $intParameter
     * @return self
     */
    public function setIntParameter(array $intParameter = null)
    {
        $this->intParameter = $intParameter;
        return $this;
    }
}

