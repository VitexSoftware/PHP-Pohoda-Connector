<?php

namespace Pohoda\Service;

/**
 * Class representing ServiceStatesType
 *
 *
 * XSD Type: serviceStatesType
 */
class ServiceStatesType
{
    /**
     * @var \Pohoda\Service\StateType[] $state
     */
    private $state = [

    ];

    /**
     * Adds as state
     *
     * @return self
     * @param \Pohoda\Service\StateType $state
     */
    public function addToState(\Pohoda\Service\StateType $state)
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * isset state
     *
     * @param int|string $index
     * @return bool
     */
    public function issetState($index)
    {
        return isset($this->state[$index]);
    }

    /**
     * unset state
     *
     * @param int|string $index
     * @return void
     */
    public function unsetState($index)
    {
        unset($this->state[$index]);
    }

    /**
     * Gets as state
     *
     * @return \Pohoda\Service\StateType[]
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param \Pohoda\Service\StateType[] $state
     * @return self
     */
    public function setState(array $state)
    {
        $this->state = $state;
        return $this;
    }
}
