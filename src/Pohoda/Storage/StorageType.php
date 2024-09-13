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

namespace Pohoda\Storage;

/**
 * Class representing StorageType.
 *
 * XSD Type: storageType
 */
class StorageType
{
    private string $version = null;

    /**
     * @var \Pohoda\Storage\ItemStorageType[]
     */
    private array $itemStorage = [
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
     * Adds as itemStorage.
     *
     * @return self
     */
    public function addToItemStorage(\Pohoda\Storage\ItemStorageType $itemStorage)
    {
        $this->itemStorage[] = $itemStorage;

        return $this;
    }

    /**
     * isset itemStorage.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemStorage($index)
    {
        return isset($this->itemStorage[$index]);
    }

    /**
     * unset itemStorage.
     *
     * @param int|string $index
     */
    public function unsetItemStorage($index): void
    {
        unset($this->itemStorage[$index]);
    }

    /**
     * Gets as itemStorage.
     *
     * @return \Pohoda\Storage\ItemStorageType[]
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage.
     *
     * @param \Pohoda\Storage\ItemStorageType[] $itemStorage
     *
     * @return self
     */
    public function setItemStorage(array $itemStorage)
    {
        $this->itemStorage = $itemStorage;

        return $this;
    }
}
