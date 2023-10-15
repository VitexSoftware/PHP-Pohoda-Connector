<?php

namespace Pohoda\Isdoc;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: attachmentType
 */
class AttachmentType
{
    /**
     * Je-li součástí přílohy vizuální podoba exportovaného dokumentu, nastavte tuto hodnotu.
     *
     * @var string $preview
     */
    private $preview = null;

    /**
     * Název a umístění souboru přílohy ISDOC dokumentu (př. "C:\dokumenty\zarucniList_0114.doc").
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * Gets as preview
     *
     * Je-li součástí přílohy vizuální podoba exportovaného dokumentu, nastavte tuto hodnotu.
     *
     * @return string
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * Sets a new preview
     *
     * Je-li součástí přílohy vizuální podoba exportovaného dokumentu, nastavte tuto hodnotu.
     *
     * @param string $preview
     * @return self
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * Název a umístění souboru přílohy ISDOC dokumentu (př. "C:\dokumenty\zarucniList_0114.doc").
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * Název a umístění souboru přílohy ISDOC dokumentu (př. "C:\dokumenty\zarucniList_0114.doc").
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }
}
