<?php

namespace Pohoda\List\ListRequestStoresType;

/**
 * Class representing StoresAType
 */
class StoresAType
{
    /**
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @var \Pohoda\Type\RefType[] $store
     */
    private $store = [
    ];

    /**
     * Adds as store
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @return self
     * @param \Pohoda\Type\RefType $store
     */
    public function addToStore(\Pohoda\Type\RefType $store)
    {
        $this->store[] = $store;
        return $this;
    }

    /**
     * isset store
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
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
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
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
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @return \Pohoda\Type\RefType[]
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @param \Pohoda\Type\RefType[] $store
     * @return self
     */
    public function setStore(array $store)
    {
        $this->store = $store;
        return $this;
    }
}
