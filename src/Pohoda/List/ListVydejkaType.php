<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListVydejkaType
 *
 *
 * XSD Type: listVydejkaType
 */
class ListVydejkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Vydejka\VydejkaType[] $vydejka
     */
    private $vydejka = [
    ];

    /**
     * Adds as vydejka
     *
     * @return self
     * @param \Pohoda\Vydejka\VydejkaType $vydejka
     */
    public function addToVydejka(\Pohoda\Vydejka\VydejkaType $vydejka)
    {
        $this->vydejka[] = $vydejka;
        return $this;
    }

    /**
     * isset vydejka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVydejka($index)
    {
        return isset($this->vydejka[$index]);
    }

    /**
     * unset vydejka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVydejka($index)
    {
        unset($this->vydejka[$index]);
    }

    /**
     * Gets as vydejka
     *
     * @return \Pohoda\Vydejka\VydejkaType[]
     */
    public function getVydejka()
    {
        return $this->vydejka;
    }

    /**
     * Sets a new vydejka
     *
     * @param \Pohoda\Vydejka\VydejkaType[] $vydejka
     * @return self
     */
    public function setVydejka(array $vydejka = null)
    {
        $this->vydejka = $vydejka;
        return $this;
    }
}
