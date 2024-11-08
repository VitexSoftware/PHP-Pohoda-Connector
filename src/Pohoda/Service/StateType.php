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

namespace Pohoda\Service;

/**
 * Class representing StateType.
 *
 * XSD Type: stateType
 */
class StateType
{
    /**
     * ID položky stavu (jen pro export).
     */
    private ?int $id = null;

    /**
     * Datum.
     */
    private ?\DateTime $date = null;

    /**
     * Stav servisu.
     */
    private ?\Pohoda\Type\RefType $status = null;

    /**
     * Odpovědná osoba.
     */
    private ?\Pohoda\Type\RefTypeLongType $responsiblePerson = null;

    /**
     * Firma.
     */
    private ?\Pohoda\Service\ServiceAddressType $companyService = null;

    /**
     * Způsob předání opraveného servisovaného předmětu.
     */
    private ?\Pohoda\Type\RefType $forwarding = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID položky stavu (jen pro export).
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
     * Gets as date.
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
     * Sets a new date.
     *
     * Datum.
     *
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as status.
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
     * Sets a new status.
     *
     * Stav servisu
     *
     * @return self
     */
    public function setStatus(\Pohoda\Type\RefType $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as responsiblePerson.
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
     * Sets a new responsiblePerson.
     *
     * Odpovědná osoba.
     *
     * @return self
     */
    public function setResponsiblePerson(?\Pohoda\Type\RefTypeLongType $responsiblePerson = null)
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Gets as companyService.
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
     * Sets a new companyService.
     *
     * Firma.
     *
     * @return self
     */
    public function setCompanyService(?\Pohoda\Service\ServiceAddressType $companyService = null)
    {
        $this->companyService = $companyService;

        return $this;
    }

    /**
     * Gets as forwarding.
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
     * Sets a new forwarding.
     *
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @return self
     */
    public function setForwarding(?\Pohoda\Type\RefType $forwarding = null)
    {
        $this->forwarding = $forwarding;

        return $this;
    }

    /**
     * Gets as note.
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
     * Sets a new note.
     *
     * Poznámka.
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
