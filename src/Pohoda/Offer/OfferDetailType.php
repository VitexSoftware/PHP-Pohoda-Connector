<?php

namespace Pohoda\Offer;

/**
 * Class representing OfferDetailType
 *
 *
 * XSD Type: offerDetailType
 */
class OfferDetailType
{
    /**
     * @var \Pohoda\Offer\OfferItemType[] $offerItem
     */
    private $offerItem = [

    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as offerItem
     *
     * @return self
     * @param \Pohoda\Offer\OfferItemType $offerItem
     */
    public function addToOfferItem(\Pohoda\Offer\OfferItemType $offerItem)
    {
        $this->offerItem[] = $offerItem;
        return $this;
    }

    /**
     * isset offerItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferItem($index)
    {
        return isset($this->offerItem[$index]);
    }

    /**
     * unset offerItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferItem($index)
    {
        unset($this->offerItem[$index]);
    }

    /**
     * Gets as offerItem
     *
     * @return \Pohoda\Offer\OfferItemType[]
     */
    public function getOfferItem()
    {
        return $this->offerItem;
    }

    /**
     * Sets a new offerItem
     *
     * @param \Pohoda\Offer\OfferItemType[] $offerItem
     * @return self
     */
    public function setOfferItem(array $offerItem)
    {
        $this->offerItem = $offerItem;
        return $this;
    }

    /**
     * Gets as roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param \Pohoda\Type\RoundingItemType $roundingItem
     * @return self
     */
    public function setRoundingItem(?\Pohoda\Type\RoundingItemType $roundingItem = null)
    {
        $this->roundingItem = $roundingItem;
        return $this;
    }
}
