<?php

namespace Pohoda\AccountingSalesVouchers;

use Pohoda\Documentresponse\DocumentResponseType;

/**
 * Class representing AccountingSalesVouchersResponesType
 *
 *
 * XSD Type: accountingSalesVouchersResponesType
 */
class AccountingSalesVouchersResponesType extends DocumentResponseType
{
    /**
     * Vytvořené zaúčtovávací doklady.
     *
     * @var \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $producedAccountingDocs
     */
    private $producedAccountingDocs = null;

    /**
     * Adds as accountingDocument
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @return self
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument
     */
    public function addToProducedAccountingDocs(\Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument)
    {
        $this->producedAccountingDocs[] = $accountingDocument;
        return $this;
    }

    /**
     * isset producedAccountingDocs
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducedAccountingDocs($index)
    {
        return isset($this->producedAccountingDocs[$index]);
    }

    /**
     * unset producedAccountingDocs
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducedAccountingDocs($index)
    {
        unset($this->producedAccountingDocs[$index]);
    }

    /**
     * Gets as producedAccountingDocs
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingDocumentType[]
     */
    public function getProducedAccountingDocs()
    {
        return $this->producedAccountingDocs;
    }

    /**
     * Sets a new producedAccountingDocs
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $producedAccountingDocs
     * @return self
     */
    public function setProducedAccountingDocs(array $producedAccountingDocs = null)
    {
        $this->producedAccountingDocs = $producedAccountingDocs;
        return $this;
    }
}
