<?php

namespace Pohoda\Storage;

/**
 * Class representing StorageType
 *
 *
 * XSD Type: storageType
 */
class StorageType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Storage\ItemStorageType[] $itemStorage
     */
    private $itemStorage = [
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
     * Adds as itemStorage
     *
     * @return self
     * @param \Pohoda\Storage\ItemStorageType $itemStorage
     */
    public function addToItemStorage(\Pohoda\Storage\ItemStorageType $itemStorage)
    {
        $this->itemStorage[] = $itemStorage;
        return $this;
    }

    /**
     * isset itemStorage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemStorage($index)
    {
        return isset($this->itemStorage[$index]);
    }

    /**
     * unset itemStorage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemStorage($index)
    {
        unset($this->itemStorage[$index]);
    }

    /**
     * Gets as itemStorage
     *
     * @return \Pohoda\Storage\ItemStorageType[]
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage
     *
     * @param \Pohoda\Storage\ItemStorageType[] $itemStorage
     * @return self
     */
    public function setItemStorage(array $itemStorage)
    {
        $this->itemStorage = $itemStorage;
        return $this;
    }
}
