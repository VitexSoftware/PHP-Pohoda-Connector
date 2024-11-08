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
 * Class representing CorrectiveDocumentType.
 *
 * XSD Type: correctiveDocumentType
 */
class CorrectiveDocumentType
{
    /**
     * Přenesení položek ze zdrojového dokladu.
     */
    private ?bool $itemTransfer = null;

    /**
     * Doklad, pro který se vytváří opravný daňový doklad (pouze CZ verze), nebo Dobropis (pouze SK verze).
     */
    private ?\Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Gets as itemTransfer.
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
     * Sets a new itemTransfer.
     *
     * Přenesení položek ze zdrojového dokladu.
     *
     * @param bool $itemTransfer
     *
     * @return self
     */
    public function setItemTransfer($itemTransfer)
    {
        $this->itemTransfer = $itemTransfer;

        return $this;
    }

    /**
     * Gets as sourceDocument.
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
     * Sets a new sourceDocument.
     *
     * Doklad, pro který se vytváří opravný daňový doklad (pouze CZ verze), nebo Dobropis (pouze SK verze).
     *
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }
}
