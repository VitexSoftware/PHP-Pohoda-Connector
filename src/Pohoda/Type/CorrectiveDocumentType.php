<?php

namespace Pohoda\Type;

/**
 * Class representing CorrectiveDocumentType
 *
 *
 * XSD Type: correctiveDocumentType
 */
class CorrectiveDocumentType
{
    /**
     * Přenesení položek ze zdrojového dokladu.
     *
     * @var bool $itemTransfer
     */
    private $itemTransfer = null;

    /**
     * Doklad, pro který se vytváří opravný daňový doklad (pouze CZ verze), nebo Dobropis (pouze SK verze).
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Gets as itemTransfer
     *
     * Přenesení položek ze zdrojového dokladu.
     *
     * @return bool
     */
    public function getItemTransfer()
    {
        return $this->itemTransfer;
    }

    /**
     * Sets a new itemTransfer
     *
     * Přenesení položek ze zdrojového dokladu.
     *
     * @param bool $itemTransfer
     * @return self
     */
    public function setItemTransfer($itemTransfer)
    {
        $this->itemTransfer = $itemTransfer;
        return $this;
    }

    /**
     * Gets as sourceDocument
     *
     * Doklad, pro který se vytváří opravný daňový doklad (pouze CZ verze), nebo Dobropis (pouze SK verze).
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
     * Doklad, pro který se vytváří opravný daňový doklad (pouze CZ verze), nebo Dobropis (pouze SK verze).
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

