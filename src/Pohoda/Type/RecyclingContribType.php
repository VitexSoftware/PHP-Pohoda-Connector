<?php

namespace Pohoda\Type;

/**
 * Class representing RecyclingContribType
 *
 *
 * XSD Type: recyclingContribType
 */
class RecyclingContribType
{
    /**
     * Typ recyklačního příspěvku.
     *
     * @var \Pohoda\Type\RefType $recyclingContribType
     */
    private $recyclingContribType = null;

    /**
     * Text recyklačního příspěvku.
     *
     * @var string $recyclingContribText
     */
    private $recyclingContribText = null;

    /**
     * Částka recyklačního příspěvku.
     *
     * @var float $recyclingContribAmount
     */
    private $recyclingContribAmount = null;

    /**
     * M. j. recyklačního příspěvku.
     *
     * @var string $recyclingContribUnit
     */
    private $recyclingContribUnit = null;

    /**
     * Koeficient pro přepočet měrné jednotky recyklačního příspěvku.
     *
     * @var float $coefficientOfRecyclingContrib
     */
    private $coefficientOfRecyclingContrib = null;

    /**
     * Gets as recyclingContribType
     *
     * Typ recyklačního příspěvku.
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
     * Typ recyklačního příspěvku.
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
     * Gets as recyclingContribText
     *
     * Text recyklačního příspěvku.
     *
     * @return string
     */
    public function getRecyclingContribText()
    {
        return $this->recyclingContribText;
    }

    /**
     * Sets a new recyclingContribText
     *
     * Text recyklačního příspěvku.
     *
     * @param string $recyclingContribText
     * @return self
     */
    public function setRecyclingContribText($recyclingContribText)
    {
        $this->recyclingContribText = $recyclingContribText;
        return $this;
    }

    /**
     * Gets as recyclingContribAmount
     *
     * Částka recyklačního příspěvku.
     *
     * @return float
     */
    public function getRecyclingContribAmount()
    {
        return $this->recyclingContribAmount;
    }

    /**
     * Sets a new recyclingContribAmount
     *
     * Částka recyklačního příspěvku.
     *
     * @param float $recyclingContribAmount
     * @return self
     */
    public function setRecyclingContribAmount($recyclingContribAmount)
    {
        $this->recyclingContribAmount = $recyclingContribAmount;
        return $this;
    }

    /**
     * Gets as recyclingContribUnit
     *
     * M. j. recyklačního příspěvku.
     *
     * @return string
     */
    public function getRecyclingContribUnit()
    {
        return $this->recyclingContribUnit;
    }

    /**
     * Sets a new recyclingContribUnit
     *
     * M. j. recyklačního příspěvku.
     *
     * @param string $recyclingContribUnit
     * @return self
     */
    public function setRecyclingContribUnit($recyclingContribUnit)
    {
        $this->recyclingContribUnit = $recyclingContribUnit;
        return $this;
    }

    /**
     * Gets as coefficientOfRecyclingContrib
     *
     * Koeficient pro přepočet měrné jednotky recyklačního příspěvku.
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
     * Koeficient pro přepočet měrné jednotky recyklačního příspěvku.
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
