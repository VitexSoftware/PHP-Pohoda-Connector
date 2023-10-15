<?php

namespace Pohoda\Type;

/**
 * Class representing ManualLinkElementType
 *
 *
 * XSD Type: manualLinkElementType
 */
class ManualLinkElementType
{
    /**
     * Agenda zdrojového dokladu.
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
     * Gets as sourceAgenda
     *
     * Agenda zdrojového dokladu.
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
     * Agenda zdrojového dokladu.
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
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }
}

