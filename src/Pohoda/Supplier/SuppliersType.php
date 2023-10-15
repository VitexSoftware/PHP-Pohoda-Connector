<?php

namespace Pohoda\Supplier;

/**
 * Class representing SuppliersType
 *
 *
 * XSD Type: suppliersType
 */
class SuppliersType
{
    /**
     * @var \Pohoda\Supplier\SupplierItemType[] $supplierItem
     */
    private $supplierItem = [

    ];

    /**
     * Adds as supplierItem
     *
     * @return self
     * @param \Pohoda\Supplier\SupplierItemType $supplierItem
     */
    public function addToSupplierItem(\Pohoda\Supplier\SupplierItemType $supplierItem)
    {
        $this->supplierItem[] = $supplierItem;
        return $this;
    }

    /**
     * isset supplierItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplierItem($index)
    {
        return isset($this->supplierItem[$index]);
    }

    /**
     * unset supplierItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplierItem($index)
    {
        unset($this->supplierItem[$index]);
    }

    /**
     * Gets as supplierItem
     *
     * @return \Pohoda\Supplier\SupplierItemType[]
     */
    public function getSupplierItem()
    {
        return $this->supplierItem;
    }

    /**
     * Sets a new supplierItem
     *
     * @param \Pohoda\Supplier\SupplierItemType[] $supplierItem
     * @return self
     */
    public function setSupplierItem(array $supplierItem)
    {
        $this->supplierItem = $supplierItem;
        return $this;
    }
}
