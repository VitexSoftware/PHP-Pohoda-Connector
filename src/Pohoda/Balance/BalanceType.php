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

namespace Pohoda\Balance;

/**
 * Class representing BalanceType.
 *
 * XSD Type: balanceType
 */
class BalanceType
{
    private ?string $version = null;
    private ?\Pohoda\Balance\BalanceHeaderType $balanceHeader = null;

    /**
     * @var \Pohoda\Balance\BalanceItemType[]
     */
    private array $balanceItem = [
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
     * Gets as balanceHeader.
     *
     * @return \Pohoda\Balance\BalanceHeaderType
     */
    public function getBalanceHeader()
    {
        return $this->balanceHeader;
    }

    /**
     * Sets a new balanceHeader.
     *
     * @return self
     */
    public function setBalanceHeader(\Pohoda\Balance\BalanceHeaderType $balanceHeader)
    {
        $this->balanceHeader = $balanceHeader;

        return $this;
    }

    /**
     * Adds as balanceItem.
     *
     * @return self
     */
    public function addToBalanceItem(\Pohoda\Balance\BalanceItemType $balanceItem)
    {
        $this->balanceItem[] = $balanceItem;

        return $this;
    }

    /**
     * isset balanceItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBalanceItem($index)
    {
        return isset($this->balanceItem[$index]);
    }

    /**
     * unset balanceItem.
     *
     * @param int|string $index
     */
    public function unsetBalanceItem($index): void
    {
        unset($this->balanceItem[$index]);
    }

    /**
     * Gets as balanceItem.
     *
     * @return \Pohoda\Balance\BalanceItemType[]
     */
    public function getBalanceItem()
    {
        return $this->balanceItem;
    }

    /**
     * Sets a new balanceItem.
     *
     * @param \Pohoda\Balance\BalanceItemType[] $balanceItem
     *
     * @return self
     */
    public function setBalanceItem(array $balanceItem)
    {
        $this->balanceItem = $balanceItem;

        return $this;
    }
}
