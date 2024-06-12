<?php

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing LinkedDocumentsType
 *
 *
 * XSD Type: linkedDocumentsType
 */
class LinkedDocumentsType
{
    /**
     * Prodejky zaúčtované dokladem.
     *
     * @var \Pohoda\AccountingSalesVouchers\LinkedDocumentType[] $linkedDocument
     */
    private $linkedDocument = [
    ];

    /**
     * Adds as linkedDocument
     *
     * Prodejky zaúčtované dokladem.
     *
     * @return self
     * @param \Pohoda\AccountingSalesVouchers\LinkedDocumentType $linkedDocument
     */
    public function addToLinkedDocument(\Pohoda\AccountingSalesVouchers\LinkedDocumentType $linkedDocument)
    {
        $this->linkedDocument[] = $linkedDocument;
        return $this;
    }

    /**
     * isset linkedDocument
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedDocument($index)
    {
        return isset($this->linkedDocument[$index]);
    }

    /**
     * unset linkedDocument
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedDocument($index)
    {
        unset($this->linkedDocument[$index]);
    }

    /**
     * Gets as linkedDocument
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
     * Sets a new linkedDocument
     *
     * Prodejky zaúčtované dokladem.
     *
     * @param \Pohoda\AccountingSalesVouchers\LinkedDocumentType[] $linkedDocument
     * @return self
     */
    public function setLinkedDocument(array $linkedDocument = null)
    {
        $this->linkedDocument = $linkedDocument;
        return $this;
    }
}
