<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListSupplierType
 *
 *
 * XSD Type: listSupplierType
 */
class ListSupplierType extends ListVersionType
{
    /**
     * @var \Pohoda\Supplier\SupplierType[] $supplier
     */
    private $supplier = [

    ];

    /**
     * Adds as supplier
     *
     * @return self
     * @param \Pohoda\Supplier\SupplierType $supplier
     */
    public function addToSupplier(\Pohoda\Supplier\SupplierType $supplier)
    {
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * isset supplier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplier($index)
    {
        return isset($this->supplier[$index]);
    }

    /**
     * unset supplier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplier($index)
    {
        unset($this->supplier[$index]);
    }

    /**
     * Gets as supplier
     *
     * @return \Pohoda\Supplier\SupplierType[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * @param \Pohoda\Supplier\SupplierType[] $supplier
     * @return self
     */
    public function setSupplier(array $supplier = null)
    {
        $this->supplier = $supplier;
        return $this;
    }
}
