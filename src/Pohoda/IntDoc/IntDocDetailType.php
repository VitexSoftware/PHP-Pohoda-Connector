<?php

namespace Pohoda\IntDoc;

/**
 * Class representing IntDocDetailType
 *
 *
 * XSD Type: intDocDetailType
 */
class IntDocDetailType
{
    /**
     * @var \Pohoda\IntDoc\IntDocItemType[] $intDocItem
     */
    private $intDocItem = [

    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as intDocItem
     *
     * @return self
     * @param \Pohoda\IntDoc\IntDocItemType $intDocItem
     */
    public function addToIntDocItem(\Pohoda\IntDoc\IntDocItemType $intDocItem)
    {
        $this->intDocItem[] = $intDocItem;
        return $this;
    }

    /**
     * isset intDocItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntDocItem($index)
    {
        return isset($this->intDocItem[$index]);
    }

    /**
     * unset intDocItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntDocItem($index)
    {
        unset($this->intDocItem[$index]);
    }

    /**
     * Gets as intDocItem
     *
     * @return \Pohoda\IntDoc\IntDocItemType[]
     */
    public function getIntDocItem()
    {
        return $this->intDocItem;
    }

    /**
     * Sets a new intDocItem
     *
     * @param \Pohoda\IntDoc\IntDocItemType[] $intDocItem
     * @return self
     */
    public function setIntDocItem(array $intDocItem)
    {
        $this->intDocItem = $intDocItem;
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
