<?php

namespace Pohoda\InventoryLists;

/**
 * Class representing InventoryListsItemType
 *
 *
 * XSD Type: inventoryListsItemType
 */
class InventoryListsItemType
{
    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Kód položky.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Název položky.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Text položky.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Měrná jednotka.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Dodáno. Používá se jen při exportu dokladu.
     *
     * @var string $isDelivered
     */
    private $isDelivered = null;

    /**
     * Gets as stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as code
     *
     * Kód položky.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Kód položky.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název položky.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Název položky.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text položky.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text položky.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as quantity
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
     * Sets a new quantity
     *
     * Množství.
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Měrná jednotka.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Měrná jednotka.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as isDelivered
     *
     * Dodáno. Používá se jen při exportu dokladu.
     *
     * @return string
     */
    public function getIsDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * Sets a new isDelivered
     *
     * Dodáno. Používá se jen při exportu dokladu.
     *
     * @param string $isDelivered
     * @return self
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;
        return $this;
    }
}
