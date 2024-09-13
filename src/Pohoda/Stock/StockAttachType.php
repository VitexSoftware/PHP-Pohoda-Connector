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

namespace Pohoda\Stock;

/**
 * Class representing StockAttachType.
 *
 * XSD Type: stockAttachType
 */
class StockAttachType
{
    /**
     * @var \Pohoda\Stock\AttachItemType[]
     */
    private array $attachItem = [
    ];

    /**
     * Adds as attachItem.
     *
     * @return self
     */
    public function addToAttachItem(\Pohoda\Stock\AttachItemType $attachItem)
    {
        $this->attachItem[] = $attachItem;

        return $this;
    }

    /**
     * isset attachItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAttachItem($index)
    {
        return isset($this->attachItem[$index]);
    }

    /**
     * unset attachItem.
     *
     * @param int|string $index
     */
    public function unsetAttachItem($index): void
    {
        unset($this->attachItem[$index]);
    }

    /**
     * Gets as attachItem.
     *
     * @return \Pohoda\Stock\AttachItemType[]
     */
    public function getAttachItem()
    {
        return $this->attachItem;
    }

    /**
     * Sets a new attachItem.
     *
     * @param \Pohoda\Stock\AttachItemType[] $attachItem
     *
     * @return self
     */
    public function setAttachItem(array $attachItem)
    {
        $this->attachItem = $attachItem;

        return $this;
    }
}
