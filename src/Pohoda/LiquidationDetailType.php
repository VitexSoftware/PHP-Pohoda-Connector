<?php

namespace Pohoda;

/**
 * Class representing LiquidationDetailType
 *
 *
 * XSD Type: liquidationDetailType
 */
class LiquidationDetailType
{
    /**
     * Celkový výsledek likvidace.
     *
     * @var string $state
     */
    private $state = null;

    /**
     * Popis likvidace.
     *
     * @var string $detail
     */
    private $detail = null;

    /**
     * Likvidované doklady.
     *
     * @var \Pohoda\DocumentType[] $documents
     */
    private $documents = null;

    /**
     * Gets as state
     *
     * Celkový výsledek likvidace.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * Celkový výsledek likvidace.
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Popis likvidace.
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Popis likvidace.
     *
     * @param string $detail
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Adds as document
     *
     * Likvidované doklady.
     *
     * @return self
     * @param \Pohoda\DocumentType $document
     */
    public function addToDocuments(\Pohoda\DocumentType $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * isset documents
     *
     * Likvidované doklady.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents
     *
     * Likvidované doklady.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocuments($index)
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents
     *
     * Likvidované doklady.
     *
     * @return \Pohoda\DocumentType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * Likvidované doklady.
     *
     * @param \Pohoda\DocumentType[] $documents
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }
}

