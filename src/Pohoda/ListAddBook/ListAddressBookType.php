<?php

namespace Pohoda\ListAddBook;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAddressBookType
 *
 *
 * XSD Type: listAddressBookType
 */
class ListAddressBookType extends ListVersionType
{
    /**
     * @var \Pohoda\AddressBook\AddressbookType[] $addressbook
     */
    private $addressbook = [
    ];

    /**
     * Adds as addressbook
     *
     * @return self
     * @param \Pohoda\AddressBook\AddressbookType $addressbook
     */
    public function addToAddressbook(\Pohoda\AddressBook\AddressbookType $addressbook)
    {
        $this->addressbook[] = $addressbook;
        return $this;
    }

    /**
     * isset addressbook
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressbook($index)
    {
        return isset($this->addressbook[$index]);
    }

    /**
     * unset addressbook
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressbook($index)
    {
        unset($this->addressbook[$index]);
    }

    /**
     * Gets as addressbook
     *
     * @return \Pohoda\AddressBook\AddressbookType[]
     */
    public function getAddressbook()
    {
        return $this->addressbook;
    }

    /**
     * Sets a new addressbook
     *
     * @param \Pohoda\AddressBook\AddressbookType[] $addressbook
     * @return self
     */
    public function setAddressbook(array $addressbook = null)
    {
        $this->addressbook = $addressbook;
        return $this;
    }
}
