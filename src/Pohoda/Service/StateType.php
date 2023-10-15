<?php

namespace Pohoda\Service;

/**
 * Class representing StateType
 *
 *
 * XSD Type: stateType
 */
class StateType
{
    /**
     * ID položky stavu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Datum.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Stav servisu
     *
     * @var \Pohoda\Type\RefType $status
     */
    private $status = null;

    /**
     * Odpovědná osoba.
     *
     * @var \Pohoda\Type\RefTypeLongType $responsiblePerson
     */
    private $responsiblePerson = null;

    /**
     * Firma.
     *
     * @var \Pohoda\Service\ServiceAddressType $companyService
     */
    private $companyService = null;

    /**
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @var \Pohoda\Type\RefType $forwarding
     */
    private $forwarding = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as id
     *
     * ID položky stavu (jen pro export).
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
     * ID položky stavu (jen pro export).
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
     * Gets as date
     *
     * Datum.
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
     * Datum.
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
     * Gets as status
     *
     * Stav servisu
     *
     * @return \Pohoda\Type\RefType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Stav servisu
     *
     * @param \Pohoda\Type\RefType $status
     * @return self
     */
    public function setStatus(\Pohoda\Type\RefType $status)
    {
        $this->status = $status;
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
     * Gets as companyService
     *
     * Firma.
     *
     * @return \Pohoda\Service\ServiceAddressType
     */
    public function getCompanyService()
    {
        return $this->companyService;
    }

    /**
     * Sets a new companyService
     *
     * Firma.
     *
     * @param \Pohoda\Service\ServiceAddressType $companyService
     * @return self
     */
    public function setCompanyService(?\Pohoda\Service\ServiceAddressType $companyService = null)
    {
        $this->companyService = $companyService;
        return $this;
    }

    /**
     * Gets as forwarding
     *
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getForwarding()
    {
        return $this->forwarding;
    }

    /**
     * Sets a new forwarding
     *
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @param \Pohoda\Type\RefType $forwarding
     * @return self
     */
    public function setForwarding(?\Pohoda\Type\RefType $forwarding = null)
    {
        $this->forwarding = $forwarding;
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
}

