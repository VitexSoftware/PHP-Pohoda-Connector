<?php

namespace Pohoda\InventoryLists;

/**
 * Class representing InventoryListsDetailType
 *
 *
 * XSD Type: inventoryListsDetailType
 */
class InventoryListsDetailType
{
    /**
     * @var \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsItem
     */
    private $inventoryListsItem = [

    ];

    /**
     * Adds as inventoryListsItem
     *
     * @return self
     * @param \Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem
     */
    public function addToInventoryListsItem(\Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem)
    {
        $this->inventoryListsItem[] = $inventoryListsItem;
        return $this;
    }

    /**
     * isset inventoryListsItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryListsItem($index)
    {
        return isset($this->inventoryListsItem[$index]);
    }

    /**
     * unset inventoryListsItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryListsItem($index)
    {
        unset($this->inventoryListsItem[$index]);
    }

    /**
     * Gets as inventoryListsItem
     *
     * @return \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    public function getInventoryListsItem()
    {
        return $this->inventoryListsItem;
    }

    /**
     * Sets a new inventoryListsItem
     *
     * @param \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsItem
     * @return self
     */
    public function setInventoryListsItem(array $inventoryListsItem)
    {
        $this->inventoryListsItem = $inventoryListsItem;
        return $this;
    }
}
