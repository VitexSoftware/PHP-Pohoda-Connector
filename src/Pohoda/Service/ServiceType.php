<?php

namespace Pohoda\Service;

/**
 * Class representing ServiceType
 *
 *
 * XSD Type: serviceType
 */
class ServiceType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Service\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * @var \Pohoda\Service\ServiceSubjectType $serviceSubject
     */
    private $serviceSubject = null;

    /**
     * @var \Pohoda\Service\StateType[] $serviceStates
     */
    private $serviceStates = null;

    /**
     * @var \Pohoda\Service\ItemType[] $serviceItems
     */
    private $serviceItems = null;

    /**
     * @var \Pohoda\Service\ServiceSummaryType $serviceSummary
     */
    private $serviceSummary = null;

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
     * Gets as serviceHeader
     *
     * @return \Pohoda\Service\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \Pohoda\Service\ServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\Pohoda\Service\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }

    /**
     * Gets as serviceSubject
     *
     * @return \Pohoda\Service\ServiceSubjectType
     */
    public function getServiceSubject()
    {
        return $this->serviceSubject;
    }

    /**
     * Sets a new serviceSubject
     *
     * @param \Pohoda\Service\ServiceSubjectType $serviceSubject
     * @return self
     */
    public function setServiceSubject(\Pohoda\Service\ServiceSubjectType $serviceSubject)
    {
        $this->serviceSubject = $serviceSubject;
        return $this;
    }

    /**
     * Adds as state
     *
     * @return self
     * @param \Pohoda\Service\StateType $state
     */
    public function addToServiceStates(\Pohoda\Service\StateType $state)
    {
        $this->serviceStates[] = $state;
        return $this;
    }

    /**
     * isset serviceStates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceStates($index)
    {
        return isset($this->serviceStates[$index]);
    }

    /**
     * unset serviceStates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceStates($index)
    {
        unset($this->serviceStates[$index]);
    }

    /**
     * Gets as serviceStates
     *
     * @return \Pohoda\Service\StateType[]
     */
    public function getServiceStates()
    {
        return $this->serviceStates;
    }

    /**
     * Sets a new serviceStates
     *
     * @param \Pohoda\Service\StateType[] $serviceStates
     * @return self
     */
    public function setServiceStates(array $serviceStates = null)
    {
        $this->serviceStates = $serviceStates;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Pohoda\Service\ItemType $item
     */
    public function addToServiceItems(\Pohoda\Service\ItemType $item)
    {
        $this->serviceItems[] = $item;
        return $this;
    }

    /**
     * isset serviceItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceItems($index)
    {
        return isset($this->serviceItems[$index]);
    }

    /**
     * unset serviceItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceItems($index)
    {
        unset($this->serviceItems[$index]);
    }

    /**
     * Gets as serviceItems
     *
     * @return \Pohoda\Service\ItemType[]
     */
    public function getServiceItems()
    {
        return $this->serviceItems;
    }

    /**
     * Sets a new serviceItems
     *
     * @param \Pohoda\Service\ItemType[] $serviceItems
     * @return self
     */
    public function setServiceItems(array $serviceItems = null)
    {
        $this->serviceItems = $serviceItems;
        return $this;
    }

    /**
     * Gets as serviceSummary
     *
     * @return \Pohoda\Service\ServiceSummaryType
     */
    public function getServiceSummary()
    {
        return $this->serviceSummary;
    }

    /**
     * Sets a new serviceSummary
     *
     * @param \Pohoda\Service\ServiceSummaryType $serviceSummary
     * @return self
     */
    public function setServiceSummary(?\Pohoda\Service\ServiceSummaryType $serviceSummary = null)
    {
        $this->serviceSummary = $serviceSummary;
        return $this;
    }
}

