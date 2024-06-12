<?php

namespace Pohoda\Enquiry;

/**
 * Class representing EnquiryDetailType
 *
 *
 * XSD Type: enquiryDetailType
 */
class EnquiryDetailType
{
    /**
     * @var \Pohoda\Enquiry\EnquiryItemType[] $enquiryItem
     */
    private $enquiryItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as enquiryItem
     *
     * @return self
     * @param \Pohoda\Enquiry\EnquiryItemType $enquiryItem
     */
    public function addToEnquiryItem(\Pohoda\Enquiry\EnquiryItemType $enquiryItem)
    {
        $this->enquiryItem[] = $enquiryItem;
        return $this;
    }

    /**
     * isset enquiryItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnquiryItem($index)
    {
        return isset($this->enquiryItem[$index]);
    }

    /**
     * unset enquiryItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnquiryItem($index)
    {
        unset($this->enquiryItem[$index]);
    }

    /**
     * Gets as enquiryItem
     *
     * @return \Pohoda\Enquiry\EnquiryItemType[]
     */
    public function getEnquiryItem()
    {
        return $this->enquiryItem;
    }

    /**
     * Sets a new enquiryItem
     *
     * @param \Pohoda\Enquiry\EnquiryItemType[] $enquiryItem
     * @return self
     */
    public function setEnquiryItem(array $enquiryItem)
    {
        $this->enquiryItem = $enquiryItem;
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
