<?php

namespace Pohoda\Documentresponse;

/**
 * Class representing PartsType
 *
 * Název rozděleného souboru.
 * XSD Type: partsType
 */
class PartsType
{
    /**
     * @var string[] $part
     */
    private $part = [
        
    ];

    /**
     * Adds as part
     *
     * @return self
     * @param string $part
     */
    public function addToPart($part)
    {
        $this->part[] = $part;
        return $this;
    }

    /**
     * isset part
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPart($index)
    {
        return isset($this->part[$index]);
    }

    /**
     * unset part
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPart($index)
    {
        unset($this->part[$index]);
    }

    /**
     * Gets as part
     *
     * @return string[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part
     *
     * @param string[] $part
     * @return self
     */
    public function setPart(array $part = null)
    {
        $this->part = $part;
        return $this;
    }
}

