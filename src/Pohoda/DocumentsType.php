<?php

namespace Pohoda;

/**
 * Class representing DocumentsType
 *
 *
 * XSD Type: documentsType
 */
class DocumentsType
{
    /**
     * @var \Pohoda\DocumentType[] $document
     */
    private $document = [
        
    ];

    /**
     * Adds as document
     *
     * @return self
     * @param \Pohoda\DocumentType $document
     */
    public function addToDocument(\Pohoda\DocumentType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * @return \Pohoda\DocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * @param \Pohoda\DocumentType[] $document
     * @return self
     */
    public function setDocument(array $document = null)
    {
        $this->document = $document;
        return $this;
    }
}

