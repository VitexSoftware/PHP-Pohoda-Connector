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

namespace Pohoda\Type;

/**
 * Class representing StockItemType.
 *
 * Údaje skladové zásoby vložené do položky dokladu
 * XSD Type: stockItemType
 */
class StockItemType
{
    /**
     * Sklad.
     */
    private ?\Pohoda\Type\RefType $store = null;

    /**
     * Odkaz na skladovou položku.
     */
    private ?\Pohoda\Type\StockRefType $stockItem = null;

    /**
     * Výrobní číslo.
     */
    private ?string $serialNumber = null;
    private ?\Pohoda\Type\ExtIdType $serialNumberExtId = null;

    /**
     * Gets as store.
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
     * Sets a new store.
     *
     * Sklad.
     *
     * @return self
     */
    public function setStore(?\Pohoda\Type\RefType $store = null)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Gets as stockItem.
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
     * Sets a new stockItem.
     *
     * Odkaz na skladovou položku.
     *
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockRefType $stockItem)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as serialNumber.
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
     * Sets a new serialNumber.
     *
     * Výrobní číslo.
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Gets as serialNumberExtId.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getSerialNumberExtId()
    {
        return $this->serialNumberExtId;
    }

    /**
     * Sets a new serialNumberExtId.
     *
     * @return self
     */
    public function setSerialNumberExtId(?\Pohoda\Type\ExtIdType $serialNumberExtId = null)
    {
        $this->serialNumberExtId = $serialNumberExtId;

        return $this;
    }
}
