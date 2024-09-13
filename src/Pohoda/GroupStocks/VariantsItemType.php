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

namespace Pohoda\GroupStocks;

/**
 * Class representing VariantsItemType.
 *
 * XSD Type: variantsItemType
 */
class VariantsItemType
{
    /**
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     */
    private \Pohoda\Type\ActionTypeItemAddDeleteType $actionType = null;

    /**
     * Odkaz na skladovou položku.
     */
    private \Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Pořadí skladových položek (Pouze pro export).
     */
    private int $order = null;

    /**
     * Název skladové položky.
     */
    private string $name = null;

    /**
     * Množství skladové položky.
     */
    private float $quantity = null;

    /**
     * Gets as actionType.
     *
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     *
     * @return \Pohoda\Type\ActionTypeItemAddDeleteType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s položkou. Výchozí hodnota je přidání nové položky.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemAddDeleteType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockItemType
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
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as order.
     *
     * Pořadí skladových položek (Pouze pro export).
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order.
     *
     * Pořadí skladových položek (Pouze pro export).
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název skladové položky.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * Název skladové položky.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as quantity.
     *
     * Množství skladové položky.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity.
     *
     * Množství skladové položky.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
