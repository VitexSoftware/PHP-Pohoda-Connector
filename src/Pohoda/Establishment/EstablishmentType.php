<?php

namespace Pohoda\Establishment;

/**
 * Class representing EstablishmentType
 *
 *
 * XSD Type: establishmentType
 */
class EstablishmentType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Establishment\EstablishmentHeaderType $establishmentHeader
     */
    private $establishmentHeader = null;

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
     * Gets as establishmentHeader
     *
     * @return \Pohoda\Establishment\EstablishmentHeaderType
     */
    public function getEstablishmentHeader()
    {
        return $this->establishmentHeader;
    }

    /**
     * Sets a new establishmentHeader
     *
     * @param \Pohoda\Establishment\EstablishmentHeaderType $establishmentHeader
     * @return self
     */
    public function setEstablishmentHeader(?\Pohoda\Establishment\EstablishmentHeaderType $establishmentHeader = null)
    {
        $this->establishmentHeader = $establishmentHeader;
        return $this;
    }
}
