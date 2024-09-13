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
 * Class representing ListCashType.
 *
 * XSD Type: listCashType
 */
class ListCashType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemCashType[]
     */
    private array $itemCash = [
    ];

    /**
     * Adds as itemCash.
     *
     * @return self
     */
    public function addToItemCash(\Pohoda\List\ItemCashType $itemCash)
    {
        $this->itemCash[] = $itemCash;

        return $this;
    }

    /**
     * isset itemCash.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemCash($index)
    {
        return isset($this->itemCash[$index]);
    }

    /**
     * unset itemCash.
     *
     * @param int|string $index
     */
    public function unsetItemCash($index): void
    {
        unset($this->itemCash[$index]);
    }

    /**
     * Gets as itemCash.
     *
     * @return \Pohoda\List\ItemCashType[]
     */
    public function getItemCash()
    {
        return $this->itemCash;
    }

    /**
     * Sets a new itemCash.
     *
     * @param \Pohoda\List\ItemCashType[] $itemCash
     *
     * @return self
     */
    public function setItemCash(?array $itemCash = null)
    {
        $this->itemCash = $itemCash;

        return $this;
    }
}
