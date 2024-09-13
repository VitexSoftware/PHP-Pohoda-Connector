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

namespace Pohoda\Stock;

/**
 * Class representing StockItemType.
 *
 * XSD Type: stockItemType
 */
class StockItemType
{
    /**
     * ID položky zásoby (od verze 2.1).
     */
    private int $id = null;

    /**
     * Informace o použité skladové zásobě (od verze 2.1).
     */
    private \Pohoda\Stock\StockInfoType $stockInfo = null;

    /**
     * Členění.
     */
    private \Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Řetězcový identifikátor skladové položky.
     */
    private string $code = null;

    /**
     * Název skladové položky (jen pro export).
     */
    private string $name = null;

    /**
     * Stav zásoby (jen pro export).
     */
    private float $count = null;

    /**
     * Množství.
     */
    private float $quantity = null;

    /**
     * Měrná jednotka (jen pro export).
     */
    private string $unit = null;

    /**
     * Pořadí položek (jen pro export).
     */
    private int $stockOrder = null;

    /**
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @var \Pohoda\Type\StockPriceType[]
     */
    private array $stockPriceItem = null;

    /**
     * Gets as id.
     *
     * ID položky zásoby (od verze 2.1).
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID položky zásoby (od verze 2.1).
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as stockInfo.
     *
     * Informace o použité skladové zásobě (od verze 2.1)
     *
     * @return \Pohoda\Stock\StockInfoType
     */
    public function getStockInfo()
    {
        return $this->stockInfo;
    }

    /**
     * Sets a new stockInfo.
     *
     * Informace o použité skladové zásobě (od verze 2.1)
     *
     * @return self
     */
    public function setStockInfo(?\Pohoda\Stock\StockInfoType $stockInfo = null)
    {
        $this->stockInfo = $stockInfo;

        return $this;
    }

    /**
     * Gets as storage.
     *
     * Členění.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage.
     *
     * Členění.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as code.
     *
     * Řetězcový identifikátor skladové položky.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code.
     *
     * Řetězcový identifikátor skladové položky.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název skladové položky (jen pro export).
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
     * Název skladové položky (jen pro export).
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
     * Gets as count.
     *
     * Stav zásoby (jen pro export).
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count.
     *
     * Stav zásoby (jen pro export).
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Gets as quantity.
     *
     * Množství.
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
     * Množství.
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

    /**
     * Gets as unit.
     *
     * Měrná jednotka (jen pro export).
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit.
     *
     * Měrná jednotka (jen pro export).
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as stockOrder.
     *
     * Pořadí položek (jen pro export).
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
     * Pořadí položek (jen pro export).
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
     * Adds as stockPrice.
     *
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @return self
     */
    public function addToStockPriceItem(\Pohoda\Type\StockPriceType $stockPrice)
    {
        $this->stockPriceItem[] = $stockPrice;

        return $this;
    }

    /**
     * isset stockPriceItem.
     *
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockPriceItem($index)
    {
        return isset($this->stockPriceItem[$index]);
    }

    /**
     * unset stockPriceItem.
     *
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @param int|string $index
     */
    public function unsetStockPriceItem($index): void
    {
        unset($this->stockPriceItem[$index]);
    }

    /**
     * Gets as stockPriceItem.
     *
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @return \Pohoda\Type\StockPriceType[]
     */
    public function getStockPriceItem()
    {
        return $this->stockPriceItem;
    }

    /**
     * Sets a new stockPriceItem.
     *
     * Úprava cen položky zásob u jednotlivých cenových hladin. Jen u typu Komplet.
     *
     * @param \Pohoda\Type\StockPriceType[] $stockPriceItem
     *
     * @return self
     */
    public function setStockPriceItem(?array $stockPriceItem = null)
    {
        $this->stockPriceItem = $stockPriceItem;

        return $this;
    }
}
