<?php

namespace Pohoda\Discount;

/**
 * Class representing DiscountsType
 *
 *
 * XSD Type: discountsType
 */
class DiscountsType
{
    /**
     * @var \Pohoda\Discount\DiscountsItemType[] $discountsItem
     */
    private $discountsItem = [
        
    ];

    /**
     * Adds as discountsItem
     *
     * @return self
     * @param \Pohoda\Discount\DiscountsItemType $discountsItem
     */
    public function addToDiscountsItem(\Pohoda\Discount\DiscountsItemType $discountsItem)
    {
        $this->discountsItem[] = $discountsItem;
        return $this;
    }

    /**
     * isset discountsItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountsItem($index)
    {
        return isset($this->discountsItem[$index]);
    }

    /**
     * unset discountsItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountsItem($index)
    {
        unset($this->discountsItem[$index]);
    }

    /**
     * Gets as discountsItem
     *
     * @return \Pohoda\Discount\DiscountsItemType[]
     */
    public function getDiscountsItem()
    {
        return $this->discountsItem;
    }

    /**
     * Sets a new discountsItem
     *
     * @param \Pohoda\Discount\DiscountsItemType[] $discountsItem
     * @return self
     */
    public function setDiscountsItem(array $discountsItem)
    {
        $this->discountsItem = $discountsItem;
        return $this;
    }
}

