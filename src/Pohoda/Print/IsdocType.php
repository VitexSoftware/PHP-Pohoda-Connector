<?php

namespace Pohoda\Print;

/**
 * Class representing IsdocType
 *
 *
 * XSD Type: isdocType
 */
class IsdocType
{
    /**
     * Při exportu sestavy do PDF vytvořit a vložit ISDOC jako přílohu.
     *
     * @var string $includeToPdf
     */
    private $includeToPdf = null;

    /**
     * Umístění grafické poznámky ISDOC. Pouze CZ verze.
     *
     * @var string $graphicNote
     */
    private $graphicNote = null;

    /**
     * Gets as includeToPdf
     *
     * Při exportu sestavy do PDF vytvořit a vložit ISDOC jako přílohu.
     *
     * @return string
     */
    public function getIncludeToPdf()
    {
        return $this->includeToPdf;
    }

    /**
     * Sets a new includeToPdf
     *
     * Při exportu sestavy do PDF vytvořit a vložit ISDOC jako přílohu.
     *
     * @param string $includeToPdf
     * @return self
     */
    public function setIncludeToPdf($includeToPdf)
    {
        $this->includeToPdf = $includeToPdf;
        return $this;
    }

    /**
     * Gets as graphicNote
     *
     * Umístění grafické poznámky ISDOC. Pouze CZ verze.
     *
     * @return string
     */
    public function getGraphicNote()
    {
        return $this->graphicNote;
    }

    /**
     * Sets a new graphicNote
     *
     * Umístění grafické poznámky ISDOC. Pouze CZ verze.
     *
     * @param string $graphicNote
     * @return self
     */
    public function setGraphicNote($graphicNote)
    {
        $this->graphicNote = $graphicNote;
        return $this;
    }
}

