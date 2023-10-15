<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListMovementType
 *
 *
 * XSD Type: listMovementType
 */
class ListMovementType extends ListVersionType
{
    /**
     * @var \Pohoda\Movement\MovementType[] $movement
     */
    private $movement = [
        
    ];

    /**
     * Adds as movement
     *
     * @return self
     * @param \Pohoda\Movement\MovementType $movement
     */
    public function addToMovement(\Pohoda\Movement\MovementType $movement)
    {
        $this->movement[] = $movement;
        return $this;
    }

    /**
     * isset movement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMovement($index)
    {
        return isset($this->movement[$index]);
    }

    /**
     * unset movement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMovement($index)
    {
        unset($this->movement[$index]);
    }

    /**
     * Gets as movement
     *
     * @return \Pohoda\Movement\MovementType[]
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * Sets a new movement
     *
     * @param \Pohoda\Movement\MovementType[] $movement
     * @return self
     */
    public function setMovement(array $movement = null)
    {
        $this->movement = $movement;
        return $this;
    }
}

