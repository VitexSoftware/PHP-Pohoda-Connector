<?php

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaHeaderType
 *
 *
 * XSD Type: prodejkaHeaderType
 */
class ProdejkaHeaderType
{
    /**
     * ID záznamu. Používá se při requestu.
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
     * Typ dokladu. Pokud není zadán, bude nastavena výchozí hodnota "prodejka".
     *
     * @var string $prodejkaType
     */
    private $prodejkaType = null;

    /**
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @var string $storno
     */
    private $storno = null;

    /**
     * Evidenční číslo dokladu.
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     *
     * @var \Pohoda\Type\AccountingType $accounting
     */
    private $accounting = null;

    /**
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Zákazníkova adresa.
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Forma úhrady
     *
     * @var \Pohoda\Type\PaymentType $paymentType
     */
    private $paymentType = null;

    /**
     * Cenová hladinu odběratele.
     *
     * @var \Pohoda\Type\RefType $priceLevel
     */
    private $priceLevel = null;

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
     * Kasa.
     *
     * @var \Pohoda\Type\RefType $kasa
     */
    private $kasa = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Interní poznámka.
     *
     * @var string $intNote
     */
    private $intNote = null;

    /**
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @var string $histRate
     */
    private $histRate = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @var string $lock1
     */
    private $lock1 = null;

    /**
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @var string $lock2
     */
    private $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[] $labels
     */
    private $labels = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Podmíněná kontrola dokladu.
     *
     * @var \Pohoda\Type\TypeValidateType $validate
     */
    private $validate = null;

    /**
     * Gets as id
     *
     * ID záznamu. Používá se při requestu.
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
     * ID záznamu. Používá se při requestu.
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
     * Gets as prodejkaType
     *
     * Typ dokladu. Pokud není zadán, bude nastavena výchozí hodnota "prodejka".
     *
     * @return string
     */
    public function getProdejkaType()
    {
        return $this->prodejkaType;
    }

    /**
     * Sets a new prodejkaType
     *
     * Typ dokladu. Pokud není zadán, bude nastavena výchozí hodnota "prodejka".
     *
     * @param string $prodejkaType
     * @return self
     */
    public function setProdejkaType($prodejkaType)
    {
        $this->prodejkaType = $prodejkaType;
        return $this;
    }

    /**
     * Gets as storno
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @return string
     */
    public function getStorno()
    {
        return $this->storno;
    }

    /**
     * Sets a new storno
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @param string $storno
     * @return self
     */
    public function setStorno($storno)
    {
        $this->storno = $storno;
        return $this;
    }

    /**
     * Gets as number
     *
     * Evidenční číslo dokladu.
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo dokladu.
     *
     * @param \Pohoda\Type\NumberType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as date
     *
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     *
     * @param \Pohoda\Type\AccountingType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\AccountingType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as partnerIdentity
     *
     * Zákazníkova adresa.
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
     * Zákazníkova adresa.
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
     * Gets as paymentType
     *
     * Forma úhrady
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
     * Forma úhrady
     *
     * @param \Pohoda\Type\PaymentType $paymentType
     * @return self
     */
    public function setPaymentType(?\Pohoda\Type\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as priceLevel
     *
     * Cenová hladinu odběratele.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Sets a new priceLevel
     *
     * Cenová hladinu odběratele.
     *
     * @param \Pohoda\Type\RefType $priceLevel
     * @return self
     */
    public function setPriceLevel(?\Pohoda\Type\RefType $priceLevel = null)
    {
        $this->priceLevel = $priceLevel;
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

    /**
     * Gets as kasa
     *
     * Kasa.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getKasa()
    {
        return $this->kasa;
    }

    /**
     * Sets a new kasa
     *
     * Kasa.
     *
     * @param \Pohoda\Type\RefType $kasa
     * @return self
     */
    public function setKasa(?\Pohoda\Type\RefType $kasa = null)
    {
        $this->kasa = $kasa;
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
     * Gets as intNote
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote
     *
     * Interní poznámka.
     *
     * @param string $intNote
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;
        return $this;
    }

    /**
     * Gets as histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @return string
     */
    public function getHistRate()
    {
        return $this->histRate;
    }

    /**
     * Sets a new histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @param string $histRate
     * @return self
     */
    public function setHistRate($histRate)
    {
        $this->histRate = $histRate;
        return $this;
    }

    /**
     * Gets as lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @return string
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;
        return $this;
    }

    /**
     * Gets as lock2
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;
        return $this;
    }

    /**
     * Gets as markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }

    /**
     * Adds as label
     *
     * Štítky záznamu.
     *
     * @return self
     * @param \Pohoda\Type\LabelType $label
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * isset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabels($index)
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     * @return self
     */
    public function setLabels(array $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Volitelný parametr.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Gets as validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @return \Pohoda\Type\TypeValidateType
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Sets a new validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @param \Pohoda\Type\TypeValidateType $validate
     * @return self
     */
    public function setValidate(?\Pohoda\Type\TypeValidateType $validate = null)
    {
        $this->validate = $validate;
        return $this;
    }
}

