<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListOrderType
 *
 *
 * XSD Type: listOrderType
 */
class ListOrderType extends ListVersionType
{
    /**
     * @var \Pohoda\Order\OrderType[] $order
     */
    private $order = [

    ];

    /**
     * Adds as order
     *
     * @return self
     * @param \Pohoda\Order\OrderType $order
     */
    public function addToOrder(\Pohoda\Order\OrderType $order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * isset order
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrder($index)
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order
     *
     * @return \Pohoda\Order\OrderType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param \Pohoda\Order\OrderType[] $order
     * @return self
     */
    public function setOrder(array $order = null)
    {
        $this->order = $order;
        return $this;
    }
}
