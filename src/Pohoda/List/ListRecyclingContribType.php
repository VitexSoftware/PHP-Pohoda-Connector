<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListRecyclingContribType
 *
 *
 * XSD Type: listRecyclingContribType
 */
class ListRecyclingContribType extends ListVersionType
{
    /**
     * @var \Pohoda\RecyclingContrib\RecyclingContribType[] $recyclingContrib
     */
    private $recyclingContrib = [
    ];

    /**
     * Adds as recyclingContrib
     *
     * @return self
     * @param \Pohoda\RecyclingContrib\RecyclingContribType $recyclingContrib
     */
    public function addToRecyclingContrib(\Pohoda\RecyclingContrib\RecyclingContribType $recyclingContrib)
    {
        $this->recyclingContrib[] = $recyclingContrib;
        return $this;
    }

    /**
     * isset recyclingContrib
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecyclingContrib($index)
    {
        return isset($this->recyclingContrib[$index]);
    }

    /**
     * unset recyclingContrib
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecyclingContrib($index)
    {
        unset($this->recyclingContrib[$index]);
    }

    /**
     * Gets as recyclingContrib
     *
     * @return \Pohoda\RecyclingContrib\RecyclingContribType[]
     */
    public function getRecyclingContrib()
    {
        return $this->recyclingContrib;
    }

    /**
     * Sets a new recyclingContrib
     *
     * @param \Pohoda\RecyclingContrib\RecyclingContribType[] $recyclingContrib
     * @return self
     */
    public function setRecyclingContrib(array $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;
        return $this;
    }
}
