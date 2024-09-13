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

use Pohoda\Documentresponse\DocumentResponseType;

/**
 * Class representing AccountingSalesVouchersResponesType.
 *
 * XSD Type: accountingSalesVouchersResponesType
 */
class AccountingSalesVouchersResponesType extends DocumentResponseType
{
    /**
     * Vytvořené zaúčtovávací doklady.
     *
     * @var \Pohoda\AccountingSalesVouchers\AccountingDocumentType[]
     */
    private array $producedAccountingDocs = null;

    /**
     * Adds as accountingDocument.
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @return self
     */
    public function addToProducedAccountingDocs(\Pohoda\AccountingSalesVouchers\AccountingDocumentType $accountingDocument)
    {
        $this->producedAccountingDocs[] = $accountingDocument;

        return $this;
    }

    /**
     * isset producedAccountingDocs.
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProducedAccountingDocs($index)
    {
        return isset($this->producedAccountingDocs[$index]);
    }

    /**
     * unset producedAccountingDocs.
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param int|string $index
     */
    public function unsetProducedAccountingDocs($index): void
    {
        unset($this->producedAccountingDocs[$index]);
    }

    /**
     * Gets as producedAccountingDocs.
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
     * Sets a new producedAccountingDocs.
     *
     * Vytvořené zaúčtovávací doklady.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingDocumentType[] $producedAccountingDocs
     *
     * @return self
     */
    public function setProducedAccountingDocs(?array $producedAccountingDocs = null)
    {
        $this->producedAccountingDocs = $producedAccountingDocs;

        return $this;
    }
}
