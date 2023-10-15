<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListSellingPriceType
 *
 *
 * XSD Type: listSellingPriceType
 */
class ListSellingPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemSellingPriceType[] $itemSellingPrice
     */
    private $itemSellingPrice = [
        
    ];

    /**
     * Adds as itemSellingPrice
     *
     * @return self
     * @param \Pohoda\List\ItemSellingPriceType $itemSellingPrice
     */
    public function addToItemSellingPrice(\Pohoda\List\ItemSellingPriceType $itemSellingPrice)
    {
        $this->itemSellingPrice[] = $itemSellingPrice;
        return $this;
    }

    /**
     * isset itemSellingPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSellingPrice($index)
    {
        return isset($this->itemSellingPrice[$index]);
    }

    /**
     * unset itemSellingPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSellingPrice($index)
    {
        unset($this->itemSellingPrice[$index]);
    }

    /**
     * Gets as itemSellingPrice
     *
     * @return \Pohoda\List\ItemSellingPriceType[]
     */
    public function getItemSellingPrice()
    {
        return $this->itemSellingPrice;
    }

    /**
     * Sets a new itemSellingPrice
     *
     * @param \Pohoda\List\ItemSellingPriceType[] $itemSellingPrice
     * @return self
     */
    public function setItemSellingPrice(array $itemSellingPrice = null)
    {
        $this->itemSellingPrice = $itemSellingPrice;
        return $this;
    }
}

