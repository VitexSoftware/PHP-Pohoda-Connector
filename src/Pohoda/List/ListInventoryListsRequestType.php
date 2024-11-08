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

/**
 * Class representing ListInventoryListsRequestType.
 *
 * XSD Type: listInventoryListsRequestType
 */
class ListInventoryListsRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $inventoryListsVersion = null;

    /**
     * @var \Pohoda\Filter\RequestInventoryListsType[]
     */
    private array $requestInventoryLists = [
    ];

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
     * Gets as inventoryListsVersion.
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
     * Sets a new inventoryListsVersion.
     *
     * Požadovaná verze.
     *
     * @param string $inventoryListsVersion
     *
     * @return self
     */
    public function setInventoryListsVersion($inventoryListsVersion)
    {
        $this->inventoryListsVersion = $inventoryListsVersion;

        return $this;
    }

    /**
     * Adds as requestInventoryLists.
     *
     * @return self
     */
    public function addToRequestInventoryLists(\Pohoda\Filter\RequestInventoryListsType $requestInventoryLists)
    {
        $this->requestInventoryLists[] = $requestInventoryLists;

        return $this;
    }

    /**
     * isset requestInventoryLists.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestInventoryLists($index)
    {
        return isset($this->requestInventoryLists[$index]);
    }

    /**
     * unset requestInventoryLists.
     *
     * @param int|string $index
     */
    public function unsetRequestInventoryLists($index): void
    {
        unset($this->requestInventoryLists[$index]);
    }

    /**
     * Gets as requestInventoryLists.
     *
     * @return \Pohoda\Filter\RequestInventoryListsType[]
     */
    public function getRequestInventoryLists()
    {
        return $this->requestInventoryLists;
    }

    /**
     * Sets a new requestInventoryLists.
     *
     * @param \Pohoda\Filter\RequestInventoryListsType[] $requestInventoryLists
     *
     * @return self
     */
    public function setRequestInventoryLists(array $requestInventoryLists)
    {
        $this->requestInventoryLists = $requestInventoryLists;

        return $this;
    }
}
