<?php

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaDetailType
 *
 *
 * XSD Type: prodejkaDetailType
 */
class ProdejkaDetailType
{
    /**
     * @var \Pohoda\Prodejka\ProdejkaItemType[] $prodejkaItem
     */
    private $prodejkaItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as prodejkaItem
     *
     * @return self
     * @param \Pohoda\Prodejka\ProdejkaItemType $prodejkaItem
     */
    public function addToProdejkaItem(\Pohoda\Prodejka\ProdejkaItemType $prodejkaItem)
    {
        $this->prodejkaItem[] = $prodejkaItem;
        return $this;
    }

    /**
     * isset prodejkaItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProdejkaItem($index)
    {
        return isset($this->prodejkaItem[$index]);
    }

    /**
     * unset prodejkaItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProdejkaItem($index)
    {
        unset($this->prodejkaItem[$index]);
    }

    /**
     * Gets as prodejkaItem
     *
     * @return \Pohoda\Prodejka\ProdejkaItemType[]
     */
    public function getProdejkaItem()
    {
        return $this->prodejkaItem;
    }

    /**
     * Sets a new prodejkaItem
     *
     * @param \Pohoda\Prodejka\ProdejkaItemType[] $prodejkaItem
     * @return self
     */
    public function setProdejkaItem(array $prodejkaItem)
    {
        $this->prodejkaItem = $prodejkaItem;
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
