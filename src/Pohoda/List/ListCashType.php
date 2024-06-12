<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCashType
 *
 *
 * XSD Type: listCashType
 */
class ListCashType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemCashType[] $itemCash
     */
    private $itemCash = [
    ];

    /**
     * Adds as itemCash
     *
     * @return self
     * @param \Pohoda\List\ItemCashType $itemCash
     */
    public function addToItemCash(\Pohoda\List\ItemCashType $itemCash)
    {
        $this->itemCash[] = $itemCash;
        return $this;
    }

    /**
     * isset itemCash
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemCash($index)
    {
        return isset($this->itemCash[$index]);
    }

    /**
     * unset itemCash
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemCash($index)
    {
        unset($this->itemCash[$index]);
    }

    /**
     * Gets as itemCash
     *
     * @return \Pohoda\List\ItemCashType[]
     */
    public function getItemCash()
    {
        return $this->itemCash;
    }

    /**
     * Sets a new itemCash
     *
     * @param \Pohoda\List\ItemCashType[] $itemCash
     * @return self
     */
    public function setItemCash(array $itemCash = null)
    {
        $this->itemCash = $itemCash;
        return $this;
    }
}
