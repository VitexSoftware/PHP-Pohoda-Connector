<?php

namespace Pohoda\List;

/**
 * Class representing RestrictionDataVyrobaType
 *
 *
 * XSD Type: restrictionDataVyrobaType
 */
class RestrictionDataVyrobaType
{
    /**
     * Položky výrobku (pouze E1).
     *
     * @var string $productionList
     */
    private $productionList = null;

    /**
     * Gets as productionList
     *
     * Položky výrobku (pouze E1).
     *
     * @return string
     */
    public function getProductionList()
    {
        return $this->productionList;
    }

    /**
     * Sets a new productionList
     *
     * Položky výrobku (pouze E1).
     *
     * @param string $productionList
     * @return self
     */
    public function setProductionList($productionList)
    {
        $this->productionList = $productionList;
        return $this;
    }
}

