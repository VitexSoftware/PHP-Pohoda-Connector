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

namespace Pohoda\InventoryLists;

/**
 * Class representing InventoryListsDetailType.
 *
 * XSD Type: inventoryListsDetailType
 */
class InventoryListsDetailType
{
    /**
     * @var \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    private array $inventoryListsItem = [
    ];

    /**
     * Adds as inventoryListsItem.
     *
     * @return self
     */
    public function addToInventoryListsItem(\Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem)
    {
        $this->inventoryListsItem[] = $inventoryListsItem;

        return $this;
    }

    /**
     * isset inventoryListsItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInventoryListsItem($index)
    {
        return isset($this->inventoryListsItem[$index]);
    }

    /**
     * unset inventoryListsItem.
     *
     * @param int|string $index
     */
    public function unsetInventoryListsItem($index): void
    {
        unset($this->inventoryListsItem[$index]);
    }

    /**
     * Gets as inventoryListsItem.
     *
     * @return \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    public function getInventoryListsItem()
    {
        return $this->inventoryListsItem;
    }

    /**
     * Sets a new inventoryListsItem.
     *
     * @param \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsItem
     *
     * @return self
     */
    public function setInventoryListsItem(array $inventoryListsItem)
    {
        $this->inventoryListsItem = $inventoryListsItem;

        return $this;
    }
}
