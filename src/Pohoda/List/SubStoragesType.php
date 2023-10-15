<?php

namespace Pohoda\List;

/**
 * Class representing SubStoragesType
 *
 *
 * XSD Type: subStoragesType
 */
class SubStoragesType
{
    /**
     * @var \Pohoda\List\ItemStorageType[] $itemStorage
     */
    private $itemStorage = [

    ];

    /**
     * Adds as itemStorage
     *
     * @return self
     * @param \Pohoda\List\ItemStorageType $itemStorage
     */
    public function addToItemStorage(\Pohoda\List\ItemStorageType $itemStorage)
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
     * @return \Pohoda\List\ItemStorageType[]
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage
     *
     * @param \Pohoda\List\ItemStorageType[] $itemStorage
     * @return self
     */
    public function setItemStorage(array $itemStorage)
    {
        $this->itemStorage = $itemStorage;
        return $this;
    }
}
