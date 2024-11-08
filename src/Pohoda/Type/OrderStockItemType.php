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

namespace Pohoda\Type;

/**
 * Class representing OrderStockItemType.
 *
 * XSD Type: orderStockItemType
 */
class OrderStockItemType
{
    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private ?\Pohoda\Type\ActionTypeStockItemType $actionType = null;

    /**
     * Pořadí položek.
     */
    private ?int $stockOrder = null;

    /**
     * Odkaz na skladovou položku.
     */
    private ?\Pohoda\Type\StockRefType $stockItem = null;

    /**
     * Gets as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Type\ActionTypeStockItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeStockItemType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as stockOrder.
     *
     * Pořadí položek.
     *
     * @return int
     */
    public function getStockOrder()
    {
        return $this->stockOrder;
    }

    /**
     * Sets a new stockOrder.
     *
     * Pořadí položek.
     *
     * @param int $stockOrder
     *
     * @return self
     */
    public function setStockOrder($stockOrder)
    {
        $this->stockOrder = $stockOrder;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockRefType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Odkaz na skladovou položku.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockRefType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }
}
