<?php

namespace Pohoda\List;

/**
 * Class representing ListAccountancyRequestType
 *
 *
 * XSD Type: listAccountancyRequestType
 */
class ListAccountancyRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze výdejky.
     *
     * @var string $accountancyVersion
     */
    private $accountancyVersion = null;

    /**
     * @var \Pohoda\Filter\RequestAccountancyType $requestAccountancy
     */
    private $requestAccountancy = null;

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
     * Gets as accountancyVersion
     *
     * Požadovaná verze výdejky.
     *
     * @return string
     */
    public function getAccountancyVersion()
    {
        return $this->accountancyVersion;
    }

    /**
     * Sets a new accountancyVersion
     *
     * Požadovaná verze výdejky.
     *
     * @param string $accountancyVersion
     * @return self
     */
    public function setAccountancyVersion($accountancyVersion)
    {
        $this->accountancyVersion = $accountancyVersion;
        return $this;
    }

    /**
     * Gets as requestAccountancy
     *
     * @return \Pohoda\Filter\RequestAccountancyType
     */
    public function getRequestAccountancy()
    {
        return $this->requestAccountancy;
    }

    /**
     * Sets a new requestAccountancy
     *
     * @param \Pohoda\Filter\RequestAccountancyType $requestAccountancy
     * @return self
     */
    public function setRequestAccountancy(?\Pohoda\Filter\RequestAccountancyType $requestAccountancy = null)
    {
        $this->requestAccountancy = $requestAccountancy;
        return $this;
    }
}
