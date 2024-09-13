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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListStoreType.
 *
 * XSD Type: listStoreType
 */
class ListStoreType extends ListVersionType
{
    /**
     * @var \Pohoda\Store\StoreType[]
     */
    private array $store = [
    ];

    /**
     * Adds as store.
     *
     * @return self
     */
    public function addToStore(\Pohoda\Store\StoreType $store)
    {
        $this->store[] = $store;

        return $this;
    }

    /**
     * isset store.
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
     * @param int|string $index
     */
    public function unsetStore($index): void
    {
        unset($this->store[$index]);
    }

    /**
     * Gets as store.
     *
     * @return \Pohoda\Store\StoreType[]
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store.
     *
     * @param \Pohoda\Store\StoreType[] $store
     *
     * @return self
     */
    public function setStore(?array $store = null)
    {
        $this->store = $store;

        return $this;
    }
}
