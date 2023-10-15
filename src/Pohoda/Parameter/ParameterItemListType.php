<?php

namespace Pohoda\Parameter;

/**
 * Class representing ParameterItemListType
 *
 * Seznam definic volitelných parametrů. U běžných agend je počet programově omezen na 92, uživatelské agendy mají maximálně 128 polí.
 * XSD Type: parameterItemListType
 */
class ParameterItemListType
{
    /**
     * @var \Pohoda\Parameter\ParameterDefType[] $parameterDef
     */
    private $parameterDef = [
        
    ];

    /**
     * Adds as parameterDef
     *
     * @return self
     * @param \Pohoda\Parameter\ParameterDefType $parameterDef
     */
    public function addToParameterDef(\Pohoda\Parameter\ParameterDefType $parameterDef)
    {
        $this->parameterDef[] = $parameterDef;
        return $this;
    }

    /**
     * isset parameterDef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameterDef($index)
    {
        return isset($this->parameterDef[$index]);
    }

    /**
     * unset parameterDef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameterDef($index)
    {
        unset($this->parameterDef[$index]);
    }

    /**
     * Gets as parameterDef
     *
     * @return \Pohoda\Parameter\ParameterDefType[]
     */
    public function getParameterDef()
    {
        return $this->parameterDef;
    }

    /**
     * Sets a new parameterDef
     *
     * @param \Pohoda\Parameter\ParameterDefType[] $parameterDef
     * @return self
     */
    public function setParameterDef(array $parameterDef = null)
    {
        $this->parameterDef = $parameterDef;
        return $this;
    }
}

