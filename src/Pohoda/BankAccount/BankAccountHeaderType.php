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

namespace Pohoda\BankAccount;

/**
 * Class representing BankAccountHeaderType.
 *
 * XSD Type: bankAccountHeaderType
 */
class BankAccountHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Zkratka bankovního účtu.
     */
    private ?string $ids = null;

    /**
     * Číslo účtu.
     */
    private ?string $numberAccount = null;

    /**
     * Kód banky.
     */
    private ?string $codeBank = null;

    /**
     * Název banky.
     */
    private ?string $nameBank = null;

    /**
     * Specifický symbol.
     */
    private ?string $symSpec = null;

    /**
     * IBAN.
     */
    private ?string $iBAN = null;

    /**
     * SWIFT.
     */
    private ?string $sWIFT = null;

    /**
     * Analytický účet.
     */
    private ?\Pohoda\Type\RefType $analyticAccount = null;

    /**
     * Devizový bankovní účet. Pokud je uveden tento element, bude vytvořen cizoměnový bankovní účet. V ostatních případech tuzemský bankovní účet.
     */
    private ?\Pohoda\BankAccount\CurrencyBankAccountType $currencyBankAccount = null;

    /**
     * Datum zrušení bankovního účtu.
     */
    private ?\DateTime $cancelled = null;

    /**
     * Služba Homebanking.
     */
    private ?string $homebanking = null;

    /**
     * Platební terminál.
     */
    private ?string $payTerminal = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as id.
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Gets as ids.
     *
     * Zkratka bankovního účtu.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids.
     *
     * Zkratka bankovního účtu.
     *
     * @param string $ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Gets as numberAccount.
     *
     * Číslo účtu.
     *
     * @return string
     */
    public function getNumberAccount()
    {
        return $this->numberAccount;
    }

    /**
     * Sets a new numberAccount.
     *
     * Číslo účtu.
     *
     * @param string $numberAccount
     *
     * @return self
     */
    public function setNumberAccount($numberAccount)
    {
        $this->numberAccount = $numberAccount;

        return $this;
    }

    /**
     * Gets as codeBank.
     *
     * Kód banky
     *
     * @return string
     */
    public function getCodeBank()
    {
        return $this->codeBank;
    }

    /**
     * Sets a new codeBank.
     *
     * Kód banky
     *
     * @param string $codeBank
     *
     * @return self
     */
    public function setCodeBank($codeBank)
    {
        $this->codeBank = $codeBank;

        return $this;
    }

    /**
     * Gets as nameBank.
     *
     * Název banky.
     *
     * @return string
     */
    public function getNameBank()
    {
        return $this->nameBank;
    }

    /**
     * Sets a new nameBank.
     *
     * Název banky.
     *
     * @param string $nameBank
     *
     * @return self
     */
    public function setNameBank($nameBank)
    {
        $this->nameBank = $nameBank;

        return $this;
    }

    /**
     * Gets as symSpec.
     *
     * Specifický symbol.
     *
     * @return string
     */
    public function getSymSpec()
    {
        return $this->symSpec;
    }

    /**
     * Sets a new symSpec.
     *
     * Specifický symbol.
     *
     * @param string $symSpec
     *
     * @return self
     */
    public function setSymSpec($symSpec)
    {
        $this->symSpec = $symSpec;

        return $this;
    }

    /**
     * Gets as iBAN.
     *
     * IBAN.
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->iBAN;
    }

    /**
     * Sets a new iBAN.
     *
     * IBAN.
     *
     * @param string $iBAN
     *
     * @return self
     */
    public function setIBAN($iBAN)
    {
        $this->iBAN = $iBAN;

        return $this;
    }

    /**
     * Gets as sWIFT.
     *
     * SWIFT.
     *
     * @return string
     */
    public function getSWIFT()
    {
        return $this->sWIFT;
    }

    /**
     * Sets a new sWIFT.
     *
     * SWIFT.
     *
     * @param string $sWIFT
     *
     * @return self
     */
    public function setSWIFT($sWIFT)
    {
        $this->sWIFT = $sWIFT;

        return $this;
    }

    /**
     * Gets as analyticAccount.
     *
     * Analytický účet.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAnalyticAccount()
    {
        return $this->analyticAccount;
    }

    /**
     * Sets a new analyticAccount.
     *
     * Analytický účet.
     *
     * @return self
     */
    public function setAnalyticAccount(?\Pohoda\Type\RefType $analyticAccount = null)
    {
        $this->analyticAccount = $analyticAccount;

        return $this;
    }

    /**
     * Gets as currencyBankAccount.
     *
     * Devizový bankovní účet. Pokud je uveden tento element, bude vytvořen cizoměnový bankovní účet. V ostatních případech tuzemský bankovní účet.
     *
     * @return \Pohoda\BankAccount\CurrencyBankAccountType
     */
    public function getCurrencyBankAccount()
    {
        return $this->currencyBankAccount;
    }

    /**
     * Sets a new currencyBankAccount.
     *
     * Devizový bankovní účet. Pokud je uveden tento element, bude vytvořen cizoměnový bankovní účet. V ostatních případech tuzemský bankovní účet.
     *
     * @return self
     */
    public function setCurrencyBankAccount(?\Pohoda\BankAccount\CurrencyBankAccountType $currencyBankAccount = null)
    {
        $this->currencyBankAccount = $currencyBankAccount;

        return $this;
    }

    /**
     * Gets as cancelled.
     *
     * Datum zrušení bankovního účtu.
     *
     * @return \DateTime
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * Sets a new cancelled.
     *
     * Datum zrušení bankovního účtu.
     *
     * @return self
     */
    public function setCancelled(?\DateTime $cancelled = null)
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    /**
     * Gets as homebanking.
     *
     * Služba Homebanking.
     *
     * @return string
     */
    public function getHomebanking()
    {
        return $this->homebanking;
    }

    /**
     * Sets a new homebanking.
     *
     * Služba Homebanking.
     *
     * @param string $homebanking
     *
     * @return self
     */
    public function setHomebanking($homebanking)
    {
        $this->homebanking = $homebanking;

        return $this;
    }

    /**
     * Gets as payTerminal.
     *
     * Platební terminál.
     *
     * @return string
     */
    public function getPayTerminal()
    {
        return $this->payTerminal;
    }

    /**
     * Sets a new payTerminal.
     *
     * Platební terminál.
     *
     * @param string $payTerminal
     *
     * @return self
     */
    public function setPayTerminal($payTerminal)
    {
        $this->payTerminal = $payTerminal;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Poznámka
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }
}
