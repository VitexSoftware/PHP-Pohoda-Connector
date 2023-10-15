<?php

namespace Pohoda\List;

/**
 * Class representing ItemAccountingTypeSingleEntryType
 *
 *
 * XSD Type: itemAccountingTypeSingleEntry
 */
class ItemAccountingTypeSingleEntryType extends ItemType
{
    /**
     * @var string $accounting
     */
    private $accounting = null;

    /**
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * @var string $accountingType
     */
    private $accountingType = null;

    /**
     * Gets as accounting
     *
     * @return string
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * @param string $accounting
     * @return self
     */
    public function setAccounting($accounting)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as agenda
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
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as accountingType
     *
     * @return string
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * Sets a new accountingType
     *
     * @param string $accountingType
     * @return self
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
        return $this;
    }
}
