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
 * Class representing InventoryListsType.
 *
 * XSD Type: inventoryListsType
 */
class InventoryListsType
{
    private string $version = null;
    private \Pohoda\InventoryLists\InventoryListsHeaderType $inventoryListsHeader = null;

    /**
     * @var \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    private array $inventoryListsDetail = null;

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
     * Gets as inventoryListsHeader.
     *
     * @return \Pohoda\InventoryLists\InventoryListsHeaderType
     */
    public function getInventoryListsHeader()
    {
        return $this->inventoryListsHeader;
    }

    /**
     * Sets a new inventoryListsHeader.
     *
     * @return self
     */
    public function setInventoryListsHeader(?\Pohoda\InventoryLists\InventoryListsHeaderType $inventoryListsHeader = null)
    {
        $this->inventoryListsHeader = $inventoryListsHeader;

        return $this;
    }

    /**
     * Adds as inventoryListsItem.
     *
     * @return self
     */
    public function addToInventoryListsDetail(\Pohoda\InventoryLists\InventoryListsItemType $inventoryListsItem)
    {
        $this->inventoryListsDetail[] = $inventoryListsItem;

        return $this;
    }

    /**
     * isset inventoryListsDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInventoryListsDetail($index)
    {
        return isset($this->inventoryListsDetail[$index]);
    }

    /**
     * unset inventoryListsDetail.
     *
     * @param int|string $index
     */
    public function unsetInventoryListsDetail($index): void
    {
        unset($this->inventoryListsDetail[$index]);
    }

    /**
     * Gets as inventoryListsDetail.
     *
     * @return \Pohoda\InventoryLists\InventoryListsItemType[]
     */
    public function getInventoryListsDetail()
    {
        return $this->inventoryListsDetail;
    }

    /**
     * Sets a new inventoryListsDetail.
     *
     * @param \Pohoda\InventoryLists\InventoryListsItemType[] $inventoryListsDetail
     *
     * @return self
     */
    public function setInventoryListsDetail(?array $inventoryListsDetail = null)
    {
        $this->inventoryListsDetail = $inventoryListsDetail;

        return $this;
    }
}
