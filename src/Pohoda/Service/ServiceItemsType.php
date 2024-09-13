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

namespace Pohoda\Service;

/**
 * Class representing ServiceItemsType.
 *
 * XSD Type: serviceItemsType
 */
class ServiceItemsType
{
    /**
     * @var \Pohoda\Service\ItemType[]
     */
    private array $item = [
    ];

    /**
     * Adds as item.
     *
     * @return self
     */
    public function addToItem(\Pohoda\Service\ItemType $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * isset item.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item.
     *
     * @param int|string $index
     */
    public function unsetItem($index): void
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item.
     *
     * @return \Pohoda\Service\ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item.
     *
     * @param \Pohoda\Service\ItemType[] $item
     *
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }
}
