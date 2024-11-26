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
 * Class representing RecyclingContribType.
 *
 * XSD Type: recyclingContribType
 */
class RecyclingContribType
{
    /**
     * Recyklační příspěvek.
     */
    private ?\Pohoda\Type\RefType $recyclingContribType = null;

    /**
     * Koeficient pro přepočet měrné jednotky.
     */
    private ?float $coefficientOfRecyclingContrib = null;

    /**
     * Gets as recyclingContribType.
     *
     * Recyklační příspěvek.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getRecyclingContribType()
    {
        return $this->recyclingContribType;
    }

    /**
     * Sets a new recyclingContribType.
     *
     * Recyklační příspěvek.
     *
     * @return self
     */
    public function setRecyclingContribType(?\Pohoda\Type\RefType $recyclingContribType = null)
    {
        $this->recyclingContribType = $recyclingContribType;

        return $this;
    }

    /**
     * Gets as coefficientOfRecyclingContrib.
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @return float
     */
    public function getCoefficientOfRecyclingContrib()
    {
        return $this->coefficientOfRecyclingContrib;
    }

    /**
     * Sets a new coefficientOfRecyclingContrib.
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @param float $coefficientOfRecyclingContrib
     *
     * @return self
     */
    public function setCoefficientOfRecyclingContrib($coefficientOfRecyclingContrib)
    {
        $this->coefficientOfRecyclingContrib = $coefficientOfRecyclingContrib;

        return $this;
    }
}
