<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\ListAddBook;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAddressBookType.
 *
 * XSD Type: listAddressBookType
 */
class ListAddressBookType extends ListVersionType
{
    /**
     * @var \Pohoda\AddressBook\AddressbookType[]
     */
    private array $addressbook = [
    ];

    /**
     * Adds as addressbook.
     *
     * @return self
     */
    public function addToAddressbook(\Pohoda\AddressBook\AddressbookType $addressbook)
    {
        $this->addressbook[] = $addressbook;

        return $this;
    }

    /**
     * isset addressbook.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAddressbook($index)
    {
        return isset($this->addressbook[$index]);
    }

    /**
     * unset addressbook.
     *
     * @param int|string $index
     */
    public function unsetAddressbook($index): void
    {
        unset($this->addressbook[$index]);
    }

    /**
     * Gets as addressbook.
     *
     * @return \Pohoda\AddressBook\AddressbookType[]
     */
    public function getAddressbook()
    {
        return $this->addressbook;
    }

    /**
     * Sets a new addressbook.
     *
     * @param \Pohoda\AddressBook\AddressbookType[] $addressbook
     *
     * @return self
     */
    public function setAddressbook(?array $addressbook = null)
    {
        $this->addressbook = $addressbook;

        return $this;
    }
}
