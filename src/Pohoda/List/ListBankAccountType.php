<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListBankAccountType
 *
 *
 * XSD Type: listBankAccountType
 */
class ListBankAccountType extends ListVersionType
{
    /**
     * @var \Pohoda\BankAccount\BankAccountType[] $bankAccount
     */
    private $bankAccount = [
        
    ];

    /**
     * Adds as bankAccount
     *
     * @return self
     * @param \Pohoda\BankAccount\BankAccountType $bankAccount
     */
    public function addToBankAccount(\Pohoda\BankAccount\BankAccountType $bankAccount)
    {
        $this->bankAccount[] = $bankAccount;
        return $this;
    }

    /**
     * isset bankAccount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankAccount($index)
    {
        return isset($this->bankAccount[$index]);
    }

    /**
     * unset bankAccount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankAccount($index)
    {
        unset($this->bankAccount[$index]);
    }

    /**
     * Gets as bankAccount
     *
     * @return \Pohoda\BankAccount\BankAccountType[]
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param \Pohoda\BankAccount\BankAccountType[] $bankAccount
     * @return self
     */
    public function setBankAccount(array $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }
}

