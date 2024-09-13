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
 * Class representing LinkedDocumentsType.
 *
 * XSD Type: linkedDocumentsType
 */
class LinkedDocumentsType
{
    /**
     * Prodejky zaúčtované dokladem.
     *
     * @var \Pohoda\AccountingSalesVouchers\LinkedDocumentType[]
     */
    private array $linkedDocument = [
    ];

    /**
     * Adds as linkedDocument.
     *
     * Prodejky zaúčtované dokladem.
     *
     * @return self
     */
    public function addToLinkedDocument(\Pohoda\AccountingSalesVouchers\LinkedDocumentType $linkedDocument)
    {
        $this->linkedDocument[] = $linkedDocument;

        return $this;
    }

    /**
     * isset linkedDocument.
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLinkedDocument($index)
    {
        return isset($this->linkedDocument[$index]);
    }

    /**
     * unset linkedDocument.
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param int|string $index
     */
    public function unsetLinkedDocument($index): void
    {
        unset($this->linkedDocument[$index]);
    }

    /**
     * Gets as linkedDocument.
     *
     * Prodejky zaúčtované dokladem.
     *
     * @return \Pohoda\AccountingSalesVouchers\LinkedDocumentType[]
     */
    public function getLinkedDocument()
    {
        return $this->linkedDocument;
    }

    /**
     * Sets a new linkedDocument.
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param \Pohoda\AccountingSalesVouchers\LinkedDocumentType[] $linkedDocument
     *
     * @return self
     */
    public function setLinkedDocument(?array $linkedDocument = null)
    {
        $this->linkedDocument = $linkedDocument;

        return $this;
    }
}
