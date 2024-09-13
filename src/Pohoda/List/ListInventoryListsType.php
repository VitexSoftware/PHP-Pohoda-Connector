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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListInventoryListsType.
 *
 * XSD Type: listInventoryListsType
 */
class ListInventoryListsType extends ListVersionType
{
    /**
     * @var \Pohoda\InventoryLists\InventoryListsType[]
     */
    private array $inventoryLists = [
    ];

    /**
     * Adds as inventoryLists.
     *
     * @return self
     */
    public function addToInventoryLists(\Pohoda\InventoryLists\InventoryListsType $inventoryLists)
    {
        $this->inventoryLists[] = $inventoryLists;

        return $this;
    }

    /**
     * isset inventoryLists.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInventoryLists($index)
    {
        return isset($this->inventoryLists[$index]);
    }

    /**
     * unset inventoryLists.
     *
     * @param int|string $index
     */
    public function unsetInventoryLists($index): void
    {
        unset($this->inventoryLists[$index]);
    }

    /**
     * Gets as inventoryLists.
     *
     * @return \Pohoda\InventoryLists\InventoryListsType[]
     */
    public function getInventoryLists()
    {
        return $this->inventoryLists;
    }

    /**
     * Sets a new inventoryLists.
     *
     * @param \Pohoda\InventoryLists\InventoryListsType[] $inventoryLists
     *
     * @return self
     */
    public function setInventoryLists(?array $inventoryLists = null)
    {
        $this->inventoryLists = $inventoryLists;

        return $this;
    }
}
