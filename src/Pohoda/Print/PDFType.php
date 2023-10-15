<?php

namespace Pohoda\Print;

/**
 * Class representing PDFType
 *
 *
 * XSD Type: PDFType
 */
class PDFType
{
    /**
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * @var \Pohoda\Print\IsdocType $isdoc
     */
    private $isdoc = null;

    /**
     * Gets as fileName
     *
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
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
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as isdoc
     *
     * @return \Pohoda\Print\IsdocType
     */
    public function getIsdoc()
    {
        return $this->isdoc;
    }

    /**
     * Sets a new isdoc
     *
     * @param \Pohoda\Print\IsdocType $isdoc
     * @return self
     */
    public function setIsdoc(?\Pohoda\Print\IsdocType $isdoc = null)
    {
        $this->isdoc = $isdoc;
        return $this;
    }
}
