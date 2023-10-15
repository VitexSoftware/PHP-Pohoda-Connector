<?php

namespace Pohoda\List;

/**
 * Class representing ListInventoryListsRequestType
 *
 *
 * XSD Type: listInventoryListsRequestType
 */
class ListInventoryListsRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $inventoryListsVersion
     */
    private $inventoryListsVersion = null;

    /**
     * @var \Pohoda\Filter\RequestInventoryListsType[] $requestInventoryLists
     */
    private $requestInventoryLists = [

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
     * Gets as inventoryListsVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getInventoryListsVersion()
    {
        return $this->inventoryListsVersion;
    }

    /**
     * Sets a new inventoryListsVersion
     *
     * Požadovaná verze.
     *
     * @param string $inventoryListsVersion
     * @return self
     */
    public function setInventoryListsVersion($inventoryListsVersion)
    {
        $this->inventoryListsVersion = $inventoryListsVersion;
        return $this;
    }

    /**
     * Adds as requestInventoryLists
     *
     * @return self
     * @param \Pohoda\Filter\RequestInventoryListsType $requestInventoryLists
     */
    public function addToRequestInventoryLists(\Pohoda\Filter\RequestInventoryListsType $requestInventoryLists)
    {
        $this->requestInventoryLists[] = $requestInventoryLists;
        return $this;
    }

    /**
     * isset requestInventoryLists
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestInventoryLists($index)
    {
        return isset($this->requestInventoryLists[$index]);
    }

    /**
     * unset requestInventoryLists
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestInventoryLists($index)
    {
        unset($this->requestInventoryLists[$index]);
    }

    /**
     * Gets as requestInventoryLists
     *
     * @return \Pohoda\Filter\RequestInventoryListsType[]
     */
    public function getRequestInventoryLists()
    {
        return $this->requestInventoryLists;
    }

    /**
     * Sets a new requestInventoryLists
     *
     * @param \Pohoda\Filter\RequestInventoryListsType[] $requestInventoryLists
     * @return self
     */
    public function setRequestInventoryLists(array $requestInventoryLists)
    {
        $this->requestInventoryLists = $requestInventoryLists;
        return $this;
    }
}
