<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListServiceType
 *
 *
 * XSD Type: listServiceType
 */
class ListServiceType extends ListVersionType
{
    /**
     * @var \Pohoda\Service\ServiceType[] $service
     */
    private $service = [
        
    ];

    /**
     * Adds as service
     *
     * @return self
     * @param \Pohoda\Service\ServiceType $service
     */
    public function addToService(\Pohoda\Service\ServiceType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * @return \Pohoda\Service\ServiceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Pohoda\Service\ServiceType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }
}

