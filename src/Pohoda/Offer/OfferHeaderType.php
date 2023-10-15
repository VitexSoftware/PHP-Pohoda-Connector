<?php

namespace Pohoda\Offer;

/**
 * Class representing OfferHeaderType
 *
 *
 * XSD Type: offerHeaderType
 */
class OfferHeaderType
{
    /**
     * ID záznamu. Používá se jen při exportu dokladu.
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
     * Typ nabídky.
     *
     * @var string $offerType
     */
    private $offerType = null;

    /**
     * Evidenční číslo dokladu.
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Datum vystavení nabídky. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Platnost.
     *
     * @var \DateTime $validTill
     */
    private $validTill = null;

    /**
     * Text dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Osobní adresa.
     *
     * @var \Pohoda\Type\MyAddressType $myIdentity
     */
    private $myIdentity = null;

    /**
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
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
     * Registrace DPH v EU.
     *
     * @var \Pohoda\Type\RefTypeRegVATinEUType $regVATinEU
     */
    private $regVATinEU = null;

    /**
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @var \Pohoda\Type\MOSStypeType $mOSS
     */
    private $mOSS = null;

    /**
     * Důkazní prostředky (OSS).
     *
     * @var string[] $evidentiaryResourcesMOSS
     */
    private $evidentiaryResourcesMOSS = null;

    /**
     * Účetní období (OSS).
     *
     * @var string $accountingPeriodMOSS
     */
    private $accountingPeriodMOSS = null;

    /**
     * Trvalý doklad. Příznak pro označení trvalé nabídky. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     *
     * @var string $permanentDocument
     */
    private $permanentDocument = null;

    /**
     * Vyřízeno.
     *
     * @var string $isExecuted
     */
    private $isExecuted = null;

    /**
     * Přeneseno. Používá se jen při exportu dokladu.
     *
     * @var string $isDelivered
     */
    private $isDelivered = null;

    /**
     * Podrobnosti.
     *
     * @var string $details
     */
    private $details = null;

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
     * Gets as id
     *
     * ID záznamu. Používá se jen při exportu dokladu.
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
     * ID záznamu. Používá se jen při exportu dokladu.
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
     * Gets as offerType
     *
     * Typ nabídky.
     *
     * @return string
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * Sets a new offerType
     *
     * Typ nabídky.
     *
     * @param string $offerType
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->offerType = $offerType;
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
     * Datum vystavení nabídky. Tento element je vyžadován při vytvoření dokladu.
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
     * Datum vystavení nabídky. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as validTill
     *
     * Platnost.
     *
     * @return \DateTime
     */
    public function getValidTill()
    {
        return $this->validTill;
    }

    /**
     * Sets a new validTill
     *
     * Platnost.
     *
     * @param \DateTime $validTill
     * @return self
     */
    public function setValidTill(?\DateTime $validTill = null)
    {
        $this->validTill = $validTill;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu.
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
     * Text dokladu.
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
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
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
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as myIdentity
     *
     * Osobní adresa.
     *
     * @return \Pohoda\Type\MyAddressType
     */
    public function getMyIdentity()
    {
        return $this->myIdentity;
    }

    /**
     * Sets a new myIdentity
     *
     * Osobní adresa.
     *
     * @param \Pohoda\Type\MyAddressType $myIdentity
     * @return self
     */
    public function setMyIdentity(?\Pohoda\Type\MyAddressType $myIdentity = null)
    {
        $this->myIdentity = $myIdentity;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
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
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
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
     * Gets as regVATinEU
     *
     * Registrace DPH v EU.
     *
     * @return \Pohoda\Type\RefTypeRegVATinEUType
     */
    public function getRegVATinEU()
    {
        return $this->regVATinEU;
    }

    /**
     * Sets a new regVATinEU
     *
     * Registrace DPH v EU.
     *
     * @param \Pohoda\Type\RefTypeRegVATinEUType $regVATinEU
     * @return self
     */
    public function setRegVATinEU(?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null)
    {
        $this->regVATinEU = $regVATinEU;
        return $this;
    }

    /**
     * Gets as mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getMOSS()
    {
        return $this->mOSS;
    }

    /**
     * Sets a new mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @param \Pohoda\Type\MOSStypeType $mOSS
     * @return self
     */
    public function setMOSS(?\Pohoda\Type\MOSStypeType $mOSS = null)
    {
        $this->mOSS = $mOSS;
        return $this;
    }

    /**
     * Adds as ids
     *
     * Důkazní prostředky (OSS).
     *
     * @return self
     * @param string $ids
     */
    public function addToEvidentiaryResourcesMOSS($ids)
    {
        $this->evidentiaryResourcesMOSS[] = $ids;
        return $this;
    }

    /**
     * isset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidentiaryResourcesMOSS($index)
    {
        return isset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * unset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidentiaryResourcesMOSS($index)
    {
        unset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * Gets as evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @return string[]
     */
    public function getEvidentiaryResourcesMOSS()
    {
        return $this->evidentiaryResourcesMOSS;
    }

    /**
     * Sets a new evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param string[] $evidentiaryResourcesMOSS
     * @return self
     */
    public function setEvidentiaryResourcesMOSS(array $evidentiaryResourcesMOSS = null)
    {
        $this->evidentiaryResourcesMOSS = $evidentiaryResourcesMOSS;
        return $this;
    }

    /**
     * Gets as accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @return string
     */
    public function getAccountingPeriodMOSS()
    {
        return $this->accountingPeriodMOSS;
    }

    /**
     * Sets a new accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @param string $accountingPeriodMOSS
     * @return self
     */
    public function setAccountingPeriodMOSS($accountingPeriodMOSS)
    {
        $this->accountingPeriodMOSS = $accountingPeriodMOSS;
        return $this;
    }

    /**
     * Gets as permanentDocument
     *
     * Trvalý doklad. Příznak pro označení trvalé nabídky. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     *
     * @return string
     */
    public function getPermanentDocument()
    {
        return $this->permanentDocument;
    }

    /**
     * Sets a new permanentDocument
     *
     * Trvalý doklad. Příznak pro označení trvalé nabídky. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     *
     * @param string $permanentDocument
     * @return self
     */
    public function setPermanentDocument($permanentDocument)
    {
        $this->permanentDocument = $permanentDocument;
        return $this;
    }

    /**
     * Gets as isExecuted
     *
     * Vyřízeno.
     *
     * @return string
     */
    public function getIsExecuted()
    {
        return $this->isExecuted;
    }

    /**
     * Sets a new isExecuted
     *
     * Vyřízeno.
     *
     * @param string $isExecuted
     * @return self
     */
    public function setIsExecuted($isExecuted)
    {
        $this->isExecuted = $isExecuted;
        return $this;
    }

    /**
     * Gets as isDelivered
     *
     * Přeneseno. Používá se jen při exportu dokladu.
     *
     * @return string
     */
    public function getIsDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * Sets a new isDelivered
     *
     * Přeneseno. Používá se jen při exportu dokladu.
     *
     * @param string $isDelivered
     * @return self
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;
        return $this;
    }

    /**
     * Gets as details
     *
     * Podrobnosti.
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Podrobnosti.
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
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
}
