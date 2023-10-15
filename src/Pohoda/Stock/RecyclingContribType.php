<?php

namespace Pohoda\Stock;

/**
 * Class representing RecyclingContribType
 *
 *
 * XSD Type: recyclingContribType
 */
class RecyclingContribType
{
    /**
     * Recyklační příspěvek.
     *
     * @var \Pohoda\Type\RefType $recyclingContribType
     */
    private $recyclingContribType = null;

    /**
     * Koeficient pro přepočet měrné jednotky.
     *
     * @var float $coefficientOfRecyclingContrib
     */
    private $coefficientOfRecyclingContrib = null;

    /**
     * Gets as recyclingContribType
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
     * Sets a new recyclingContribType
     *
     * Recyklační příspěvek.
     *
     * @param \Pohoda\Type\RefType $recyclingContribType
     * @return self
     */
    public function setRecyclingContribType(?\Pohoda\Type\RefType $recyclingContribType = null)
    {
        $this->recyclingContribType = $recyclingContribType;
        return $this;
    }

    /**
     * Gets as coefficientOfRecyclingContrib
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
     * Sets a new coefficientOfRecyclingContrib
     *
     * Koeficient pro přepočet měrné jednotky.
     *
     * @param float $coefficientOfRecyclingContrib
     * @return self
     */
    public function setCoefficientOfRecyclingContrib($coefficientOfRecyclingContrib)
    {
        $this->coefficientOfRecyclingContrib = $coefficientOfRecyclingContrib;
        return $this;
    }
}

