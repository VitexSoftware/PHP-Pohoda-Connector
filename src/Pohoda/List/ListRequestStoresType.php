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
 * Class representing ListRequestStoresType.
 *
 * XSD Type: listRequestStoresType
 */
class ListRequestStoresType extends ListRequestType
{
    /**
     * @var \Pohoda\Type\RefType[]
     */
    private ?array $stores = null;

    /**
     * Adds as store.
     *
     * @return self
     */
    public function addToStores(\Pohoda\Type\RefType $store)
    {
        $this->stores[] = $store;

        return $this;
    }

    /**
     * isset stores.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStores($index)
    {
        return isset($this->stores[$index]);
    }

    /**
     * unset stores.
     *
     * @param int|string $index
     */
    public function unsetStores($index): void
    {
        unset($this->stores[$index]);
    }

    /**
     * Gets as stores.
     *
     * @return \Pohoda\Type\RefType[]
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * Sets a new stores.
     *
     * @param \Pohoda\Type\RefType[] $stores
     *
     * @return self
     */
    public function setStores(?array $stores = null)
    {
        $this->stores = $stores;

        return $this;
    }
}
