<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Stock;

/**
 * Class representing PicturesType.
 *
 * XSD Type: picturesType
 */
class PicturesType
{
    /**
     * @var \Pohoda\Stock\PictureType[]
     */
    private array $picture = [
    ];

    /**
     * Adds as picture.
     *
     * @return self
     */
    public function addToPicture(\Pohoda\Stock\PictureType $picture)
    {
        $this->picture[] = $picture;

        return $this;
    }

    /**
     * isset picture.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPicture($index)
    {
        return isset($this->picture[$index]);
    }

    /**
     * unset picture.
     *
     * @param int|string $index
     */
    public function unsetPicture($index): void
    {
        unset($this->picture[$index]);
    }

    /**
     * Gets as picture.
     *
     * @return \Pohoda\Stock\PictureType[]
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture.
     *
     * @param \Pohoda\Stock\PictureType[] $picture
     *
     * @return self
     */
    public function setPicture(array $picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
