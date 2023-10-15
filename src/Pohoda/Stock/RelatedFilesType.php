<?php

namespace Pohoda\Stock;

/**
 * Class representing RelatedFilesType
 *
 *
 * XSD Type: relatedFilesType
 */
class RelatedFilesType
{
    /**
     * @var \Pohoda\Stock\RelatedFileType[] $relatedFile
     */
    private $relatedFile = [

    ];

    /**
     * Adds as relatedFile
     *
     * @return self
     * @param \Pohoda\Stock\RelatedFileType $relatedFile
     */
    public function addToRelatedFile(\Pohoda\Stock\RelatedFileType $relatedFile)
    {
        $this->relatedFile[] = $relatedFile;
        return $this;
    }

    /**
     * isset relatedFile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedFile($index)
    {
        return isset($this->relatedFile[$index]);
    }

    /**
     * unset relatedFile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedFile($index)
    {
        unset($this->relatedFile[$index]);
    }

    /**
     * Gets as relatedFile
     *
     * @return \Pohoda\Stock\RelatedFileType[]
     */
    public function getRelatedFile()
    {
        return $this->relatedFile;
    }

    /**
     * Sets a new relatedFile
     *
     * @param \Pohoda\Stock\RelatedFileType[] $relatedFile
     * @return self
     */
    public function setRelatedFile(array $relatedFile)
    {
        $this->relatedFile = $relatedFile;
        return $this;
    }
}
