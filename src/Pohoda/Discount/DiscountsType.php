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

namespace Pohoda\Discount;

/**
 * Class representing DiscountsType.
 *
 * XSD Type: discountsType
 */
class DiscountsType
{
    /**
     * @var \Pohoda\Discount\DiscountsItemType[]
     */
    private array $discountsItem = [
    ];

    /**
     * Adds as discountsItem.
     *
     * @return self
     */
    public function addToDiscountsItem(\Pohoda\Discount\DiscountsItemType $discountsItem)
    {
        $this->discountsItem[] = $discountsItem;

        return $this;
    }

    /**
     * isset discountsItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDiscountsItem($index)
    {
        return isset($this->discountsItem[$index]);
    }

    /**
     * unset discountsItem.
     *
     * @param int|string $index
     */
    public function unsetDiscountsItem($index): void
    {
        unset($this->discountsItem[$index]);
    }

    /**
     * Gets as discountsItem.
     *
     * @return \Pohoda\Discount\DiscountsItemType[]
     */
    public function getDiscountsItem()
    {
        return $this->discountsItem;
    }

    /**
     * Sets a new discountsItem.
     *
     * @param \Pohoda\Discount\DiscountsItemType[] $discountsItem
     *
     * @return self
     */
    public function setDiscountsItem(array $discountsItem)
    {
        $this->discountsItem = $discountsItem;

        return $this;
    }
}
