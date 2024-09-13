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

namespace Pohoda\Bank;

/**
 * Class representing BankDetailType.
 *
 * XSD Type: bankDetailType
 */
class BankDetailType
{
    /**
     * @var \Pohoda\Bank\BankItemType[]
     */
    private array $bankItem = [
    ];

    /**
     * Adds as bankItem.
     *
     * @return self
     */
    public function addToBankItem(\Pohoda\Bank\BankItemType $bankItem)
    {
        $this->bankItem[] = $bankItem;

        return $this;
    }

    /**
     * isset bankItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankItem($index)
    {
        return isset($this->bankItem[$index]);
    }

    /**
     * unset bankItem.
     *
     * @param int|string $index
     */
    public function unsetBankItem($index): void
    {
        unset($this->bankItem[$index]);
    }

    /**
     * Gets as bankItem.
     *
     * @return \Pohoda\Bank\BankItemType[]
     */
    public function getBankItem()
    {
        return $this->bankItem;
    }

    /**
     * Sets a new bankItem.
     *
     * @param \Pohoda\Bank\BankItemType[] $bankItem
     *
     * @return self
     */
    public function setBankItem(array $bankItem)
    {
        $this->bankItem = $bankItem;

        return $this;
    }
}
