<?php

namespace Pohoda\ProductRequirement;

/**
 * Class representing ProductRequirementDetailType
 *
 *
 * XSD Type: productRequirementDetailType
 */
class ProductRequirementDetailType
{
    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementItemType[] $productRequirementItem
     */
    private $productRequirementItem = [

    ];

    /**
     * Adds as productRequirementItem
     *
     * @return self
     * @param \Pohoda\ProductRequirement\ProductRequirementItemType $productRequirementItem
     */
    public function addToProductRequirementItem(\Pohoda\ProductRequirement\ProductRequirementItemType $productRequirementItem)
    {
        $this->productRequirementItem[] = $productRequirementItem;
        return $this;
    }

    /**
     * isset productRequirementItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductRequirementItem($index)
    {
        return isset($this->productRequirementItem[$index]);
    }

    /**
     * unset productRequirementItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductRequirementItem($index)
    {
        unset($this->productRequirementItem[$index]);
    }

    /**
     * Gets as productRequirementItem
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementItemType[]
     */
    public function getProductRequirementItem()
    {
        return $this->productRequirementItem;
    }

    /**
     * Sets a new productRequirementItem
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementItemType[] $productRequirementItem
     * @return self
     */
    public function setProductRequirementItem(array $productRequirementItem)
    {
        $this->productRequirementItem = $productRequirementItem;
        return $this;
    }
}
