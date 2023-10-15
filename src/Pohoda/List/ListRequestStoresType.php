<?php

namespace Pohoda\List;

/**
 * Class representing ListRequestStoresType
 *
 *
 * XSD Type: listRequestStoresType
 */
class ListRequestStoresType extends ListRequestType
{
    /**
     * @var \Pohoda\Type\RefType[] $stores
     */
    private $stores = null;

    /**
     * Adds as store
     *
     * @return self
     * @param \Pohoda\Type\RefType $store
     */
    public function addToStores(\Pohoda\Type\RefType $store)
    {
        $this->stores[] = $store;
        return $this;
    }

    /**
     * isset stores
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStores($index)
    {
        return isset($this->stores[$index]);
    }

    /**
     * unset stores
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStores($index)
    {
        unset($this->stores[$index]);
    }

    /**
     * Gets as stores
     *
     * @return \Pohoda\Type\RefType[]
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * Sets a new stores
     *
     * @param \Pohoda\Type\RefType[] $stores
     * @return self
     */
    public function setStores(array $stores = null)
    {
        $this->stores = $stores;
        return $this;
    }
}

