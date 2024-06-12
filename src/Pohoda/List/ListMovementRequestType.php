<?php

namespace Pohoda\List;

/**
 * Class representing ListMovementRequestType
 *
 *
 * XSD Type: listMovementRequestType
 */
class ListMovementRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $movementVersion
     */
    private $movementVersion = null;

    /**
     * @var \Pohoda\Filter\RequestMovementType[] $requestMovement
     */
    private $requestMovement = [
    ];

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
     * Gets as movementVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getMovementVersion()
    {
        return $this->movementVersion;
    }

    /**
     * Sets a new movementVersion
     *
     * Požadovaná verze.
     *
     * @param string $movementVersion
     * @return self
     */
    public function setMovementVersion($movementVersion)
    {
        $this->movementVersion = $movementVersion;
        return $this;
    }

    /**
     * Adds as requestMovement
     *
     * @return self
     * @param \Pohoda\Filter\RequestMovementType $requestMovement
     */
    public function addToRequestMovement(\Pohoda\Filter\RequestMovementType $requestMovement)
    {
        $this->requestMovement[] = $requestMovement;
        return $this;
    }

    /**
     * isset requestMovement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestMovement($index)
    {
        return isset($this->requestMovement[$index]);
    }

    /**
     * unset requestMovement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestMovement($index)
    {
        unset($this->requestMovement[$index]);
    }

    /**
     * Gets as requestMovement
     *
     * @return \Pohoda\Filter\RequestMovementType[]
     */
    public function getRequestMovement()
    {
        return $this->requestMovement;
    }

    /**
     * Sets a new requestMovement
     *
     * @param \Pohoda\Filter\RequestMovementType[] $requestMovement
     * @return self
     */
    public function setRequestMovement(array $requestMovement)
    {
        $this->requestMovement = $requestMovement;
        return $this;
    }
}
