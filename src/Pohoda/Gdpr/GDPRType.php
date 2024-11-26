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

namespace Pohoda\Gdpr;

/**
 * Class representing GDPRType.
 *
 * XSD Type: GDPRType
 */
class GDPRType
{
    private ?string $version = null;
    private ?\Pohoda\Gdpr\GDPRHeaderType $gDPRHeader = null;

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
     * Gets as gDPRHeader.
     *
     * @return \Pohoda\Gdpr\GDPRHeaderType
     */
    public function getGDPRHeader()
    {
        return $this->gDPRHeader;
    }

    /**
     * Sets a new gDPRHeader.
     *
     * @return self
     */
    public function setGDPRHeader(?\Pohoda\Gdpr\GDPRHeaderType $gDPRHeader = null)
    {
        $this->gDPRHeader = $gDPRHeader;

        return $this;
    }
}
