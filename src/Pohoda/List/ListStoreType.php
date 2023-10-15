<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListStoreType
 *
 *
 * XSD Type: listStoreType
 */
class ListStoreType extends ListVersionType
{
    /**
     * @var \Pohoda\Store\StoreType[] $store
     */
    private $store = [
        
    ];

    /**
     * Adds as store
     *
     * @return self
     * @param \Pohoda\Store\StoreType $store
     */
    public function addToStore(\Pohoda\Store\StoreType $store)
    {
        $this->store[] = $store;
        return $this;
    }

    /**
     * isset store
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStore($index)
    {
        return isset($this->store[$index]);
    }

    /**
     * unset store
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStore($index)
    {
        unset($this->store[$index]);
    }

    /**
     * Gets as store
     *
     * @return \Pohoda\Store\StoreType[]
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * @param \Pohoda\Store\StoreType[] $store
     * @return self
     */
    public function setStore(array $store = null)
    {
        $this->store = $store;
        return $this;
    }
}

