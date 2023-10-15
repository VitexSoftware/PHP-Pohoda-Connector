<?php

namespace Pohoda\Movement;

/**
 * Class representing MovementType
 *
 *
 * XSD Type: movementType
 */
class MovementType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Movement\MovementHeaderType $movementHeader
     */
    private $movementHeader = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as movementHeader
     *
     * @return \Pohoda\Movement\MovementHeaderType
     */
    public function getMovementHeader()
    {
        return $this->movementHeader;
    }

    /**
     * Sets a new movementHeader
     *
     * @param \Pohoda\Movement\MovementHeaderType $movementHeader
     * @return self
     */
    public function setMovementHeader(?\Pohoda\Movement\MovementHeaderType $movementHeader = null)
    {
        $this->movementHeader = $movementHeader;
        return $this;
    }
}
