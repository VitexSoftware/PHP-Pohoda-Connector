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
 * Class representing ListOrderType.
 *
 * XSD Type: listOrderType
 */
class ListOrderType extends ListVersionType
{
    /**
     * @var \Pohoda\Order\OrderType[]
     */
    private array $order = [
    ];

    /**
     * Adds as order.
     *
     * @return self
     */
    public function addToOrder(\Pohoda\Order\OrderType $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * isset order.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order.
     *
     * @param int|string $index
     */
    public function unsetOrder($index): void
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order.
     *
     * @return \Pohoda\Order\OrderType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order.
     *
     * @param \Pohoda\Order\OrderType[] $order
     *
     * @return self
     */
    public function setOrder(?array $order = null)
    {
        $this->order = $order;

        return $this;
    }
}
