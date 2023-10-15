<?php

namespace Pohoda\Type;

/**
 * Class representing LinkedDocumentType
 *
 *
 * XSD Type: linkedDocumentType
 */
class LinkedDocumentType
{
    /**
     * Typ/Agenda zdrojového dokladu.
     *
     * @var string $sourceAgenda
     */
    private $sourceAgenda = null;

    /**
     * Doklad.
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Položka dokladu.
     *
     * @var \Pohoda\Type\SourceDocumentItemType $sourceDocumentItem
     */
    private $sourceDocumentItem = null;

    /**
     * Gets as sourceAgenda
     *
     * Typ/Agenda zdrojového dokladu.
     *
     * @return string
     */
    public function getSourceAgenda()
    {
        return $this->sourceAgenda;
    }

    /**
     * Sets a new sourceAgenda
     *
     * Typ/Agenda zdrojového dokladu.
     *
     * @param string $sourceAgenda
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;
        return $this;
    }

    /**
     * Gets as sourceDocument
     *
     * Doklad.
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
     * Doklad.
     *
     * @param \Pohoda\Type\SourceDocumentType $sourceDocument
     * @return self
     */
    public function setSourceDocument(?\Pohoda\Type\SourceDocumentType $sourceDocument = null)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * Gets as sourceDocumentItem
     *
     * Položka dokladu.
     *
     * @return \Pohoda\Type\SourceDocumentItemType
     */
    public function getSourceDocumentItem()
    {
        return $this->sourceDocumentItem;
    }

    /**
     * Sets a new sourceDocumentItem
     *
     * Položka dokladu.
     *
     * @param \Pohoda\Type\SourceDocumentItemType $sourceDocumentItem
     * @return self
     */
    public function setSourceDocumentItem(?\Pohoda\Type\SourceDocumentItemType $sourceDocumentItem = null)
    {
        $this->sourceDocumentItem = $sourceDocumentItem;
        return $this;
    }
}

