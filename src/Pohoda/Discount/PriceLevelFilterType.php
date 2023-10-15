<?php

namespace Pohoda\Discount;

/**
 * Class representing PriceLevelFilterType
 *
 *
 * XSD Type: priceLevelFilterType
 */
class PriceLevelFilterType
{
    /**
     * @var \Pohoda\Type\RefType $priceLevel
     */
    private $priceLevel = null;

    /**
     * Gets as priceLevel
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Sets a new priceLevel
     *
     * @param \Pohoda\Type\RefType $priceLevel
     * @return self
     */
    public function setPriceLevel(\Pohoda\Type\RefType $priceLevel)
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }
}
