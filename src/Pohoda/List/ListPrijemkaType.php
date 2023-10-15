<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListPrijemkaType
 *
 *
 * XSD Type: listPrijemkaType
 */
class ListPrijemkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prijemka\PrijemkaType[] $prijemka
     */
    private $prijemka = [
        
    ];

    /**
     * Adds as prijemka
     *
     * @return self
     * @param \Pohoda\Prijemka\PrijemkaType $prijemka
     */
    public function addToPrijemka(\Pohoda\Prijemka\PrijemkaType $prijemka)
    {
        $this->prijemka[] = $prijemka;
        return $this;
    }

    /**
     * isset prijemka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrijemka($index)
    {
        return isset($this->prijemka[$index]);
    }

    /**
     * unset prijemka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrijemka($index)
    {
        unset($this->prijemka[$index]);
    }

    /**
     * Gets as prijemka
     *
     * @return \Pohoda\Prijemka\PrijemkaType[]
     */
    public function getPrijemka()
    {
        return $this->prijemka;
    }

    /**
     * Sets a new prijemka
     *
     * @param \Pohoda\Prijemka\PrijemkaType[] $prijemka
     * @return self
     */
    public function setPrijemka(array $prijemka = null)
    {
        $this->prijemka = $prijemka;
        return $this;
    }
}

