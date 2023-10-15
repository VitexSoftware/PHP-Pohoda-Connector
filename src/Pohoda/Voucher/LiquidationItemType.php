<?php

namespace Pohoda\Voucher;

/**
 * Class representing LiquidationItemType
 *
 *
 * XSD Type: liquidationItemType
 */
class LiquidationItemType
{
    /**
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Jednotková cena s/bez DPH. Pri likvidaci dokladu vždy nastaveno "false" (bez DPH).
     *
     * @var string $payVAT
     */
    private $payVAT = null;

    /**
     * Sazba DPH.
     *
     * @var \Pohoda\Type\VatRateType $rateVAT
     */
    private $rateVAT = null;

    /**
     * Kč.
     *
     * @var \Pohoda\Type\TypeCurrencyHomeItem2Type $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Pár. symbol
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Předkontace.
     *
     * @var \Pohoda\Type\RefType $accounting
     */
    private $accounting = null;

    /**
     * Členění DPH.
     *
     * @var \Pohoda\Type\ClassificationVATType $classificationVAT
     */
    private $classificationVAT = null;

    /**
     * Členění KV DPH (pouze SK verze).
     *
     * @var \Pohoda\Type\RefType $classificationKVDPH
     */
    private $classificationKVDPH = null;

    /**
     * Středisko.
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Činnost.
     *
     * @var \Pohoda\Type\RefType $activity
     */
    private $activity = null;

    /**
     * Zakázka.
     *
     * @var \Pohoda\Type\RefType $contract
     */
    private $contract = null;

    /**
     * Gets as text
     *
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
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
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
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
     * Gets as quantity
     *
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as payVAT
     *
     * Jednotková cena s/bez DPH. Pri likvidaci dokladu vždy nastaveno "false" (bez DPH).
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT
     *
     * Jednotková cena s/bez DPH. Pri likvidaci dokladu vždy nastaveno "false" (bez DPH).
     *
     * @param string $payVAT
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;
        return $this;
    }

    /**
     * Gets as rateVAT
     *
     * Sazba DPH.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getRateVAT()
    {
        return $this->rateVAT;
    }

    /**
     * Sets a new rateVAT
     *
     * Sazba DPH.
     *
     * @param \Pohoda\Type\VatRateType $rateVAT
     * @return self
     */
    public function setRateVAT(\Pohoda\Type\VatRateType $rateVAT)
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Kč.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItem2Type
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Kč.
     *
     * @param \Pohoda\Type\TypeCurrencyHomeItem2Type $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItem2Type $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as symPar
     *
     * Pár. symbol
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar
     *
     * Pár. symbol
     *
     * @param string $symPar
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace.
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
     * Předkontace.
     *
     * @param \Pohoda\Type\RefType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as classificationVAT
     *
     * Členění DPH.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT
     *
     * Členění DPH.
     *
     * @param \Pohoda\Type\ClassificationVATType $classificationVAT
     * @return self
     */
    public function setClassificationVAT(?\Pohoda\Type\ClassificationVATType $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;
        return $this;
    }

    /**
     * Gets as classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPH()
    {
        return $this->classificationKVDPH;
    }

    /**
     * Sets a new classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @param \Pohoda\Type\RefType $classificationKVDPH
     * @return self
     */
    public function setClassificationKVDPH(?\Pohoda\Type\RefType $classificationKVDPH = null)
    {
        $this->classificationKVDPH = $classificationKVDPH;
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
     * Gets as activity
     *
     * Činnost.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Činnost.
     *
     * @param \Pohoda\Type\RefType $activity
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * Zakázka.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * Zakázka.
     *
     * @param \Pohoda\Type\RefType $contract
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }
}

