<?php

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookAccountType
 *
 *
 * XSD Type: addressbookAccountType
 */
class AddressbookAccountType
{
    /**
     * @var \Pohoda\AddressBook\AccountItemType[] $accountItem
     */
    private $accountItem = [

    ];

    /**
     * Adds as accountItem
     *
     * @return self
     * @param \Pohoda\AddressBook\AccountItemType $accountItem
     */
    public function addToAccountItem(\Pohoda\AddressBook\AccountItemType $accountItem)
    {
        $this->accountItem[] = $accountItem;
        return $this;
    }

    /**
     * isset accountItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountItem($index)
    {
        return isset($this->accountItem[$index]);
    }

    /**
     * unset accountItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountItem($index)
    {
        unset($this->accountItem[$index]);
    }

    /**
     * Gets as accountItem
     *
     * @return \Pohoda\AddressBook\AccountItemType[]
     */
    public function getAccountItem()
    {
        return $this->accountItem;
    }

    /**
     * Sets a new accountItem
     *
     * @param \Pohoda\AddressBook\AccountItemType[] $accountItem
     * @return self
     */
    public function setAccountItem(array $accountItem = null)
    {
        $this->accountItem = $accountItem;
        return $this;
    }
}
