<?php

namespace Pohoda\Order;

/**
 * Class representing OrderDetailType
 *
 *
 * XSD Type: orderDetailType
 */
class OrderDetailType
{
    /**
     * @var \Pohoda\Order\OrderItemType[] $orderItem
     */
    private $orderItem = [
        
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as orderItem
     *
     * @return self
     * @param \Pohoda\Order\OrderItemType $orderItem
     */
    public function addToOrderItem(\Pohoda\Order\OrderItemType $orderItem)
    {
        $this->orderItem[] = $orderItem;
        return $this;
    }

    /**
     * isset orderItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItem($index)
    {
        return isset($this->orderItem[$index]);
    }

    /**
     * unset orderItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItem($index)
    {
        unset($this->orderItem[$index]);
    }

    /**
     * Gets as orderItem
     *
     * @return \Pohoda\Order\OrderItemType[]
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * Sets a new orderItem
     *
     * @param \Pohoda\Order\OrderItemType[] $orderItem
     * @return self
     */
    public function setOrderItem(array $orderItem)
    {
        $this->orderItem = $orderItem;
        return $this;
    }

    /**
     * Gets as roundingItem
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
     * Sets a new roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param \Pohoda\Type\RoundingItemType $roundingItem
     * @return self
     */
    public function setRoundingItem(?\Pohoda\Type\RoundingItemType $roundingItem = null)
    {
        $this->roundingItem = $roundingItem;
        return $this;
    }
}

