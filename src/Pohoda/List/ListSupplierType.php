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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListSupplierType.
 *
 * XSD Type: listSupplierType
 */
class ListSupplierType extends ListVersionType
{
    /**
     * @var \Pohoda\Supplier\SupplierType[]
     */
    private array $supplier = [
    ];

    /**
     * Adds as supplier.
     *
     * @return self
     */
    public function addToSupplier(\Pohoda\Supplier\SupplierType $supplier)
    {
        $this->supplier[] = $supplier;

        return $this;
    }

    /**
     * isset supplier.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSupplier($index)
    {
        return isset($this->supplier[$index]);
    }

    /**
     * unset supplier.
     *
     * @param int|string $index
     */
    public function unsetSupplier($index): void
    {
        unset($this->supplier[$index]);
    }

    /**
     * Gets as supplier.
     *
     * @return \Pohoda\Supplier\SupplierType[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier.
     *
     * @param \Pohoda\Supplier\SupplierType[] $supplier
     *
     * @return self
     */
    public function setSupplier(?array $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }
}
