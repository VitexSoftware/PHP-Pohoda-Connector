<?php

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaDetailType
 *
 *
 * XSD Type: vyrobaDetailType
 */
class VyrobaDetailType
{
    /**
     * @var \Pohoda\Vyroba\VyrobaItemType[] $vyrobaItem
     */
    private $vyrobaItem = [
    ];

    /**
     * Adds as vyrobaItem
     *
     * @return self
     * @param \Pohoda\Vyroba\VyrobaItemType $vyrobaItem
     */
    public function addToVyrobaItem(\Pohoda\Vyroba\VyrobaItemType $vyrobaItem)
    {
        $this->vyrobaItem[] = $vyrobaItem;
        return $this;
    }

    /**
     * isset vyrobaItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVyrobaItem($index)
    {
        return isset($this->vyrobaItem[$index]);
    }

    /**
     * unset vyrobaItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVyrobaItem($index)
    {
        unset($this->vyrobaItem[$index]);
    }

    /**
     * Gets as vyrobaItem
     *
     * @return \Pohoda\Vyroba\VyrobaItemType[]
     */
    public function getVyrobaItem()
    {
        return $this->vyrobaItem;
    }

    /**
     * Sets a new vyrobaItem
     *
     * @param \Pohoda\Vyroba\VyrobaItemType[] $vyrobaItem
     * @return self
     */
    public function setVyrobaItem(array $vyrobaItem)
    {
        $this->vyrobaItem = $vyrobaItem;
        return $this;
    }
}
