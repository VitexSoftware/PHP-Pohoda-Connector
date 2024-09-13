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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListBankAccountType.
 *
 * XSD Type: listBankAccountType
 */
class ListBankAccountType extends ListVersionType
{
    /**
     * @var \Pohoda\BankAccount\BankAccountType[]
     */
    private array $bankAccount = [
    ];

    /**
     * Adds as bankAccount.
     *
     * @return self
     */
    public function addToBankAccount(\Pohoda\BankAccount\BankAccountType $bankAccount)
    {
        $this->bankAccount[] = $bankAccount;

        return $this;
    }

    /**
     * isset bankAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankAccount($index)
    {
        return isset($this->bankAccount[$index]);
    }

    /**
     * unset bankAccount.
     *
     * @param int|string $index
     */
    public function unsetBankAccount($index): void
    {
        unset($this->bankAccount[$index]);
    }

    /**
     * Gets as bankAccount.
     *
     * @return \Pohoda\BankAccount\BankAccountType[]
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount.
     *
     * @param \Pohoda\BankAccount\BankAccountType[] $bankAccount
     *
     * @return self
     */
    public function setBankAccount(?array $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }
}
