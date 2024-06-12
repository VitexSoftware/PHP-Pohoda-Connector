<?php

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing ProducedAccountingDocsType
 *
 *
 * XSD Type: producedAccountingDocsType
 */
class ProducedAccountingDocsType
{
    /**
     * Zaúčtovávací doklad.
     *
     * @var \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $accountingDocument
     */
    private $accountingDocument = [
    ];

    /**
     * Adds as accountingDocument
     *
     * Zaúčtovávací doklad.
     *
     * @return self
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument
     */
    public function addToAccountingDocument(\Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument)
    {
        $this->accountingDocument[] = $accountingDocument;
        return $this;
    }

    /**
     * isset accountingDocument
     *
     * Zaúčtovávací doklad.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountingDocument($index)
    {
        return isset($this->accountingDocument[$index]);
    }

    /**
     * unset accountingDocument
     *
     * Zaúčtovávací doklad.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountingDocument($index)
    {
        unset($this->accountingDocument[$index]);
    }

    /**
     * Gets as accountingDocument
     *
     * Zaúčtovávací doklad.
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingDocumentType[]
     */
    public function getAccountingDocument()
    {
        return $this->accountingDocument;
    }

    /**
     * Sets a new accountingDocument
     *
     * Zaúčtovávací doklad.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $accountingDocument
     * @return self
     */
    public function setAccountingDocument(array $accountingDocument = null)
    {
        $this->accountingDocument = $accountingDocument;
        return $this;
    }
}
