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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListVyrobaType.
 *
 * XSD Type: listVyrobaType
 */
class ListVyrobaType extends ListVersionType
{
    /**
     * @var \Pohoda\Vyroba\VyrobaType[]
     */
    private array $vyroba = [
    ];

    /**
     * Adds as vyroba.
     *
     * @return self
     */
    public function addToVyroba(\Pohoda\Vyroba\VyrobaType $vyroba)
    {
        $this->vyroba[] = $vyroba;

        return $this;
    }

    /**
     * isset vyroba.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVyroba($index)
    {
        return isset($this->vyroba[$index]);
    }

    /**
     * unset vyroba.
     *
     * @param int|string $index
     */
    public function unsetVyroba($index): void
    {
        unset($this->vyroba[$index]);
    }

    /**
     * Gets as vyroba.
     *
     * @return \Pohoda\Vyroba\VyrobaType[]
     */
    public function getVyroba()
    {
        return $this->vyroba;
    }

    /**
     * Sets a new vyroba.
     *
     * @param \Pohoda\Vyroba\VyrobaType[] $vyroba
     *
     * @return self
     */
    public function setVyroba(?array $vyroba = null)
    {
        $this->vyroba = $vyroba;

        return $this;
    }
}
