<?php

namespace Pohoda\Gdpr;

/**
 * Class representing GDPRType
 *
 *
 * XSD Type: GDPRType
 */
class GDPRType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Gdpr\GDPRHeaderType $gDPRHeader
     */
    private $gDPRHeader = null;

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
     * Gets as gDPRHeader
     *
     * @return \Pohoda\Gdpr\GDPRHeaderType
     */
    public function getGDPRHeader()
    {
        return $this->gDPRHeader;
    }

    /**
     * Sets a new gDPRHeader
     *
     * @param \Pohoda\Gdpr\GDPRHeaderType $gDPRHeader
     * @return self
     */
    public function setGDPRHeader(?\Pohoda\Gdpr\GDPRHeaderType $gDPRHeader = null)
    {
        $this->gDPRHeader = $gDPRHeader;
        return $this;
    }
}

