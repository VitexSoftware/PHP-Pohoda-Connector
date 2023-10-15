<?php

namespace Pohoda\Vydejka;

/**
 * Class representing VydejkaDetailType
 *
 *
 * XSD Type: vydejkaDetailType
 */
class VydejkaDetailType
{
    /**
     * @var \Pohoda\Vydejka\VydejkaItemType[] $vydejkaItem
     */
    private $vydejkaItem = [
        
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as vydejkaItem
     *
     * @return self
     * @param \Pohoda\Vydejka\VydejkaItemType $vydejkaItem
     */
    public function addToVydejkaItem(\Pohoda\Vydejka\VydejkaItemType $vydejkaItem)
    {
        $this->vydejkaItem[] = $vydejkaItem;
        return $this;
    }

    /**
     * isset vydejkaItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVydejkaItem($index)
    {
        return isset($this->vydejkaItem[$index]);
    }

    /**
     * unset vydejkaItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVydejkaItem($index)
    {
        unset($this->vydejkaItem[$index]);
    }

    /**
     * Gets as vydejkaItem
     *
     * @return \Pohoda\Vydejka\VydejkaItemType[]
     */
    public function getVydejkaItem()
    {
        return $this->vydejkaItem;
    }

    /**
     * Sets a new vydejkaItem
     *
     * @param \Pohoda\Vydejka\VydejkaItemType[] $vydejkaItem
     * @return self
     */
    public function setVydejkaItem(array $vydejkaItem)
    {
        $this->vydejkaItem = $vydejkaItem;
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

