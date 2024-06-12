<?php

namespace Pohoda\AddressBook;

/**
 * Class representing GDPRItemsType
 *
 *
 * XSD Type: GDPRItemsType
 */
class GDPRItemsType
{
    /**
     * @var \Pohoda\AddressBook\GDPRItemType[] $gDPRItem
     */
    private $gDPRItem = [
    ];

    /**
     * Adds as gDPRItem
     *
     * @return self
     * @param \Pohoda\AddressBook\GDPRItemType $gDPRItem
     */
    public function addToGDPRItem(\Pohoda\AddressBook\GDPRItemType $gDPRItem)
    {
        $this->gDPRItem[] = $gDPRItem;
        return $this;
    }

    /**
     * isset gDPRItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDPRItem($index)
    {
        return isset($this->gDPRItem[$index]);
    }

    /**
     * unset gDPRItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDPRItem($index)
    {
        unset($this->gDPRItem[$index]);
    }

    /**
     * Gets as gDPRItem
     *
     * @return \Pohoda\AddressBook\GDPRItemType[]
     */
    public function getGDPRItem()
    {
        return $this->gDPRItem;
    }

    /**
     * Sets a new gDPRItem
     *
     * @param \Pohoda\AddressBook\GDPRItemType[] $gDPRItem
     * @return self
     */
    public function setGDPRItem(array $gDPRItem)
    {
        $this->gDPRItem = $gDPRItem;
        return $this;
    }
}
