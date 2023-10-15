<?php

namespace Pohoda\Type;

/**
 * Class representing CancelDocumentType
 *
 *
 * XSD Type: cancelDocumentType
 */
class CancelDocumentType
{
    /**
     * Stornovaný doklad.
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Gets as sourceDocument
     *
     * Stornovaný doklad.
     *
     * @return \Pohoda\Type\SourceDocumentType
     */
    public function getSourceDocument()
    {
        return $this->sourceDocument;
    }

    /**
     * Sets a new sourceDocument
     *
     * Stornovaný doklad.
     *
     * @param \Pohoda\Type\SourceDocumentType $sourceDocument
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }
}

