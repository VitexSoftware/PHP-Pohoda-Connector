<?php

namespace Pohoda\AccountingFormOfPayment;

/**
 * Class representing AccountingFormOfPaymentTypeRootType
 *
 *
 * XSD Type: accountingFormOfPaymentTypeRoot
 */
class AccountingFormOfPaymentTypeRootType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader
     */
    private $accountingFormOfPaymentHeader = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as accountingFormOfPaymentHeader
     *
     * @return \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType
     */
    public function getAccountingFormOfPaymentHeader()
    {
        return $this->accountingFormOfPaymentHeader;
    }

    /**
     * Sets a new accountingFormOfPaymentHeader
     *
     * @param \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader
     * @return self
     */
    public function setAccountingFormOfPaymentHeader(\Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader)
    {
        $this->accountingFormOfPaymentHeader = $accountingFormOfPaymentHeader;
        return $this;
    }
}

