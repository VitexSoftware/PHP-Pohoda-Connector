<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListInventoryListsType
 *
 *
 * XSD Type: listInventoryListsType
 */
class ListInventoryListsType extends ListVersionType
{
    /**
     * @var \Pohoda\InventoryLists\InventoryListsType[] $inventoryLists
     */
    private $inventoryLists = [

    ];

    /**
     * Adds as inventoryLists
     *
     * @return self
     * @param \Pohoda\InventoryLists\InventoryListsType $inventoryLists
     */
    public function addToInventoryLists(\Pohoda\InventoryLists\InventoryListsType $inventoryLists)
    {
        $this->inventoryLists[] = $inventoryLists;
        return $this;
    }

    /**
     * isset inventoryLists
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryLists($index)
    {
        return isset($this->inventoryLists[$index]);
    }

    /**
     * unset inventoryLists
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryLists($index)
    {
        unset($this->inventoryLists[$index]);
    }

    /**
     * Gets as inventoryLists
     *
     * @return \Pohoda\InventoryLists\InventoryListsType[]
     */
    public function getInventoryLists()
    {
        return $this->inventoryLists;
    }

    /**
     * Sets a new inventoryLists
     *
     * @param \Pohoda\InventoryLists\InventoryListsType[] $inventoryLists
     * @return self
     */
    public function setInventoryLists(array $inventoryLists = null)
    {
        $this->inventoryLists = $inventoryLists;
        return $this;
    }
}
