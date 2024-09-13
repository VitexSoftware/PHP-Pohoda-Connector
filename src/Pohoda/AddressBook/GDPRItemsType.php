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

namespace Pohoda\AddressBook;

/**
 * Class representing GDPRItemsType.
 *
 * XSD Type: GDPRItemsType
 */
class GDPRItemsType
{
    /**
     * @var \Pohoda\AddressBook\GDPRItemType[]
     */
    private array $gDPRItem = [
    ];

    /**
     * Adds as gDPRItem.
     *
     * @return self
     */
    public function addToGDPRItem(\Pohoda\AddressBook\GDPRItemType $gDPRItem)
    {
        $this->gDPRItem[] = $gDPRItem;

        return $this;
    }

    /**
     * isset gDPRItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPRItem($index)
    {
        return isset($this->gDPRItem[$index]);
    }

    /**
     * unset gDPRItem.
     *
     * @param int|string $index
     */
    public function unsetGDPRItem($index): void
    {
        unset($this->gDPRItem[$index]);
    }

    /**
     * Gets as gDPRItem.
     *
     * @return \Pohoda\AddressBook\GDPRItemType[]
     */
    public function getGDPRItem()
    {
        return $this->gDPRItem;
    }

    /**
     * Sets a new gDPRItem.
     *
     * @param \Pohoda\AddressBook\GDPRItemType[] $gDPRItem
     *
     * @return self
     */
    public function setGDPRItem(array $gDPRItem)
    {
        $this->gDPRItem = $gDPRItem;

        return $this;
    }
}
