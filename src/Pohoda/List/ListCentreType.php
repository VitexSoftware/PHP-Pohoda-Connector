<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCentreType
 *
 *
 * XSD Type: listCentreType
 */
class ListCentreType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNameType[] $itemCentre
     */
    private $itemCentre = [

    ];

    /**
     * Adds as itemCentre
     *
     * @return self
     * @param \Pohoda\List\ItemNameType $itemCentre
     */
    public function addToItemCentre(\Pohoda\List\ItemNameType $itemCentre)
    {
        $this->itemCentre[] = $itemCentre;
        return $this;
    }

    /**
     * isset itemCentre
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemCentre($index)
    {
        return isset($this->itemCentre[$index]);
    }

    /**
     * unset itemCentre
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemCentre($index)
    {
        unset($this->itemCentre[$index]);
    }

    /**
     * Gets as itemCentre
     *
     * @return \Pohoda\List\ItemNameType[]
     */
    public function getItemCentre()
    {
        return $this->itemCentre;
    }

    /**
     * Sets a new itemCentre
     *
     * @param \Pohoda\List\ItemNameType[] $itemCentre
     * @return self
     */
    public function setItemCentre(array $itemCentre = null)
    {
        $this->itemCentre = $itemCentre;
        return $this;
    }
}
