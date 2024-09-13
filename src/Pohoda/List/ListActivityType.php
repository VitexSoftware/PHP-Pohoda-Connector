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
 * Class representing ListActivityType.
 *
 * XSD Type: listActivityType
 */
class ListActivityType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNameType[]
     */
    private array $itemActivity = [
    ];

    /**
     * Adds as itemActivity.
     *
     * @return self
     */
    public function addToItemActivity(\Pohoda\List\ItemNameType $itemActivity)
    {
        $this->itemActivity[] = $itemActivity;

        return $this;
    }

    /**
     * isset itemActivity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemActivity($index)
    {
        return isset($this->itemActivity[$index]);
    }

    /**
     * unset itemActivity.
     *
     * @param int|string $index
     */
    public function unsetItemActivity($index): void
    {
        unset($this->itemActivity[$index]);
    }

    /**
     * Gets as itemActivity.
     *
     * @return \Pohoda\List\ItemNameType[]
     */
    public function getItemActivity()
    {
        return $this->itemActivity;
    }

    /**
     * Sets a new itemActivity.
     *
     * @param \Pohoda\List\ItemNameType[] $itemActivity
     *
     * @return self
     */
    public function setItemActivity(?array $itemActivity = null)
    {
        $this->itemActivity = $itemActivity;

        return $this;
    }
}
