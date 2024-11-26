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

namespace Pohoda\List;

/**
 * Class representing ListServiceRequestType.
 *
 * XSD Type: listServiceRequestType
 */
class ListServiceRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $serviceVersion = null;

    /**
     * @var \Pohoda\Filter\RequestServiceType[]
     */
    private array $requestService = [
    ];

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
     * Gets as serviceVersion.
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
     * Sets a new serviceVersion.
     *
     * Požadovaná verze.
     *
     * @param string $serviceVersion
     *
     * @return self
     */
    public function setServiceVersion($serviceVersion)
    {
        $this->serviceVersion = $serviceVersion;

        return $this;
    }

    /**
     * Adds as requestService.
     *
     * @return self
     */
    public function addToRequestService(\Pohoda\Filter\RequestServiceType $requestService)
    {
        $this->requestService[] = $requestService;

        return $this;
    }

    /**
     * isset requestService.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestService($index)
    {
        return isset($this->requestService[$index]);
    }

    /**
     * unset requestService.
     *
     * @param int|string $index
     */
    public function unsetRequestService($index): void
    {
        unset($this->requestService[$index]);
    }

    /**
     * Gets as requestService.
     *
     * @return \Pohoda\Filter\RequestServiceType[]
     */
    public function getRequestService()
    {
        return $this->requestService;
    }

    /**
     * Sets a new requestService.
     *
     * @param \Pohoda\Filter\RequestServiceType[] $requestService
     *
     * @return self
     */
    public function setRequestService(array $requestService)
    {
        $this->requestService = $requestService;

        return $this;
    }
}
