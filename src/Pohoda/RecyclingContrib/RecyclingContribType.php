<?php

namespace Pohoda\RecyclingContrib;

/**
 * Class representing RecyclingContribType
 *
 *
 * XSD Type: recyclingContribType
 */
class RecyclingContribType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\RecyclingContrib\RecyclingContribHeaderType $recyclingContribHeader
     */
    private $recyclingContribHeader = null;

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
     * Gets as recyclingContribHeader
     *
     * @return \Pohoda\RecyclingContrib\RecyclingContribHeaderType
     */
    public function getRecyclingContribHeader()
    {
        return $this->recyclingContribHeader;
    }

    /**
     * Sets a new recyclingContribHeader
     *
     * @param \Pohoda\RecyclingContrib\RecyclingContribHeaderType $recyclingContribHeader
     * @return self
     */
    public function setRecyclingContribHeader(?\Pohoda\RecyclingContrib\RecyclingContribHeaderType $recyclingContribHeader = null)
    {
        $this->recyclingContribHeader = $recyclingContribHeader;
        return $this;
    }
}
