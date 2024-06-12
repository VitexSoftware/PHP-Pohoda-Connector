<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingFormOfPaymentType
 *
 *
 * XSD Type: listAccountingFormOfPaymentType
 */
class ListAccountingFormOfPaymentType extends ListVersionType
{
    /**
     * @var \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[] $accountingFormOfPayment
     */
    private $accountingFormOfPayment = [
    ];

    /**
     * Adds as accountingFormOfPayment
     *
     * @return self
     * @param \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType $accountingFormOfPayment
     */
    public function addToAccountingFormOfPayment(\Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType $accountingFormOfPayment)
    {
        $this->accountingFormOfPayment[] = $accountingFormOfPayment;
        return $this;
    }

    /**
     * isset accountingFormOfPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountingFormOfPayment($index)
    {
        return isset($this->accountingFormOfPayment[$index]);
    }

    /**
     * unset accountingFormOfPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountingFormOfPayment($index)
    {
        unset($this->accountingFormOfPayment[$index]);
    }

    /**
     * Gets as accountingFormOfPayment
     *
     * @return \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[]
     */
    public function getAccountingFormOfPayment()
    {
        return $this->accountingFormOfPayment;
    }

    /**
     * Sets a new accountingFormOfPayment
     *
     * @param \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[] $accountingFormOfPayment
     * @return self
     */
    public function setAccountingFormOfPayment(array $accountingFormOfPayment = null)
    {
        $this->accountingFormOfPayment = $accountingFormOfPayment;
        return $this;
    }
}
