<?php

namespace Pohoda\Accountancy;

/**
 * Class representing AccountingType
 *
 * Zaúčtování dokladu
 * XSD Type: accountingType
 */
class AccountingType
{
    /**
     * MD.
     *
     * @var string $credit
     */
    private $credit = null;

    /**
     * DAL.
     *
     * @var string $debit
     */
    private $debit = null;

    /**
     * Gets as credit
     *
     * MD.
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Sets a new credit
     *
     * MD.
     *
     * @param string $credit
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Gets as debit
     *
     * DAL.
     *
     * @return string
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Sets a new debit
     *
     * DAL.
     *
     * @param string $debit
     * @return self
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;
        return $this;
    }
}

