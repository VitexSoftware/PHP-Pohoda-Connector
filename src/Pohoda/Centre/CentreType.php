<?php

namespace Pohoda\Centre;

/**
 * Class representing CentreType
 *
 *
 * XSD Type: centreType
 */
class CentreType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Centre\CentreHeaderType $centreHeader
     */
    private $centreHeader = null;

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
     * Gets as centreHeader
     *
     * @return \Pohoda\Centre\CentreHeaderType
     */
    public function getCentreHeader()
    {
        return $this->centreHeader;
    }

    /**
     * Sets a new centreHeader
     *
     * @param \Pohoda\Centre\CentreHeaderType $centreHeader
     * @return self
     */
    public function setCentreHeader(?\Pohoda\Centre\CentreHeaderType $centreHeader = null)
    {
        $this->centreHeader = $centreHeader;
        return $this;
    }
}
