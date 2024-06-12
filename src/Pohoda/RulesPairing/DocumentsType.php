<?php

namespace Pohoda\RulesPairing;

/**
 * Class representing DocumentsType
 *
 * Doklady.
 * XSD Type: documentsType
 */
class DocumentsType
{
    /**
     * @var string[] $document
     */
    private $document = [
    ];

    /**
     * Adds as document
     *
     * @return self
     * @param string $document
     */
    public function addToDocument($document)
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
     * @return string[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * @param string $document
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;
        return $this;
    }
}
