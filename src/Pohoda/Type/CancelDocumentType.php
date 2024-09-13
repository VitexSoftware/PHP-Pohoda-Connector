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
 * Class representing CancelDocumentType.
 *
 * XSD Type: cancelDocumentType
 */
class CancelDocumentType
{
    /**
     * Stornovaný doklad.
     */
    private \Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Gets as sourceDocument.
     *
     * Stornovaný doklad.
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
     * Stornovaný doklad.
     *
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }
}
