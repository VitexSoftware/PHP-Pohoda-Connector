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
 * Class representing ListStorageType.
 *
 * XSD Type: listStorageType
 */
class ListStorageType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemStorageType[]
     */
    private array $itemStorage = [
    ];

    /**
     * Adds as itemStorage.
     *
     * @return self
     */
    public function addToItemStorage(\Pohoda\List\ItemStorageType $itemStorage)
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
     * @return \Pohoda\List\ItemStorageType[]
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage.
     *
     * @param \Pohoda\List\ItemStorageType[] $itemStorage
     *
     * @return self
     */
    public function setItemStorage(?array $itemStorage = null)
    {
        $this->itemStorage = $itemStorage;

        return $this;
    }
}
