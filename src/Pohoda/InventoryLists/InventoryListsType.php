<?php

namespace Pohoda\InventoryLists;

/**
 * Class representing InventoryListsType
 *
 *
 * XSD Type: inventoryListsType
 */
class InventoryListsType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\InventoryLists\InventoryListsHeaderType $inventoryListsHeader
     */
    private $inventoryListsHeader = null;

    /**
     * @var \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsDetail
     */
    private $inventoryListsDetail = null;

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
     * Gets as inventoryListsHeader
     *
     * @return \Pohoda\InventoryLists\InventoryListsHeaderType
     */
    public function getInventoryListsHeader()
    {
        return $this->inventoryListsHeader;
    }

    /**
     * Sets a new inventoryListsHeader
     *
     * @param \Pohoda\InventoryLists\InventoryListsHeaderType $inventoryListsHeader
     * @return self
     */
    public function setInventoryListsHeader(?\Pohoda\InventoryLists\InventoryListsHeaderType $inventoryListsHeader = null)
    {
        $this->inventoryListsHeader = $inventoryListsHeader;
        return $this;
    }

    /**
     * Adds as inventoryListsItem
     *
     * @return self
     * @param \Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem
     */
    public function addToInventoryListsDetail(\Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem)
    {
        $this->inventoryListsDetail[] = $inventoryListsItem;
        return $this;
    }

    /**
     * isset inventoryListsDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryListsDetail($index)
    {
        return isset($this->inventoryListsDetail[$index]);
    }

    /**
     * unset inventoryListsDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryListsDetail($index)
    {
        unset($this->inventoryListsDetail[$index]);
    }

    /**
     * Gets as inventoryListsDetail
     *
     * @return \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    public function getInventoryListsDetail()
    {
        return $this->inventoryListsDetail;
    }

    /**
     * Sets a new inventoryListsDetail
     *
     * @param \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsDetail
     * @return self
     */
    public function setInventoryListsDetail(array $inventoryListsDetail = null)
    {
        $this->inventoryListsDetail = $inventoryListsDetail;
        return $this;
    }
}
