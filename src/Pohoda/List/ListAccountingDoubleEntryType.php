<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingDoubleEntryType
 *
 *
 * XSD Type: listAccountingDoubleEntryType
 */
class ListAccountingDoubleEntryType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemAccountingTypeDoubleEntryType[] $itemAccounting
     */
    private $itemAccounting = [

    ];

    /**
     * Adds as itemAccounting
     *
     * @return self
     * @param \Pohoda\List\ItemAccountingTypeDoubleEntryType $itemAccounting
     */
    public function addToItemAccounting(\Pohoda\List\ItemAccountingTypeDoubleEntryType $itemAccounting)
    {
        $this->itemAccounting[] = $itemAccounting;
        return $this;
    }

    /**
     * isset itemAccounting
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemAccounting($index)
    {
        return isset($this->itemAccounting[$index]);
    }

    /**
     * unset itemAccounting
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemAccounting($index)
    {
        unset($this->itemAccounting[$index]);
    }

    /**
     * Gets as itemAccounting
     *
     * @return \Pohoda\List\ItemAccountingTypeDoubleEntryType[]
     */
    public function getItemAccounting()
    {
        return $this->itemAccounting;
    }

    /**
     * Sets a new itemAccounting
     *
     * @param \Pohoda\List\ItemAccountingTypeDoubleEntryType[] $itemAccounting
     * @return self
     */
    public function setItemAccounting(array $itemAccounting = null)
    {
        $this->itemAccounting = $itemAccounting;
        return $this;
    }
}
