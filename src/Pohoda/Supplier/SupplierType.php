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

namespace Pohoda\Supplier;

/**
 * Class representing SupplierType.
 *
 * XSD Type: supplierType
 */
class SupplierType
{
    private string $version = null;
    private \Pohoda\Type\StockItemType $stockItem = null;

    /**
     * @var \Pohoda\Supplier\SupplierItemType[]
     */
    private array $suppliers = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as stockItem.
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
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemType $stockItem)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Adds as supplierItem.
     *
     * @return self
     */
    public function addToSuppliers(\Pohoda\Supplier\SupplierItemType $supplierItem)
    {
        $this->suppliers[] = $supplierItem;

        return $this;
    }

    /**
     * isset suppliers.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSuppliers($index)
    {
        return isset($this->suppliers[$index]);
    }

    /**
     * unset suppliers.
     *
     * @param int|string $index
     */
    public function unsetSuppliers($index): void
    {
        unset($this->suppliers[$index]);
    }

    /**
     * Gets as suppliers.
     *
     * @return \Pohoda\Supplier\SupplierItemType[]
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Sets a new suppliers.
     *
     * @param \Pohoda\Supplier\SupplierItemType[] $suppliers
     *
     * @return self
     */
    public function setSuppliers(array $suppliers)
    {
        $this->suppliers = $suppliers;

        return $this;
    }
}
