<?php

namespace Pohoda\Vyroba;

/**
 * Class representing ProductionListType
 *
 *
 * XSD Type: productionListType
 */
class ProductionListType
{
    /**
     * Položka výrobku (Výrobního listu).
     *
     * @var \Pohoda\Vyroba\ProductionListItemType[] $productionListItem
     */
    private $productionListItem = [
        
    ];

    /**
     * Adds as productionListItem
     *
     * Položka výrobku (Výrobního listu).
     *
     * @return self
     * @param \Pohoda\Vyroba\ProductionListItemType $productionListItem
     */
    public function addToProductionListItem(\Pohoda\Vyroba\ProductionListItemType $productionListItem)
    {
        $this->productionListItem[] = $productionListItem;
        return $this;
    }

    /**
     * isset productionListItem
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionListItem($index)
    {
        return isset($this->productionListItem[$index]);
    }

    /**
     * unset productionListItem
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionListItem($index)
    {
        unset($this->productionListItem[$index]);
    }

    /**
     * Gets as productionListItem
     *
     * Položka výrobku (Výrobního listu).
     *
     * @return \Pohoda\Vyroba\ProductionListItemType[]
     */
    public function getProductionListItem()
    {
        return $this->productionListItem;
    }

    /**
     * Sets a new productionListItem
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param \Pohoda\Vyroba\ProductionListItemType[] $productionListItem
     * @return self
     */
    public function setProductionListItem(array $productionListItem)
    {
        $this->productionListItem = $productionListItem;
        return $this;
    }
}

