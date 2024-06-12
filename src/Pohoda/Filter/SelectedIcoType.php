<?php

namespace Pohoda\Filter;

/**
 * Class representing SelectedIcoType
 *
 *
 * XSD Type: selectedIcoType
 */
class SelectedIcoType
{
    /**
     * ICO
     *
     * @var string[] $ico
     */
    private $ico = [
    ];

    /**
     * Adds as ico
     *
     * ICO
     *
     * @return self
     * @param string $ico
     */
    public function addToIco($ico)
    {
        $this->ico[] = $ico;
        return $this;
    }

    /**
     * isset ico
     *
     * ICO
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIco($index)
    {
        return isset($this->ico[$index]);
    }

    /**
     * unset ico
     *
     * ICO
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIco($index)
    {
        unset($this->ico[$index]);
    }

    /**
     * Gets as ico
     *
     * ICO
     *
     * @return string[]
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Sets a new ico
     *
     * ICO
     *
     * @param string $ico
     * @return self
     */
    public function setIco(array $ico)
    {
        $this->ico = $ico;
        return $this;
    }
}
