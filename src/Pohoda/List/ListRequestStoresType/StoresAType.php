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

namespace Pohoda\List\ListRequestStoresType;

/**
 * Class representing StoresAType.
 */
class StoresAType
{
    /**
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @var \Pohoda\Type\RefType[]
     */
    private array $store = [
    ];

    /**
     * Adds as store.
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @return self
     */
    public function addToStore(\Pohoda\Type\RefType $store)
    {
        $this->store[] = $store;

        return $this;
    }

    /**
     * isset store.
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStore($index)
    {
        return isset($this->store[$index]);
    }

    /**
     * unset store.
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @param int|string $index
     */
    public function unsetStore($index): void
    {
        unset($this->store[$index]);
    }

    /**
     * Gets as store.
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
     * Sets a new store.
     *
     * Výčet skladů, pro které se vyexportují data. Pokud není uveden, vyexportují se všechny data.
     *
     * @param \Pohoda\Type\RefType[] $store
     *
     * @return self
     */
    public function setStore(array $store)
    {
        $this->store = $store;

        return $this;
    }
}
