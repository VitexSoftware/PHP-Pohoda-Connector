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

namespace Pohoda\AccountingFormOfPayment;

/**
 * Class representing AccountingFormOfPaymentHeaderType.
 *
 * XSD Type: accountingFormOfPaymentHeaderType
 */
class AccountingFormOfPaymentHeaderType
{
    /**
     * ID záznamu(pouze pro export).
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Středisko.
     */
    private ?\Pohoda\Type\RefType $centre = null;

    /**
     * Forma úhrady.
     */
    private ?\Pohoda\Type\PaymentType $paymentType = null;

    /**
     * Zaúčtování.
     */
    private ?string $accountingDestination = null;

    /**
     * Bankovní účet nebo pokladna.
     */
    private ?\Pohoda\Type\AccountType $account = null;

    /**
     * Nastavení účtování formy úhrady: "na střediska / samostatně".
     */
    private ?string $setTheAccountIndependently = null;

    /**
     * Účet MD(pouze pro účetnictví typu "PU").
     */
    private ?string $debit = null;

    /**
     * Účet DAL(pouze pro účetnictví typu "PU").
     */
    private ?string $credit = null;

    /**
     * Předkontace(pouze pro účetnictví typu "DE").
     */
    private ?\Pohoda\Type\RefType $accounting = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID záznamu(pouze pro export).
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
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
     * Sets a new extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as centre.
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
     * Sets a new centre.
     *
     * Středisko.
     *
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Gets as paymentType.
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
     * Sets a new paymentType.
     *
     * Forma úhrady.
     *
     * @return self
     */
    public function setPaymentType(\Pohoda\Type\PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as accountingDestination.
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
     * Sets a new accountingDestination.
     *
     * Zaúčtování.
     *
     * @param string $accountingDestination
     *
     * @return self
     */
    public function setAccountingDestination($accountingDestination)
    {
        $this->accountingDestination = $accountingDestination;

        return $this;
    }

    /**
     * Gets as account.
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
     * Sets a new account.
     *
     * Bankovní účet nebo pokladna.
     *
     * @return self
     */
    public function setAccount(\Pohoda\Type\AccountType $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets as setTheAccountIndependently.
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
     * Sets a new setTheAccountIndependently.
     *
     * Nastavení účtování formy úhrady: "na střediska / samostatně".
     *
     * @param string $setTheAccountIndependently
     *
     * @return self
     */
    public function setSetTheAccountIndependently($setTheAccountIndependently)
    {
        $this->setTheAccountIndependently = $setTheAccountIndependently;

        return $this;
    }

    /**
     * Gets as debit.
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
     * Sets a new debit.
     *
     * Účet MD(pouze pro účetnictví typu "PU").
     *
     * @param string $debit
     *
     * @return self
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Gets as credit.
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
     * Sets a new credit.
     *
     * Účet DAL(pouze pro účetnictví typu "PU").
     *
     * @param string $credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Gets as accounting.
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
     * Sets a new accounting.
     *
     * Předkontace(pouze pro účetnictví typu "DE").
     *
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;

        return $this;
    }
}
