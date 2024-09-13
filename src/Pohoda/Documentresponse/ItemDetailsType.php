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

namespace Pohoda\Documentresponse;

/**
 * Class representing ItemDetailsType.
 *
 * XSD Type: itemDetailsType
 */
class ItemDetailsType
{
    private string $type = null;

    /**
     * @var \Pohoda\Documentresponse\ItemType[]
     */
    private array $item = [
    ];

    /**
     * Gets as type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Adds as item.
     *
     * @return self
     */
    public function addToItem(\Pohoda\Documentresponse\ItemType $item)
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
     * @return \Pohoda\Documentresponse\ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item.
     *
     * @param \Pohoda\Documentresponse\ItemType[] $item
     *
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }
}
