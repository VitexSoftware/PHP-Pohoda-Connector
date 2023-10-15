<?php

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing AccountingDocumentType
 *
 *
 * XSD Type: accountingDocumentType
 */
class AccountingDocumentType
{
    /**
     * Agenda dokladu.
     *
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * ID dokladu.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * Číslo dokladu.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Agenda.
     *
     * @var \Pohoda\AccountingSalesVouchers\LinkedDocumentType[] $linkedDocuments
     */
    private $linkedDocuments = null;

    /**
     * Gets as agenda
     *
     * Agenda dokladu.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * Agenda dokladu.
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as id
     *
     * ID dokladu.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID dokladu.
     *
     * @param string $id
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
     * Číslo dokladu.
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
     * Číslo dokladu.
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
     * Adds as linkedDocument
     *
     * Agenda.
     *
     * @return self
     * @param \Pohoda\AccountingSalesVouchers\LinkedDocumentType $linkedDocument
     */
    public function addToLinkedDocuments(\Pohoda\AccountingSalesVouchers\LinkedDocumentType $linkedDocument)
    {
        $this->linkedDocuments[] = $linkedDocument;
        return $this;
    }

    /**
     * isset linkedDocuments
     *
     * Agenda.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedDocuments($index)
    {
        return isset($this->linkedDocuments[$index]);
    }

    /**
     * unset linkedDocuments
     *
     * Agenda.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedDocuments($index)
    {
        unset($this->linkedDocuments[$index]);
    }

    /**
     * Gets as linkedDocuments
     *
     * Agenda.
     *
     * @return \Pohoda\AccountingSalesVouchers\LinkedDocumentType[]
     */
    public function getLinkedDocuments()
    {
        return $this->linkedDocuments;
    }

    /**
     * Sets a new linkedDocuments
     *
     * Agenda.
     *
     * @param \Pohoda\AccountingSalesVouchers\LinkedDocumentType[] $linkedDocuments
     * @return self
     */
    public function setLinkedDocuments(array $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;
        return $this;
    }
}
