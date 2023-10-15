<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListPrevodkaType
 *
 *
 * XSD Type: listPrevodkaType
 */
class ListPrevodkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prevodka\PrevodkaType[] $prevodka
     */
    private $prevodka = [
        
    ];

    /**
     * Adds as prevodka
     *
     * @return self
     * @param \Pohoda\Prevodka\PrevodkaType $prevodka
     */
    public function addToPrevodka(\Pohoda\Prevodka\PrevodkaType $prevodka)
    {
        $this->prevodka[] = $prevodka;
        return $this;
    }

    /**
     * isset prevodka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrevodka($index)
    {
        return isset($this->prevodka[$index]);
    }

    /**
     * unset prevodka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrevodka($index)
    {
        unset($this->prevodka[$index]);
    }

    /**
     * Gets as prevodka
     *
     * @return \Pohoda\Prevodka\PrevodkaType[]
     */
    public function getPrevodka()
    {
        return $this->prevodka;
    }

    /**
     * Sets a new prevodka
     *
     * @param \Pohoda\Prevodka\PrevodkaType[] $prevodka
     * @return self
     */
    public function setPrevodka(array $prevodka = null)
    {
        $this->prevodka = $prevodka;
        return $this;
    }
}

