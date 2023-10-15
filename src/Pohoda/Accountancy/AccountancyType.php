<?php

namespace Pohoda\Accountancy;

/**
 * Class representing AccountancyType
 *
 *
 * XSD Type: accountancyType
 */
class AccountancyType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Účetní doklad.
     *
     * @var \Pohoda\Accountancy\AccountingItemType[] $accountingItem
     */
    private $accountingItem = [

    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as accountingItem
     *
     * Účetní doklad.
     *
     * @return self
     * @param \Pohoda\Accountancy\AccountingItemType $accountingItem
     */
    public function addToAccountingItem(\Pohoda\Accountancy\AccountingItemType $accountingItem)
    {
        $this->accountingItem[] = $accountingItem;
        return $this;
    }

    /**
     * isset accountingItem
     *
     * Účetní doklad.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountingItem($index)
    {
        return isset($this->accountingItem[$index]);
    }

    /**
     * unset accountingItem
     *
     * Účetní doklad.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountingItem($index)
    {
        unset($this->accountingItem[$index]);
    }

    /**
     * Gets as accountingItem
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
     * Sets a new accountingItem
     *
     * Účetní doklad.
     *
     * @param \Pohoda\Accountancy\AccountingItemType[] $accountingItem
     * @return self
     */
    public function setAccountingItem(array $accountingItem)
    {
        $this->accountingItem = $accountingItem;
        return $this;
    }
}
