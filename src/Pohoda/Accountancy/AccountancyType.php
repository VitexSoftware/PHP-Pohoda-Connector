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

namespace Pohoda\Accountancy;

/**
 * Class representing AccountancyType.
 *
 * XSD Type: accountancyType
 */
class AccountancyType
{
    private ?string $version = null;

    /**
     * Účetní doklad.
     *
     * @var \Pohoda\Accountancy\AccountingItemType[]
     */
    private array $accountingItem = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as accountingItem.
     *
     * Účetní doklad.
     *
     * @return self
     */
    public function addToAccountingItem(\Pohoda\Accountancy\AccountingItemType $accountingItem)
    {
        $this->accountingItem[] = $accountingItem;

        return $this;
    }

    /**
     * isset accountingItem.
     *
     * Účetní doklad.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingItem($index)
    {
        return isset($this->accountingItem[$index]);
    }

    /**
     * unset accountingItem.
     *
     * Účetní doklad.
     *
     * @param int|string $index
     */
    public function unsetAccountingItem($index): void
    {
        unset($this->accountingItem[$index]);
    }

    /**
     * Gets as accountingItem.
     *
     * Účetní doklad.
     *
     * @return \Pohoda\Accountancy\AccountingItemType[]
     */
    public function getAccountingItem()
    {
        return $this->accountingItem;
    }

    /**
     * Sets a new accountingItem.
     *
     * Účetní doklad.
     *
     * @param \Pohoda\Accountancy\AccountingItemType[] $accountingItem
     *
     * @return self
     */
    public function setAccountingItem(array $accountingItem)
    {
        $this->accountingItem = $accountingItem;

        return $this;
    }
}
