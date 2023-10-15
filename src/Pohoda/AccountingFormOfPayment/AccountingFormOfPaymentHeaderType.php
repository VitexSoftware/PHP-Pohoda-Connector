<?php

namespace Pohoda\AccountingFormOfPayment;

/**
 * Class representing AccountingFormOfPaymentHeaderType
 *
 *
 * XSD Type: accountingFormOfPaymentHeaderType
 */
class AccountingFormOfPaymentHeaderType
{
    /**
     * ID záznamu(pouze pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Středisko.
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Forma úhrady.
     *
     * @var \Pohoda\Type\PaymentType $paymentType
     */
    private $paymentType = null;

    /**
     * Zaúčtování.
     *
     * @var string $accountingDestination
     */
    private $accountingDestination = null;

    /**
     * Bankovní účet nebo pokladna.
     *
     * @var \Pohoda\Type\AccountType $account
     */
    private $account = null;

    /**
     * Nastavení účtování formy úhrady: "na střediska / samostatně".
     *
     * @var string $setTheAccountIndependently
     */
    private $setTheAccountIndependently = null;

    /**
     * Účet MD(pouze pro účetnictví typu "PU").
     *
     * @var string $debit
     */
    private $debit = null;

    /**
     * Účet DAL(pouze pro účetnictví typu "PU").
     *
     * @var string $credit
     */
    private $credit = null;

    /**
     * Předkontace(pouze pro účetnictví typu "DE").
     *
     * @var \Pohoda\Type\RefType $accounting
     */
    private $accounting = null;

    /**
     * Gets as id
     *
     * ID záznamu(pouze pro export).
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
     * ID záznamu(pouze pro export).
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
     * Gets as extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * Středisko.
     *
     * @param \Pohoda\Type\RefType $centre
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Forma úhrady.
     *
     * @return \Pohoda\Type\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Forma úhrady.
     *
     * @param \Pohoda\Type\PaymentType $paymentType
     * @return self
     */
    public function setPaymentType(\Pohoda\Type\PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as accountingDestination
     *
     * Zaúčtování.
     *
     * @return string
     */
    public function getAccountingDestination()
    {
        return $this->accountingDestination;
    }

    /**
     * Sets a new accountingDestination
     *
     * Zaúčtování.
     *
     * @param string $accountingDestination
     * @return self
     */
    public function setAccountingDestination($accountingDestination)
    {
        $this->accountingDestination = $accountingDestination;
        return $this;
    }

    /**
     * Gets as account
     *
     * Bankovní účet nebo pokladna.
     *
     * @return \Pohoda\Type\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Bankovní účet nebo pokladna.
     *
     * @param \Pohoda\Type\AccountType $account
     * @return self
     */
    public function setAccount(\Pohoda\Type\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as setTheAccountIndependently
     *
     * Nastavení účtování formy úhrady: "na střediska / samostatně".
     *
     * @return string
     */
    public function getSetTheAccountIndependently()
    {
        return $this->setTheAccountIndependently;
    }

    /**
     * Sets a new setTheAccountIndependently
     *
     * Nastavení účtování formy úhrady: "na střediska / samostatně".
     *
     * @param string $setTheAccountIndependently
     * @return self
     */
    public function setSetTheAccountIndependently($setTheAccountIndependently)
    {
        $this->setTheAccountIndependently = $setTheAccountIndependently;
        return $this;
    }

    /**
     * Gets as debit
     *
     * Účet MD(pouze pro účetnictví typu "PU").
     *
     * @return string
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Sets a new debit
     *
     * Účet MD(pouze pro účetnictví typu "PU").
     *
     * @param string $debit
     * @return self
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Gets as credit
     *
     * Účet DAL(pouze pro účetnictví typu "PU").
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Sets a new credit
     *
     * Účet DAL(pouze pro účetnictví typu "PU").
     *
     * @param string $credit
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace(pouze pro účetnictví typu "DE").
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace(pouze pro účetnictví typu "DE").
     *
     * @param \Pohoda\Type\RefType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }
}
