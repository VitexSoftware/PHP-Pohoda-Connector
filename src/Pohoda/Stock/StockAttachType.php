<?php

namespace Pohoda\Stock;

/**
 * Class representing StockAttachType
 *
 *
 * XSD Type: stockAttachType
 */
class StockAttachType
{
    /**
     * @var \Pohoda\Stock\AttachItemType[] $attachItem
     */
    private $attachItem = [
        
    ];

    /**
     * Adds as attachItem
     *
     * @return self
     * @param \Pohoda\Stock\AttachItemType $attachItem
     */
    public function addToAttachItem(\Pohoda\Stock\AttachItemType $attachItem)
    {
        $this->attachItem[] = $attachItem;
        return $this;
    }

    /**
     * isset attachItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachItem($index)
    {
        return isset($this->attachItem[$index]);
    }

    /**
     * unset attachItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachItem($index)
    {
        unset($this->attachItem[$index]);
    }

    /**
     * Gets as attachItem
     *
     * @return \Pohoda\Stock\AttachItemType[]
     */
    public function getAttachItem()
    {
        return $this->attachItem;
    }

    /**
     * Sets a new attachItem
     *
     * @param \Pohoda\Stock\AttachItemType[] $attachItem
     * @return self
     */
    public function setAttachItem(array $attachItem)
    {
        $this->attachItem = $attachItem;
        return $this;
    }
}

