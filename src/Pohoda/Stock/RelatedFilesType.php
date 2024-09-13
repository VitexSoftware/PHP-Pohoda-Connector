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

namespace Pohoda\Stock;

/**
 * Class representing RelatedFilesType.
 *
 * XSD Type: relatedFilesType
 */
class RelatedFilesType
{
    /**
     * @var \Pohoda\Stock\RelatedFileType[]
     */
    private array $relatedFile = [
    ];

    /**
     * Adds as relatedFile.
     *
     * @return self
     */
    public function addToRelatedFile(\Pohoda\Stock\RelatedFileType $relatedFile)
    {
        $this->relatedFile[] = $relatedFile;

        return $this;
    }

    /**
     * isset relatedFile.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRelatedFile($index)
    {
        return isset($this->relatedFile[$index]);
    }

    /**
     * unset relatedFile.
     *
     * @param int|string $index
     */
    public function unsetRelatedFile($index): void
    {
        unset($this->relatedFile[$index]);
    }

    /**
     * Gets as relatedFile.
     *
     * @return \Pohoda\Stock\RelatedFileType[]
     */
    public function getRelatedFile()
    {
        return $this->relatedFile;
    }

    /**
     * Sets a new relatedFile.
     *
     * @param \Pohoda\Stock\RelatedFileType[] $relatedFile
     *
     * @return self
     */
    public function setRelatedFile(array $relatedFile)
    {
        $this->relatedFile = $relatedFile;

        return $this;
    }
}
