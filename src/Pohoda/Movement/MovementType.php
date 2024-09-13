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

namespace Pohoda\Movement;

/**
 * Class representing MovementType.
 *
 * XSD Type: movementType
 */
class MovementType
{
    private string $version = null;
    private \Pohoda\Movement\MovementHeaderType $movementHeader = null;

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
     * Gets as movementHeader.
     *
     * @return \Pohoda\Movement\MovementHeaderType
     */
    public function getMovementHeader()
    {
        return $this->movementHeader;
    }

    /**
     * Sets a new movementHeader.
     *
     * @return self
     */
    public function setMovementHeader(?\Pohoda\Movement\MovementHeaderType $movementHeader = null)
    {
        $this->movementHeader = $movementHeader;

        return $this;
    }
}
