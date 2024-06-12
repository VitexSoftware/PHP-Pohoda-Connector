<?php

namespace Pohoda\Balance;

/**
 * Class representing BalanceType
 *
 *
 * XSD Type: balanceType
 */
class BalanceType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Balance\BalanceHeaderType $balanceHeader
     */
    private $balanceHeader = null;

    /**
     * @var \Pohoda\Balance\BalanceItemType[] $balanceItem
     */
    private $balanceItem = [
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
     * Gets as balanceHeader
     *
     * @return \Pohoda\Balance\BalanceHeaderType
     */
    public function getBalanceHeader()
    {
        return $this->balanceHeader;
    }

    /**
     * Sets a new balanceHeader
     *
     * @param \Pohoda\Balance\BalanceHeaderType $balanceHeader
     * @return self
     */
    public function setBalanceHeader(\Pohoda\Balance\BalanceHeaderType $balanceHeader)
    {
        $this->balanceHeader = $balanceHeader;
        return $this;
    }

    /**
     * Adds as balanceItem
     *
     * @return self
     * @param \Pohoda\Balance\BalanceItemType $balanceItem
     */
    public function addToBalanceItem(\Pohoda\Balance\BalanceItemType $balanceItem)
    {
        $this->balanceItem[] = $balanceItem;
        return $this;
    }

    /**
     * isset balanceItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBalanceItem($index)
    {
        return isset($this->balanceItem[$index]);
    }

    /**
     * unset balanceItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBalanceItem($index)
    {
        unset($this->balanceItem[$index]);
    }

    /**
     * Gets as balanceItem
     *
     * @return \Pohoda\Balance\BalanceItemType[]
     */
    public function getBalanceItem()
    {
        return $this->balanceItem;
    }

    /**
     * Sets a new balanceItem
     *
     * @param \Pohoda\Balance\BalanceItemType[] $balanceItem
     * @return self
     */
    public function setBalanceItem(array $balanceItem)
    {
        $this->balanceItem = $balanceItem;
        return $this;
    }
}
