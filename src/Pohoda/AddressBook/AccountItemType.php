<?php

namespace Pohoda\AddressBook;

/**
 * Class representing AccountItemType
 *
 *
 * XSD Type: accountItemType
 */
class AccountItemType
{
    /**
     * Typ práce s bankovním účtem. Výchozí hodnota je přidání nové bankovního účtu.
     *
     * @var \Pohoda\Type\ActionTypeItemType $actionType
     */
    private $actionType = null;

    /**
     * ID položky dokladu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Číslo bankovního účtu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var string $accountNumber
     */
    private $accountNumber = null;

    /**
     * Specificky symbol.
     *
     * @var string $symSpec
     */
    private $symSpec = null;

    /**
     * Kód banky.
     *
     * @var string $bankCode
     */
    private $bankCode = null;

    /**
     * Výchozí účet.
     *
     * @var string $defaultAccount
     */
    private $defaultAccount = null;

    /**
     * Gets as actionType
     *
     * Typ práce s bankovním účtem. Výchozí hodnota je přidání nové bankovního účtu.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s bankovním účtem. Výchozí hodnota je přidání nové bankovního účtu.
     *
     * @param \Pohoda\Type\ActionTypeItemType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as id
     *
     * ID položky dokladu (jen pro export).
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID položky dokladu (jen pro export).
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * Číslo bankovního účtu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * Číslo bankovního účtu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as symSpec
     *
     * Specificky symbol.
     *
     * @return string
     */
    public function getSymSpec()
    {
        return $this->symSpec;
    }

    /**
     * Sets a new symSpec
     *
     * Specificky symbol.
     *
     * @param string $symSpec
     * @return self
     */
    public function setSymSpec($symSpec)
    {
        $this->symSpec = $symSpec;
        return $this;
    }

    /**
     * Gets as bankCode
     *
     * Kód banky.
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets a new bankCode
     *
     * Kód banky.
     *
     * @param string $bankCode
     * @return self
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * Gets as defaultAccount
     *
     * Výchozí účet.
     *
     * @return string
     */
    public function getDefaultAccount()
    {
        return $this->defaultAccount;
    }

    /**
     * Sets a new defaultAccount
     *
     * Výchozí účet.
     *
     * @param string $defaultAccount
     * @return self
     */
    public function setDefaultAccount($defaultAccount)
    {
        $this->defaultAccount = $defaultAccount;
        return $this;
    }
}
