<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing PriceGroupsType
 *
 *
 * XSD Type: priceGroupsType
 */
class PriceGroupsType
{
    /**
     * Individuální cena cenové skupiny.
     *
     * @var \Pohoda\IndividualPrice\PriceGroupItemType[] $priceGroupItem
     */
    private $priceGroupItem = [

    ];

    /**
     * Adds as priceGroupItem
     *
     * Individuální cena cenové skupiny.
     *
     * @return self
     * @param \Pohoda\IndividualPrice\PriceGroupItemType $priceGroupItem
     */
    public function addToPriceGroupItem(\Pohoda\IndividualPrice\PriceGroupItemType $priceGroupItem)
    {
        $this->priceGroupItem[] = $priceGroupItem;
        return $this;
    }

    /**
     * isset priceGroupItem
     *
     * Individuální cena cenové skupiny.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceGroupItem($index)
    {
        return isset($this->priceGroupItem[$index]);
    }

    /**
     * unset priceGroupItem
     *
     * Individuální cena cenové skupiny.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceGroupItem($index)
    {
        unset($this->priceGroupItem[$index]);
    }

    /**
     * Gets as priceGroupItem
     *
     * Individuální cena cenové skupiny.
     *
     * @return \Pohoda\IndividualPrice\PriceGroupItemType[]
     */
    public function getPriceGroupItem()
    {
        return $this->priceGroupItem;
    }

    /**
     * Sets a new priceGroupItem
     *
     * Individuální cena cenové skupiny.
     *
     * @param \Pohoda\IndividualPrice\PriceGroupItemType[] $priceGroupItem
     * @return self
     */
    public function setPriceGroupItem(array $priceGroupItem = null)
    {
        $this->priceGroupItem = $priceGroupItem;
        return $this;
    }
}
