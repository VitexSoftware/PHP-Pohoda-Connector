<?php

namespace Pohoda\Discount;

/**
 * Class representing DiscountType
 *
 *
 * XSD Type: discountType
 */
class DiscountType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Discount\DiscountStockItemType[] $discountStockItem
     */
    private $discountStockItem = [
        
    ];

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
     * Adds as discountStockItem
     *
     * @return self
     * @param \Pohoda\Discount\DiscountStockItemType $discountStockItem
     */
    public function addToDiscountStockItem(\Pohoda\Discount\DiscountStockItemType $discountStockItem)
    {
        $this->discountStockItem[] = $discountStockItem;
        return $this;
    }

    /**
     * isset discountStockItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountStockItem($index)
    {
        return isset($this->discountStockItem[$index]);
    }

    /**
     * unset discountStockItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountStockItem($index)
    {
        unset($this->discountStockItem[$index]);
    }

    /**
     * Gets as discountStockItem
     *
     * @return \Pohoda\Discount\DiscountStockItemType[]
     */
    public function getDiscountStockItem()
    {
        return $this->discountStockItem;
    }

    /**
     * Sets a new discountStockItem
     *
     * @param \Pohoda\Discount\DiscountStockItemType[] $discountStockItem
     * @return self
     */
    public function setDiscountStockItem(array $discountStockItem)
    {
        $this->discountStockItem = $discountStockItem;
        return $this;
    }
}

