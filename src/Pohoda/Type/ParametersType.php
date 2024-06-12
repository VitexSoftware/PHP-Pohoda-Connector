<?php

namespace Pohoda\Type;

/**
 * Class representing ParametersType
 *
 *
 * XSD Type: parametersType
 */
class ParametersType
{
    /**
     * @var \Pohoda\Type\ParameterDocType[] $parameter
     */
    private $parameter = [
    ];

    /**
     * Adds as parameter
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameter(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }
}
