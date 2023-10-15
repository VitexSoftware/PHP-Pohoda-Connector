<?php

namespace Pohoda\Type;

/**
 * Class representing StockItemType
 *
 * Údaje skladové zásoby vložené do položky dokladu
 * XSD Type: stockItemType
 */
class StockItemType
{
    /**
     * Sklad.
     *
     * @var \Pohoda\Type\RefType $store
     */
    private $store = null;

    /**
     * Odkaz na skladovou položku.
     *
     * @var \Pohoda\Type\StockRefType $stockItem
     */
    private $stockItem = null;

    /**
     * Výrobní číslo.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * @var \Pohoda\Type\ExtIdType $serialNumberExtId
     */
    private $serialNumberExtId = null;

    /**
     * Gets as store
     *
     * Sklad.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * Sklad.
     *
     * @param \Pohoda\Type\RefType $store
     * @return self
     */
    public function setStore(?\Pohoda\Type\RefType $store = null)
    {
        $this->store = $store;
        return $this;
    }

    /**
     * Gets as stockItem
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
     * Sets a new stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @param \Pohoda\Type\StockRefType $stockItem
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockRefType $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * Výrobní číslo.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * Výrobní číslo.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Gets as serialNumberExtId
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getSerialNumberExtId()
    {
        return $this->serialNumberExtId;
    }

    /**
     * Sets a new serialNumberExtId
     *
     * @param \Pohoda\Type\ExtIdType $serialNumberExtId
     * @return self
     */
    public function setSerialNumberExtId(?\Pohoda\Type\ExtIdType $serialNumberExtId = null)
    {
        $this->serialNumberExtId = $serialNumberExtId;
        return $this;
    }
}

