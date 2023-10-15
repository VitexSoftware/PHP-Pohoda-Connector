<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListActivityType
 *
 *
 * XSD Type: listActivityType
 */
class ListActivityType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNameType[] $itemActivity
     */
    private $itemActivity = [

    ];

    /**
     * Adds as itemActivity
     *
     * @return self
     * @param \Pohoda\List\ItemNameType $itemActivity
     */
    public function addToItemActivity(\Pohoda\List\ItemNameType $itemActivity)
    {
        $this->itemActivity[] = $itemActivity;
        return $this;
    }

    /**
     * isset itemActivity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemActivity($index)
    {
        return isset($this->itemActivity[$index]);
    }

    /**
     * unset itemActivity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemActivity($index)
    {
        unset($this->itemActivity[$index]);
    }

    /**
     * Gets as itemActivity
     *
     * @return \Pohoda\List\ItemNameType[]
     */
    public function getItemActivity()
    {
        return $this->itemActivity;
    }

    /**
     * Sets a new itemActivity
     *
     * @param \Pohoda\List\ItemNameType[] $itemActivity
     * @return self
     */
    public function setItemActivity(array $itemActivity = null)
    {
        $this->itemActivity = $itemActivity;
        return $this;
    }
}
