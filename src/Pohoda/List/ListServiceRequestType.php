<?php

namespace Pohoda\List;

/**
 * Class representing ListServiceRequestType
 *
 *
 * XSD Type: listServiceRequestType
 */
class ListServiceRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $serviceVersion
     */
    private $serviceVersion = null;

    /**
     * @var \Pohoda\Filter\RequestServiceType[] $requestService
     */
    private $requestService = [
        
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
     * Gets as serviceVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getServiceVersion()
    {
        return $this->serviceVersion;
    }

    /**
     * Sets a new serviceVersion
     *
     * Požadovaná verze.
     *
     * @param string $serviceVersion
     * @return self
     */
    public function setServiceVersion($serviceVersion)
    {
        $this->serviceVersion = $serviceVersion;
        return $this;
    }

    /**
     * Adds as requestService
     *
     * @return self
     * @param \Pohoda\Filter\RequestServiceType $requestService
     */
    public function addToRequestService(\Pohoda\Filter\RequestServiceType $requestService)
    {
        $this->requestService[] = $requestService;
        return $this;
    }

    /**
     * isset requestService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestService($index)
    {
        return isset($this->requestService[$index]);
    }

    /**
     * unset requestService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestService($index)
    {
        unset($this->requestService[$index]);
    }

    /**
     * Gets as requestService
     *
     * @return \Pohoda\Filter\RequestServiceType[]
     */
    public function getRequestService()
    {
        return $this->requestService;
    }

    /**
     * Sets a new requestService
     *
     * @param \Pohoda\Filter\RequestServiceType[] $requestService
     * @return self
     */
    public function setRequestService(array $requestService)
    {
        $this->requestService = $requestService;
        return $this;
    }
}

