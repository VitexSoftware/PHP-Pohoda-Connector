<?php

namespace Pohoda\Stock;

/**
 * Class representing PicturesType
 *
 *
 * XSD Type: picturesType
 */
class PicturesType
{
    /**
     * @var \Pohoda\Stock\PictureType[] $picture
     */
    private $picture = [
        
    ];

    /**
     * Adds as picture
     *
     * @return self
     * @param \Pohoda\Stock\PictureType $picture
     */
    public function addToPicture(\Pohoda\Stock\PictureType $picture)
    {
        $this->picture[] = $picture;
        return $this;
    }

    /**
     * isset picture
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicture($index)
    {
        return isset($this->picture[$index]);
    }

    /**
     * unset picture
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicture($index)
    {
        unset($this->picture[$index]);
    }

    /**
     * Gets as picture
     *
     * @return \Pohoda\Stock\PictureType[]
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * @param \Pohoda\Stock\PictureType[] $picture
     * @return self
     */
    public function setPicture(array $picture)
    {
        $this->picture = $picture;
        return $this;
    }
}

