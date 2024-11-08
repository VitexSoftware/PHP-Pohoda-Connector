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

namespace Pohoda\Isdoc;

/**
 * Class representing AttachmentType.
 *
 * XSD Type: attachmentType
 */
class AttachmentType
{
    /**
     * Je-li součástí přílohy vizuální podoba exportovaného dokumentu, nastavte tuto hodnotu.
     */
    private ?string $preview = null;

    /**
     * Název a umístění souboru přílohy ISDOC dokumentu (př. "C:\dokumenty\zarucniList_0114.doc").
     */
    private ?string $fileName = null;

    /**
     * Gets as preview.
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
     * Sets a new preview.
     *
     * Je-li součástí přílohy vizuální podoba exportovaného dokumentu, nastavte tuto hodnotu.
     *
     * @param string $preview
     *
     * @return self
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * Gets as fileName.
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
     * Sets a new fileName.
     *
     * Název a umístění souboru přílohy ISDOC dokumentu (př. "C:\dokumenty\zarucniList_0114.doc").
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }
}
