<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountType
 *
 *
 * XSD Type: listAccountType
 */
class ListAccountType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemAccountType[] $itemAccount
     */
    private $itemAccount = [

    ];

    /**
     * Adds as itemAccount
     *
     * @return self
     * @param \Pohoda\List\ItemAccountType $itemAccount
     */
    public function addToItemAccount(\Pohoda\List\ItemAccountType $itemAccount)
    {
        $this->itemAccount[] = $itemAccount;
        return $this;
    }

    /**
     * isset itemAccount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemAccount($index)
    {
        return isset($this->itemAccount[$index]);
    }

    /**
     * unset itemAccount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemAccount($index)
    {
        unset($this->itemAccount[$index]);
    }

    /**
     * Gets as itemAccount
     *
     * @return \Pohoda\List\ItemAccountType[]
     */
    public function getItemAccount()
    {
        return $this->itemAccount;
    }

    /**
     * Sets a new itemAccount
     *
     * @param \Pohoda\List\ItemAccountType[] $itemAccount
     * @return self
     */
    public function setItemAccount(array $itemAccount = null)
    {
        $this->itemAccount = $itemAccount;
        return $this;
    }
}
