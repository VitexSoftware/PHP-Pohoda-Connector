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

namespace Pohoda\Service;

/**
 * Class representing ServiceType.
 *
 * XSD Type: serviceType
 */
class ServiceType
{
    private string $version = null;
    private \Pohoda\Service\ServiceHeaderType $serviceHeader = null;
    private \Pohoda\Service\ServiceSubjectType $serviceSubject = null;

    /**
     * @var \Pohoda\Service\StateType[]
     */
    private array $serviceStates = null;

    /**
     * @var \Pohoda\Service\ItemType[]
     */
    private array $serviceItems = null;
    private \Pohoda\Service\ServiceSummaryType $serviceSummary = null;

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
     * Gets as serviceHeader.
     *
     * @return \Pohoda\Service\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader.
     *
     * @return self
     */
    public function setServiceHeader(\Pohoda\Service\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;

        return $this;
    }

    /**
     * Gets as serviceSubject.
     *
     * @return \Pohoda\Service\ServiceSubjectType
     */
    public function getServiceSubject()
    {
        return $this->serviceSubject;
    }

    /**
     * Sets a new serviceSubject.
     *
     * @return self
     */
    public function setServiceSubject(\Pohoda\Service\ServiceSubjectType $serviceSubject)
    {
        $this->serviceSubject = $serviceSubject;

        return $this;
    }

    /**
     * Adds as state.
     *
     * @return self
     */
    public function addToServiceStates(\Pohoda\Service\StateType $state)
    {
        $this->serviceStates[] = $state;

        return $this;
    }

    /**
     * isset serviceStates.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetServiceStates($index)
    {
        return isset($this->serviceStates[$index]);
    }

    /**
     * unset serviceStates.
     *
     * @param int|string $index
     */
    public function unsetServiceStates($index): void
    {
        unset($this->serviceStates[$index]);
    }

    /**
     * Gets as serviceStates.
     *
     * @return \Pohoda\Service\StateType[]
     */
    public function getServiceStates()
    {
        return $this->serviceStates;
    }

    /**
     * Sets a new serviceStates.
     *
     * @param \Pohoda\Service\StateType[] $serviceStates
     *
     * @return self
     */
    public function setServiceStates(?array $serviceStates = null)
    {
        $this->serviceStates = $serviceStates;

        return $this;
    }

    /**
     * Adds as item.
     *
     * @return self
     */
    public function addToServiceItems(\Pohoda\Service\ItemType $item)
    {
        $this->serviceItems[] = $item;

        return $this;
    }

    /**
     * isset serviceItems.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetServiceItems($index)
    {
        return isset($this->serviceItems[$index]);
    }

    /**
     * unset serviceItems.
     *
     * @param int|string $index
     */
    public function unsetServiceItems($index): void
    {
        unset($this->serviceItems[$index]);
    }

    /**
     * Gets as serviceItems.
     *
     * @return \Pohoda\Service\ItemType[]
     */
    public function getServiceItems()
    {
        return $this->serviceItems;
    }

    /**
     * Sets a new serviceItems.
     *
     * @param \Pohoda\Service\ItemType[] $serviceItems
     *
     * @return self
     */
    public function setServiceItems(?array $serviceItems = null)
    {
        $this->serviceItems = $serviceItems;

        return $this;
    }

    /**
     * Gets as serviceSummary.
     *
     * @return \Pohoda\Service\ServiceSummaryType
     */
    public function getServiceSummary()
    {
        return $this->serviceSummary;
    }

    /**
     * Sets a new serviceSummary.
     *
     * @return self
     */
    public function setServiceSummary(?\Pohoda\Service\ServiceSummaryType $serviceSummary = null)
    {
        $this->serviceSummary = $serviceSummary;

        return $this;
    }
}
