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

namespace Pohoda\Type;

/**
 * Class representing LinkedDocumentType.
 *
 * XSD Type: linkedDocumentType
 */
class LinkedDocumentType
{
    /**
     * Typ/Agenda zdrojového dokladu.
     */
    private ?string $sourceAgenda = null;

    /**
     * Doklad.
     */
    private ?\Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Položka dokladu.
     */
    private ?\Pohoda\Type\SourceDocumentItemType $sourceDocumentItem = null;

    /**
     * Gets as sourceAgenda.
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
     * Sets a new sourceAgenda.
     *
     * Typ/Agenda zdrojového dokladu.
     *
     * @param string $sourceAgenda
     *
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;

        return $this;
    }

    /**
     * Gets as sourceDocument.
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
     * Sets a new sourceDocument.
     *
     * Doklad.
     *
     * @return self
     */
    public function setSourceDocument(?\Pohoda\Type\SourceDocumentType $sourceDocument = null)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }

    /**
     * Gets as sourceDocumentItem.
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
     * Sets a new sourceDocumentItem.
     *
     * Položka dokladu.
     *
     * @return self
     */
    public function setSourceDocumentItem(?\Pohoda\Type\SourceDocumentItemType $sourceDocumentItem = null)
    {
        $this->sourceDocumentItem = $sourceDocumentItem;

        return $this;
    }
}
