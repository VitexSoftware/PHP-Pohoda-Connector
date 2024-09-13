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
 * Class representing SuppliersType.
 *
 * XSD Type: suppliersType
 */
class SuppliersType
{
    /**
     * @var \Pohoda\Supplier\SupplierItemType[]
     */
    private array $supplierItem = [
    ];

    /**
     * Adds as supplierItem.
     *
     * @return self
     */
    public function addToSupplierItem(\Pohoda\Supplier\SupplierItemType $supplierItem)
    {
        $this->supplierItem[] = $supplierItem;

        return $this;
    }

    /**
     * isset supplierItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSupplierItem($index)
    {
        return isset($this->supplierItem[$index]);
    }

    /**
     * unset supplierItem.
     *
     * @param int|string $index
     */
    public function unsetSupplierItem($index): void
    {
        unset($this->supplierItem[$index]);
    }

    /**
     * Gets as supplierItem.
     *
     * @return \Pohoda\Supplier\SupplierItemType[]
     */
    public function getSupplierItem()
    {
        return $this->supplierItem;
    }

    /**
     * Sets a new supplierItem.
     *
     * @param \Pohoda\Supplier\SupplierItemType[] $supplierItem
     *
     * @return self
     */
    public function setSupplierItem(array $supplierItem)
    {
        $this->supplierItem = $supplierItem;

        return $this;
    }
}
