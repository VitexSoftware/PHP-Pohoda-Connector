<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\List;

/**
 * Class representing ListMovementRequestType.
 *
 * XSD Type: listMovementRequestType
 */
class ListMovementRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $movementVersion = null;

    /**
     * @var \Pohoda\Filter\RequestMovementType[]
     */
    private array $requestMovement = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as movementVersion.
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
     * Sets a new movementVersion.
     *
     * Požadovaná verze.
     *
     * @param string $movementVersion
     *
     * @return self
     */
    public function setMovementVersion($movementVersion)
    {
        $this->movementVersion = $movementVersion;

        return $this;
    }

    /**
     * Adds as requestMovement.
     *
     * @return self
     */
    public function addToRequestMovement(\Pohoda\Filter\RequestMovementType $requestMovement)
    {
        $this->requestMovement[] = $requestMovement;

        return $this;
    }

    /**
     * isset requestMovement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestMovement($index)
    {
        return isset($this->requestMovement[$index]);
    }

    /**
     * unset requestMovement.
     *
     * @param int|string $index
     */
    public function unsetRequestMovement($index): void
    {
        unset($this->requestMovement[$index]);
    }

    /**
     * Gets as requestMovement.
     *
     * @return \Pohoda\Filter\RequestMovementType[]
     */
    public function getRequestMovement()
    {
        return $this->requestMovement;
    }

    /**
     * Sets a new requestMovement.
     *
     * @param \Pohoda\Filter\RequestMovementType[] $requestMovement
     *
     * @return self
     */
    public function setRequestMovement(array $requestMovement)
    {
        $this->requestMovement = $requestMovement;

        return $this;
    }
}
