<?php

namespace Pohoda\Documentresponse;

/**
 * Class representing ItemDetailsType
 *
 *
 * XSD Type: itemDetailsType
 */
class ItemDetailsType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Pohoda\Documentresponse\ItemType[] $item
     */
    private $item = [
        
    ];

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Pohoda\Documentresponse\ItemType $item
     */
    public function addToItem(\Pohoda\Documentresponse\ItemType $item)
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
     * @return \Pohoda\Documentresponse\ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Pohoda\Documentresponse\ItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

