<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListParameterType
 *
 *
 * XSD Type: listParameterType
 */
class ListParameterType extends ListVersionType
{
    /**
     * @var \Pohoda\Parameter\ParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Adds as parameter
     *
     * @return self
     * @param \Pohoda\Parameter\ParameterType $parameter
     */
    public function addToParameter(\Pohoda\Parameter\ParameterType $parameter)
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
     * @return \Pohoda\Parameter\ParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \Pohoda\Parameter\ParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }
}

