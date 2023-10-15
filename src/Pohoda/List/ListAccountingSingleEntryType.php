<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingSingleEntryType
 *
 *
 * XSD Type: listAccountingSingleEntryType
 */
class ListAccountingSingleEntryType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemAccountingTypeSingleEntryType[] $itemAccounting
     */
    private $itemAccounting = [
        
    ];

    /**
     * Adds as itemAccounting
     *
     * @return self
     * @param \Pohoda\List\ItemAccountingTypeSingleEntryType $itemAccounting
     */
    public function addToItemAccounting(\Pohoda\List\ItemAccountingTypeSingleEntryType $itemAccounting)
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
     * @return \Pohoda\List\ItemAccountingTypeSingleEntryType[]
     */
    public function getItemAccounting()
    {
        return $this->itemAccounting;
    }

    /**
     * Sets a new itemAccounting
     *
     * @param \Pohoda\List\ItemAccountingTypeSingleEntryType[] $itemAccounting
     * @return self
     */
    public function setItemAccounting(array $itemAccounting = null)
    {
        $this->itemAccounting = $itemAccounting;
        return $this;
    }
}

