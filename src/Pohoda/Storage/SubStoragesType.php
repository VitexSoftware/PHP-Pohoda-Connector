<?php

namespace Pohoda\Storage;

/**
 * Class representing SubStoragesType
 *
 *
 * XSD Type: subStoragesType
 */
class SubStoragesType
{
    /**
     * @var \Pohoda\Storage\ItemStorageType $itemStorage
     */
    private $itemStorage = null;

    /**
     * Gets as itemStorage
     *
     * @return \Pohoda\Storage\ItemStorageType
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage
     *
     * @param \Pohoda\Storage\ItemStorageType $itemStorage
     * @return self
     */
    public function setItemStorage(\Pohoda\Storage\ItemStorageType $itemStorage)
    {
        $this->itemStorage = $itemStorage;
        return $this;
    }
}
