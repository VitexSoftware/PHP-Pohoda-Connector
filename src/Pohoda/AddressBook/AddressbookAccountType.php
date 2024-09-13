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

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookAccountType.
 *
 * XSD Type: addressbookAccountType
 */
class AddressbookAccountType
{
    /**
     * @var \Pohoda\AddressBook\AccountItemType[]
     */
    private array $accountItem = [
    ];

    /**
     * Adds as accountItem.
     *
     * @return self
     */
    public function addToAccountItem(\Pohoda\AddressBook\AccountItemType $accountItem)
    {
        $this->accountItem[] = $accountItem;

        return $this;
    }

    /**
     * isset accountItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountItem($index)
    {
        return isset($this->accountItem[$index]);
    }

    /**
     * unset accountItem.
     *
     * @param int|string $index
     */
    public function unsetAccountItem($index): void
    {
        unset($this->accountItem[$index]);
    }

    /**
     * Gets as accountItem.
     *
     * @return \Pohoda\AddressBook\AccountItemType[]
     */
    public function getAccountItem()
    {
        return $this->accountItem;
    }

    /**
     * Sets a new accountItem.
     *
     * @param \Pohoda\AddressBook\AccountItemType[] $accountItem
     *
     * @return self
     */
    public function setAccountItem(?array $accountItem = null)
    {
        $this->accountItem = $accountItem;

        return $this;
    }
}
