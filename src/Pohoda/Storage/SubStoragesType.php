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

namespace Pohoda\Storage;

/**
 * Class representing SubStoragesType.
 *
 * XSD Type: subStoragesType
 */
class SubStoragesType
{
    private \Pohoda\Storage\ItemStorageType $itemStorage = null;

    /**
     * Gets as itemStorage.
     *
     * @return \Pohoda\Storage\ItemStorageType
     */
    public function getItemStorage()
    {
        return $this->itemStorage;
    }

    /**
     * Sets a new itemStorage.
     *
     * @return self
     */
    public function setItemStorage(\Pohoda\Storage\ItemStorageType $itemStorage)
    {
        $this->itemStorage = $itemStorage;

        return $this;
    }
}
