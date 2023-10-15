<?php

namespace Pohoda\List;

/**
 * Class representing ListEstablishmentRequestType
 *
 *
 * XSD Type: listEstablishmentRequestType
 */
class ListEstablishmentRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $establishmentVersion
     */
    private $establishmentVersion = null;

    /**
     * @var \Pohoda\List\RequestEstablishmentType[] $requestEstablishment
     */
    private $requestEstablishment = [

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
     * Gets as establishmentVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getEstablishmentVersion()
    {
        return $this->establishmentVersion;
    }

    /**
     * Sets a new establishmentVersion
     *
     * Požadovaná verze.
     *
     * @param string $establishmentVersion
     * @return self
     */
    public function setEstablishmentVersion($establishmentVersion)
    {
        $this->establishmentVersion = $establishmentVersion;
        return $this;
    }

    /**
     * Adds as requestEstablishment
     *
     * @return self
     * @param \Pohoda\List\RequestEstablishmentType $requestEstablishment
     */
    public function addToRequestEstablishment(\Pohoda\List\RequestEstablishmentType $requestEstablishment)
    {
        $this->requestEstablishment[] = $requestEstablishment;
        return $this;
    }

    /**
     * isset requestEstablishment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestEstablishment($index)
    {
        return isset($this->requestEstablishment[$index]);
    }

    /**
     * unset requestEstablishment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestEstablishment($index)
    {
        unset($this->requestEstablishment[$index]);
    }

    /**
     * Gets as requestEstablishment
     *
     * @return \Pohoda\List\RequestEstablishmentType[]
     */
    public function getRequestEstablishment()
    {
        return $this->requestEstablishment;
    }

    /**
     * Sets a new requestEstablishment
     *
     * @param \Pohoda\List\RequestEstablishmentType[] $requestEstablishment
     * @return self
     */
    public function setRequestEstablishment(array $requestEstablishment)
    {
        $this->requestEstablishment = $requestEstablishment;
        return $this;
    }
}
