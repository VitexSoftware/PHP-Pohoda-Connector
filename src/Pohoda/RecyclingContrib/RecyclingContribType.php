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

namespace Pohoda\RecyclingContrib;

/**
 * Class representing RecyclingContribType.
 *
 * XSD Type: recyclingContribType
 */
class RecyclingContribType
{
    private string $version = null;
    private \Pohoda\RecyclingContrib\RecyclingContribHeaderType $recyclingContribHeader = null;

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
     * Gets as recyclingContribHeader.
     *
     * @return \Pohoda\RecyclingContrib\RecyclingContribHeaderType
     */
    public function getRecyclingContribHeader()
    {
        return $this->recyclingContribHeader;
    }

    /**
     * Sets a new recyclingContribHeader.
     *
     * @return self
     */
    public function setRecyclingContribHeader(?\Pohoda\RecyclingContrib\RecyclingContribHeaderType $recyclingContribHeader = null)
    {
        $this->recyclingContribHeader = $recyclingContribHeader;

        return $this;
    }
}
