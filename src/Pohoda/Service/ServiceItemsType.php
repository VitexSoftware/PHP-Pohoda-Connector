<?php

namespace Pohoda\Service;

/**
 * Class representing ServiceItemsType
 *
 *
 * XSD Type: serviceItemsType
 */
class ServiceItemsType
{
    /**
     * @var \Pohoda\Service\ItemType[] $item
     */
    private $item = [

    ];

    /**
     * Adds as item
     *
     * @return self
     * @param \Pohoda\Service\ItemType $item
     */
    public function addToItem(\Pohoda\Service\ItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * @return \Pohoda\Service\ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Pohoda\Service\ItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
