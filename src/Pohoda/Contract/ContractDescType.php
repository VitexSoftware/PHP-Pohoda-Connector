<?php

namespace Pohoda\Contract;

/**
 * Class representing ContractDescType
 *
 *
 * XSD Type: contractDescType
 */
class ContractDescType
{
    /**
     * Používá se pouze při exportu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Evidenční číslo zakázky.
     *
     * @var \Pohoda\Type\NumberTypeContractType $number
     */
    private $number = null;

    /**
     * Datum plánovaného zahájení.
     *
     * @var \DateTime $datePlanStart
     */
    private $datePlanStart = null;

    /**
     * Datum plánovaného předání.
     *
     * @var \DateTime $datePlanDelivery
     */
    private $datePlanDelivery = null;

    /**
     * Datum zahájení.
     *
     * @var \DateTime $dateStart
     */
    private $dateStart = null;

    /**
     * Datum předání.
     *
     * @var \DateTime $dateDelivery
     */
    private $dateDelivery = null;

    /**
     * Záruka.
     *
     * @var \DateTime $dateWarranty
     */
    private $dateWarranty = null;

    /**
     * Text popisu zakázky. Tento element je vyžadován při vytvoření dokladu.
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
     * Odpovědná osoba.
     *
     * @var \Pohoda\Type\RefTypeLongType $responsiblePerson
     */
    private $responsiblePerson = null;

    /**
     * Stav zakázky (podporován do verze 13100).
     *
     * @var string $contractState
     */
    private $contractState = null;

    /**
     * Stav zakázky (nová definice od verze 13100). Pokud budou při importu současně použity elementy „contractState“ i „status“, pak má větší prioritu element „status“.
     *
     * @var \Pohoda\Contract\StatusType $status
     */
    private $status = null;

    /**
     * Ostatní.
     *
     * @var string $ost1
     */
    private $ost1 = null;

    /**
     * Pozn.
     *
     * @var string $ost2
     */
    private $ost2 = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

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
     * Používá se pouze při exportu.
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
     * Používá se pouze při exportu.
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
     * Evidenční číslo zakázky.
     *
     * @return \Pohoda\Type\NumberTypeContractType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo zakázky.
     *
     * @param \Pohoda\Type\NumberTypeContractType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberTypeContractType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as datePlanStart
     *
     * Datum plánovaného zahájení.
     *
     * @return \DateTime
     */
    public function getDatePlanStart()
    {
        return $this->datePlanStart;
    }

    /**
     * Sets a new datePlanStart
     *
     * Datum plánovaného zahájení.
     *
     * @param \DateTime $datePlanStart
     * @return self
     */
    public function setDatePlanStart(?\DateTime $datePlanStart = null)
    {
        $this->datePlanStart = $datePlanStart;
        return $this;
    }

    /**
     * Gets as datePlanDelivery
     *
     * Datum plánovaného předání.
     *
     * @return \DateTime
     */
    public function getDatePlanDelivery()
    {
        return $this->datePlanDelivery;
    }

    /**
     * Sets a new datePlanDelivery
     *
     * Datum plánovaného předání.
     *
     * @param \DateTime $datePlanDelivery
     * @return self
     */
    public function setDatePlanDelivery(?\DateTime $datePlanDelivery = null)
    {
        $this->datePlanDelivery = $datePlanDelivery;
        return $this;
    }

    /**
     * Gets as dateStart
     *
     * Datum zahájení.
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Sets a new dateStart
     *
     * Datum zahájení.
     *
     * @param \DateTime $dateStart
     * @return self
     */
    public function setDateStart(?\DateTime $dateStart = null)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * Gets as dateDelivery
     *
     * Datum předání.
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Sets a new dateDelivery
     *
     * Datum předání.
     *
     * @param \DateTime $dateDelivery
     * @return self
     */
    public function setDateDelivery(?\DateTime $dateDelivery = null)
    {
        $this->dateDelivery = $dateDelivery;
        return $this;
    }

    /**
     * Gets as dateWarranty
     *
     * Záruka.
     *
     * @return \DateTime
     */
    public function getDateWarranty()
    {
        return $this->dateWarranty;
    }

    /**
     * Sets a new dateWarranty
     *
     * Záruka.
     *
     * @param \DateTime $dateWarranty
     * @return self
     */
    public function setDateWarranty(?\DateTime $dateWarranty = null)
    {
        $this->dateWarranty = $dateWarranty;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text popisu zakázky. Tento element je vyžadován při vytvoření dokladu.
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
     * Text popisu zakázky. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as responsiblePerson
     *
     * Odpovědná osoba.
     *
     * @return \Pohoda\Type\RefTypeLongType
     */
    public function getResponsiblePerson()
    {
        return $this->responsiblePerson;
    }

    /**
     * Sets a new responsiblePerson
     *
     * Odpovědná osoba.
     *
     * @param \Pohoda\Type\RefTypeLongType $responsiblePerson
     * @return self
     */
    public function setResponsiblePerson(?\Pohoda\Type\RefTypeLongType $responsiblePerson = null)
    {
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }

    /**
     * Gets as contractState
     *
     * Stav zakázky (podporován do verze 13100).
     *
     * @return string
     */
    public function getContractState()
    {
        return $this->contractState;
    }

    /**
     * Sets a new contractState
     *
     * Stav zakázky (podporován do verze 13100).
     *
     * @param string $contractState
     * @return self
     */
    public function setContractState($contractState)
    {
        $this->contractState = $contractState;
        return $this;
    }

    /**
     * Gets as status
     *
     * Stav zakázky (nová definice od verze 13100). Pokud budou při importu současně použity elementy „contractState“ i „status“, pak má větší prioritu element „status“.
     *
     * @return \Pohoda\Contract\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Stav zakázky (nová definice od verze 13100). Pokud budou při importu současně použity elementy „contractState“ i „status“, pak má větší prioritu element „status“.
     *
     * @param \Pohoda\Contract\StatusType $status
     * @return self
     */
    public function setStatus(?\Pohoda\Contract\StatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as ost1
     *
     * Ostatní.
     *
     * @return string
     */
    public function getOst1()
    {
        return $this->ost1;
    }

    /**
     * Sets a new ost1
     *
     * Ostatní.
     *
     * @param string $ost1
     * @return self
     */
    public function setOst1($ost1)
    {
        $this->ost1 = $ost1;
        return $this;
    }

    /**
     * Gets as ost2
     *
     * Pozn.
     *
     * @return string
     */
    public function getOst2()
    {
        return $this->ost2;
    }

    /**
     * Sets a new ost2
     *
     * Pozn.
     *
     * @param string $ost2
     * @return self
     */
    public function setOst2($ost2)
    {
        $this->ost2 = $ost2;
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

