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
 * Class representing ListRecyclingContribType.
 *
 * XSD Type: listRecyclingContribType
 */
class ListRecyclingContribType extends ListVersionType
{
    /**
     * @var \Pohoda\RecyclingContrib\RecyclingContribType[]
     */
    private array $recyclingContrib = [
    ];

    /**
     * Adds as recyclingContrib.
     *
     * @return self
     */
    public function addToRecyclingContrib(\Pohoda\RecyclingContrib\RecyclingContribType $recyclingContrib)
    {
        $this->recyclingContrib[] = $recyclingContrib;

        return $this;
    }

    /**
     * isset recyclingContrib.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRecyclingContrib($index)
    {
        return isset($this->recyclingContrib[$index]);
    }

    /**
     * unset recyclingContrib.
     *
     * @param int|string $index
     */
    public function unsetRecyclingContrib($index): void
    {
        unset($this->recyclingContrib[$index]);
    }

    /**
     * Gets as recyclingContrib.
     *
     * @return \Pohoda\RecyclingContrib\RecyclingContribType[]
     */
    public function getRecyclingContrib()
    {
        return $this->recyclingContrib;
    }

    /**
     * Sets a new recyclingContrib.
     *
     * @param \Pohoda\RecyclingContrib\RecyclingContribType[] $recyclingContrib
     *
     * @return self
     */
    public function setRecyclingContrib(?array $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;

        return $this;
    }
}
