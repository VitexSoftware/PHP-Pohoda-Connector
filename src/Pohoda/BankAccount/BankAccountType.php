<?php

namespace Pohoda\BankAccount;

/**
 * Class representing BankAccountType
 *
 *
 * XSD Type: bankAccountType
 */
class BankAccountType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\BankAccount\ActionTypeType $actionType
     */
    private $actionType = null;

    /**
     * @var \Pohoda\BankAccount\BankAccountHeaderType $bankAccountHeader
     */
    private $bankAccountHeader = null;

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
     * Gets as actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\BankAccount\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\BankAccount\ActionTypeType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\BankAccount\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as bankAccountHeader
     *
     * @return \Pohoda\BankAccount\BankAccountHeaderType
     */
    public function getBankAccountHeader()
    {
        return $this->bankAccountHeader;
    }

    /**
     * Sets a new bankAccountHeader
     *
     * @param \Pohoda\BankAccount\BankAccountHeaderType $bankAccountHeader
     * @return self
     */
    public function setBankAccountHeader(?\Pohoda\BankAccount\BankAccountHeaderType $bankAccountHeader = null)
    {
        $this->bankAccountHeader = $bankAccountHeader;
        return $this;
    }
}

