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
 * Class representing ListSellingPriceType.
 *
 * XSD Type: listSellingPriceType
 */
class ListSellingPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemSellingPriceType[]
     */
    private array $itemSellingPrice = [
    ];

    /**
     * Adds as itemSellingPrice.
     *
     * @return self
     */
    public function addToItemSellingPrice(\Pohoda\List\ItemSellingPriceType $itemSellingPrice)
    {
        $this->itemSellingPrice[] = $itemSellingPrice;

        return $this;
    }

    /**
     * isset itemSellingPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemSellingPrice($index)
    {
        return isset($this->itemSellingPrice[$index]);
    }

    /**
     * unset itemSellingPrice.
     *
     * @param int|string $index
     */
    public function unsetItemSellingPrice($index): void
    {
        unset($this->itemSellingPrice[$index]);
    }

    /**
     * Gets as itemSellingPrice.
     *
     * @return \Pohoda\List\ItemSellingPriceType[]
     */
    public function getItemSellingPrice()
    {
        return $this->itemSellingPrice;
    }

    /**
     * Sets a new itemSellingPrice.
     *
     * @param \Pohoda\List\ItemSellingPriceType[] $itemSellingPrice
     *
     * @return self
     */
    public function setItemSellingPrice(?array $itemSellingPrice = null)
    {
        $this->itemSellingPrice = $itemSellingPrice;

        return $this;
    }
}
