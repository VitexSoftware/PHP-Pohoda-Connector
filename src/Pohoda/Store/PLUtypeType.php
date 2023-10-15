<?php

namespace Pohoda\Store;

/**
 * Class representing PLUtypeType
 *
 *
 * XSD Type: PLUtype
 */
class PLUtypeType
{
    /**
     * Použít PLU rozsah
     *
     * @var bool $usePLU
     */
    private $usePLU = null;

    /**
     * Dolní limit PLU.
     *
     * @var int $lowerLimit
     */
    private $lowerLimit = null;

    /**
     * Horní limit PLU.
     *
     * @var int $upperLimit
     */
    private $upperLimit = null;

    /**
     * Gets as usePLU
     *
     * Použít PLU rozsah
     *
     * @return bool
     */
    public function getUsePLU()
    {
        return $this->usePLU;
    }

    /**
     * Sets a new usePLU
     *
     * Použít PLU rozsah
     *
     * @param bool $usePLU
     * @return self
     */
    public function setUsePLU($usePLU)
    {
        $this->usePLU = $usePLU;
        return $this;
    }

    /**
     * Gets as lowerLimit
     *
     * Dolní limit PLU.
     *
     * @return int
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * Sets a new lowerLimit
     *
     * Dolní limit PLU.
     *
     * @param int $lowerLimit
     * @return self
     */
    public function setLowerLimit($lowerLimit)
    {
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * Gets as upperLimit
     *
     * Horní limit PLU.
     *
     * @return int
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }

    /**
     * Sets a new upperLimit
     *
     * Horní limit PLU.
     *
     * @param int $upperLimit
     * @return self
     */
    public function setUpperLimit($upperLimit)
    {
        $this->upperLimit = $upperLimit;
        return $this;
    }
}

