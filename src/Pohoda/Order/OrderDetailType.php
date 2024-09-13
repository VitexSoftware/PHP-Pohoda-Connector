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

namespace Pohoda\Order;

/**
 * Class representing OrderDetailType.
 *
 * XSD Type: orderDetailType
 */
class OrderDetailType
{
    /**
     * @var \Pohoda\Order\OrderItemType[]
     */
    private array $orderItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private \Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as orderItem.
     *
     * @return self
     */
    public function addToOrderItem(\Pohoda\Order\OrderItemType $orderItem)
    {
        $this->orderItem[] = $orderItem;

        return $this;
    }

    /**
     * isset orderItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrderItem($index)
    {
        return isset($this->orderItem[$index]);
    }

    /**
     * unset orderItem.
     *
     * @param int|string $index
     */
    public function unsetOrderItem($index): void
    {
        unset($this->orderItem[$index]);
    }

    /**
     * Gets as orderItem.
     *
     * @return \Pohoda\Order\OrderItemType[]
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * Sets a new orderItem.
     *
     * @param \Pohoda\Order\OrderItemType[] $orderItem
     *
     * @return self
     */
    public function setOrderItem(array $orderItem)
    {
        $this->orderItem = $orderItem;

        return $this;
    }

    /**
     * Gets as roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return self
     */
    public function setRoundingItem(?\Pohoda\Type\RoundingItemType $roundingItem = null)
    {
        $this->roundingItem = $roundingItem;

        return $this;
    }
}
