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

namespace Pohoda;

/**
 * Class representing LiquidationDetailType.
 *
 * XSD Type: liquidationDetailType
 */
class LiquidationDetailType
{
    /**
     * Celkový výsledek likvidace.
     */
    private ?string $state = null;

    /**
     * Popis likvidace.
     */
    private ?string $detail = null;

    /**
     * Likvidované doklady.
     *
     * @var \Pohoda\DocumentType[]
     */
    private ?array $documents = null;

    /**
     * Gets as state.
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
     * Sets a new state.
     *
     * Celkový výsledek likvidace.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as detail.
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
     * Sets a new detail.
     *
     * Popis likvidace.
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Adds as document.
     *
     * Likvidované doklady.
     *
     * @return self
     */
    public function addToDocuments(\Pohoda\DocumentType $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * isset documents.
     *
     * Likvidované doklady.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents.
     *
     * Likvidované doklady.
     *
     * @param int|string $index
     */
    public function unsetDocuments($index): void
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents.
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
     * Sets a new documents.
     *
     * Likvidované doklady.
     *
     * @param \Pohoda\DocumentType[] $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }
}
