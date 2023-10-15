<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListVyrobaType
 *
 *
 * XSD Type: listVyrobaType
 */
class ListVyrobaType extends ListVersionType
{
    /**
     * @var \Pohoda\Vyroba\VyrobaType[] $vyroba
     */
    private $vyroba = [

    ];

    /**
     * Adds as vyroba
     *
     * @return self
     * @param \Pohoda\Vyroba\VyrobaType $vyroba
     */
    public function addToVyroba(\Pohoda\Vyroba\VyrobaType $vyroba)
    {
        $this->vyroba[] = $vyroba;
        return $this;
    }

    /**
     * isset vyroba
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVyroba($index)
    {
        return isset($this->vyroba[$index]);
    }

    /**
     * unset vyroba
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVyroba($index)
    {
        unset($this->vyroba[$index]);
    }

    /**
     * Gets as vyroba
     *
     * @return \Pohoda\Vyroba\VyrobaType[]
     */
    public function getVyroba()
    {
        return $this->vyroba;
    }

    /**
     * Sets a new vyroba
     *
     * @param \Pohoda\Vyroba\VyrobaType[] $vyroba
     * @return self
     */
    public function setVyroba(array $vyroba = null)
    {
        $this->vyroba = $vyroba;
        return $this;
    }
}
