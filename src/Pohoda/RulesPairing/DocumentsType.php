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

namespace Pohoda\RulesPairing;

/**
 * Class representing DocumentsType.
 *
 * Doklady.
 * XSD Type: documentsType
 */
class DocumentsType
{
    /**
     * @var string[]
     */
    private array $document = [
    ];

    /**
     * Adds as document.
     *
     * @param string $document
     *
     * @return self
     */
    public function addToDocument($document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * isset document.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document.
     *
     * @param int|string $index
     */
    public function unsetDocument($index): void
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document.
     *
     * @return string[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document.
     *
     * @param string $document
     *
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;

        return $this;
    }
}
