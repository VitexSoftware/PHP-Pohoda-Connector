<?php

namespace Pohoda\Balance;

/**
 * Class representing BalanceItemType
 *
 *
 * XSD Type: balanceItemType
 */
class BalanceItemType
{
    /**
     * ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Číslo dokladu
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Adresa partnera k položce.
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Zdrojová agenda dokladu položky salda.
     *
     * @var string $sourceAgenda
     */
    private $sourceAgenda = null;

    /**
     * Číslo účtu dokladu položky salda.
     *
     * @var string $accountNo
     */
    private $accountNo = null;

    /**
     * Párovací symbol.
     *
     * @var string $pairSymbol
     */
    private $pairSymbol = null;

    /**
     * Datum vystavení dokladu položky salda.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Datum splatnosti dokladu položky salda.
     *
     * @var \DateTime $dueDate
     */
    private $dueDate = null;

    /**
     * Počet dnů do splatnosti dokladu položky salda.
     *
     * @var int $dueDays
     */
    private $dueDays = null;

    /**
     * Text dokladu položky salda.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Částka MD (do verze 2.0).
     *
     * @var float $amountMD
     */
    private $amountMD = null;

    /**
     * Částka D (do verze 2.0).
     *
     * @var float $amountD
     */
    private $amountD = null;

    /**
     * Částka zůstatku (do verze 2.0).
     *
     * @var mixed $amountRemain
     */
    private $amountRemain = null;

    /**
     * Částky v CZK (od verze 2.0).
     *
     * @var \Pohoda\Balance\HomeCurrencyType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Částky v cizí měně (od verze 2.0).
     *
     * @var \Pohoda\Balance\ForeignCurrencyType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Gets as id
     *
     * ID záznamu.
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
     * ID záznamu.
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
     * Gets as number
     *
     * Číslo dokladu
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Číslo dokladu
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as partnerIdentity
     *
     * Adresa partnera k položce.
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity
     *
     * Adresa partnera k položce.
     *
     * @param \Pohoda\Type\AddressType $partnerIdentity
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;
        return $this;
    }

    /**
     * Gets as sourceAgenda
     *
     * Zdrojová agenda dokladu položky salda.
     *
     * @return string
     */
    public function getSourceAgenda()
    {
        return $this->sourceAgenda;
    }

    /**
     * Sets a new sourceAgenda
     *
     * Zdrojová agenda dokladu položky salda.
     *
     * @param string $sourceAgenda
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;
        return $this;
    }

    /**
     * Gets as accountNo
     *
     * Číslo účtu dokladu položky salda.
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets a new accountNo
     *
     * Číslo účtu dokladu položky salda.
     *
     * @param string $accountNo
     * @return self
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }

    /**
     * Gets as pairSymbol
     *
     * Párovací symbol.
     *
     * @return string
     */
    public function getPairSymbol()
    {
        return $this->pairSymbol;
    }

    /**
     * Sets a new pairSymbol
     *
     * Párovací symbol.
     *
     * @param string $pairSymbol
     * @return self
     */
    public function setPairSymbol($pairSymbol)
    {
        $this->pairSymbol = $pairSymbol;
        return $this;
    }

    /**
     * Gets as date
     *
     * Datum vystavení dokladu položky salda.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Datum vystavení dokladu položky salda.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * Datum splatnosti dokladu položky salda.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * Datum splatnosti dokladu položky salda.
     *
     * @param \DateTime $dueDate
     * @return self
     */
    public function setDueDate(?\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as dueDays
     *
     * Počet dnů do splatnosti dokladu položky salda.
     *
     * @return int
     */
    public function getDueDays()
    {
        return $this->dueDays;
    }

    /**
     * Sets a new dueDays
     *
     * Počet dnů do splatnosti dokladu položky salda.
     *
     * @param int $dueDays
     * @return self
     */
    public function setDueDays($dueDays)
    {
        $this->dueDays = $dueDays;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu položky salda.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text dokladu položky salda.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as amountMD
     *
     * Částka MD (do verze 2.0).
     *
     * @return float
     */
    public function getAmountMD()
    {
        return $this->amountMD;
    }

    /**
     * Sets a new amountMD
     *
     * Částka MD (do verze 2.0).
     *
     * @param float $amountMD
     * @return self
     */
    public function setAmountMD($amountMD)
    {
        $this->amountMD = $amountMD;
        return $this;
    }

    /**
     * Gets as amountD
     *
     * Částka D (do verze 2.0).
     *
     * @return float
     */
    public function getAmountD()
    {
        return $this->amountD;
    }

    /**
     * Sets a new amountD
     *
     * Částka D (do verze 2.0).
     *
     * @param float $amountD
     * @return self
     */
    public function setAmountD($amountD)
    {
        $this->amountD = $amountD;
        return $this;
    }

    /**
     * Gets as amountRemain
     *
     * Částka zůstatku (do verze 2.0).
     *
     * @return mixed
     */
    public function getAmountRemain()
    {
        return $this->amountRemain;
    }

    /**
     * Sets a new amountRemain
     *
     * Částka zůstatku (do verze 2.0).
     *
     * @param mixed $amountRemain
     * @return self
     */
    public function setAmountRemain($amountRemain)
    {
        $this->amountRemain = $amountRemain;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Částky v CZK (od verze 2.0).
     *
     * @return \Pohoda\Balance\HomeCurrencyType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Částky v CZK (od verze 2.0).
     *
     * @param \Pohoda\Balance\HomeCurrencyType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Balance\HomeCurrencyType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Částky v cizí měně (od verze 2.0).
     *
     * @return \Pohoda\Balance\ForeignCurrencyType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Částky v cizí měně (od verze 2.0).
     *
     * @param \Pohoda\Balance\ForeignCurrencyType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Balance\ForeignCurrencyType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }
}

