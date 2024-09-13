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

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaDetailType.
 *
 * XSD Type: vyrobaDetailType
 */
class VyrobaDetailType
{
    /**
     * @var \Pohoda\Vyroba\VyrobaItemType[]
     */
    private array $vyrobaItem = [
    ];

    /**
     * Adds as vyrobaItem.
     *
     * @return self
     */
    public function addToVyrobaItem(\Pohoda\Vyroba\VyrobaItemType $vyrobaItem)
    {
        $this->vyrobaItem[] = $vyrobaItem;

        return $this;
    }

    /**
     * isset vyrobaItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVyrobaItem($index)
    {
        return isset($this->vyrobaItem[$index]);
    }

    /**
     * unset vyrobaItem.
     *
     * @param int|string $index
     */
    public function unsetVyrobaItem($index): void
    {
        unset($this->vyrobaItem[$index]);
    }

    /**
     * Gets as vyrobaItem.
     *
     * @return \Pohoda\Vyroba\VyrobaItemType[]
     */
    public function getVyrobaItem()
    {
        return $this->vyrobaItem;
    }

    /**
     * Sets a new vyrobaItem.
     *
     * @param \Pohoda\Vyroba\VyrobaItemType[] $vyrobaItem
     *
     * @return self
     */
    public function setVyrobaItem(array $vyrobaItem)
    {
        $this->vyrobaItem = $vyrobaItem;

        return $this;
    }
}
