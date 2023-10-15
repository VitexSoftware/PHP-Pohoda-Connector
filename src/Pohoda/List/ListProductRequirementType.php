<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListProductRequirementType
 *
 *
 * XSD Type: listProductRequirementType
 */
class ListProductRequirementType extends ListVersionType
{
    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementType[] $productRequirement
     */
    private $productRequirement = [

    ];

    /**
     * Adds as productRequirement
     *
     * @return self
     * @param \Pohoda\ProductRequirement\ProductRequirementType $productRequirement
     */
    public function addToProductRequirement(\Pohoda\ProductRequirement\ProductRequirementType $productRequirement)
    {
        $this->productRequirement[] = $productRequirement;
        return $this;
    }

    /**
     * isset productRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductRequirement($index)
    {
        return isset($this->productRequirement[$index]);
    }

    /**
     * unset productRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductRequirement($index)
    {
        unset($this->productRequirement[$index]);
    }

    /**
     * Gets as productRequirement
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementType[]
     */
    public function getProductRequirement()
    {
        return $this->productRequirement;
    }

    /**
     * Sets a new productRequirement
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementType[] $productRequirement
     * @return self
     */
    public function setProductRequirement(array $productRequirement = null)
    {
        $this->productRequirement = $productRequirement;
        return $this;
    }
}
