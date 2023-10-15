<?php

namespace Pohoda\Supplier;

/**
 * Class representing SupplierType
 *
 *
 * XSD Type: supplierType
 */
class SupplierType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * @var \Pohoda\Supplier\SupplierItemType[] $suppliers
     */
    private $suppliers = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as stockItem
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
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemType $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Adds as supplierItem
     *
     * @return self
     * @param \Pohoda\Supplier\SupplierItemType $supplierItem
     */
    public function addToSuppliers(\Pohoda\Supplier\SupplierItemType $supplierItem)
    {
        $this->suppliers[] = $supplierItem;
        return $this;
    }

    /**
     * isset suppliers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuppliers($index)
    {
        return isset($this->suppliers[$index]);
    }

    /**
     * unset suppliers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuppliers($index)
    {
        unset($this->suppliers[$index]);
    }

    /**
     * Gets as suppliers
     *
     * @return \Pohoda\Supplier\SupplierItemType[]
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Sets a new suppliers
     *
     * @param \Pohoda\Supplier\SupplierItemType[] $suppliers
     * @return self
     */
    public function setSuppliers(array $suppliers)
    {
        $this->suppliers = $suppliers;
        return $this;
    }
}
