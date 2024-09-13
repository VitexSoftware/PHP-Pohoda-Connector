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

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing ProducedAccountingDocsType.
 *
 * XSD Type: producedAccountingDocsType
 */
class ProducedAccountingDocsType
{
    /**
     * Zaúčtovávací doklad.
     *
     * @var \Pohoda\AccountingSalesVouchers\AccountingDocumentType[]
     */
    private array $accountingDocument = [
    ];

    /**
     * Adds as accountingDocument.
     *
     * Zaúčtovávací doklad.
     *
     * @return self
     */
    public function addToAccountingDocument(\Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument)
    {
        $this->accountingDocument[] = $accountingDocument;

        return $this;
    }

    /**
     * isset accountingDocument.
     *
     * Zaúčtovávací doklad.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingDocument($index)
    {
        return isset($this->accountingDocument[$index]);
    }

    /**
     * unset accountingDocument.
     *
     * Zaúčtovávací doklad.
     *
     * @param int|string $index
     */
    public function unsetAccountingDocument($index): void
    {
        unset($this->accountingDocument[$index]);
    }

    /**
     * Gets as accountingDocument.
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
     * Sets a new accountingDocument.
     *
     * Zaúčtovávací doklad.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $accountingDocument
     *
     * @return self
     */
    public function setAccountingDocument(?array $accountingDocument = null)
    {
        $this->accountingDocument = $accountingDocument;

        return $this;
    }
}
