<?php

namespace Pohoda\Parameter;

/**
 * Class representing UserCodePartType
 *
 * Zdrojový kód uživatelského rozšíření.
 * XSD Type: userCodePartType
 */
class UserCodePartType
{
    /**
     * @var string $part0
     */
    private $part0 = null;

    /**
     * @var string $part1
     */
    private $part1 = null;

    /**
     * @var string $part2
     */
    private $part2 = null;

    /**
     * @var string $part3
     */
    private $part3 = null;

    /**
     * @var string $part4
     */
    private $part4 = null;

    /**
     * Gets as part0
     *
     * @return string
     */
    public function getPart0()
    {
        return $this->part0;
    }

    /**
     * Sets a new part0
     *
     * @param string $part0
     * @return self
     */
    public function setPart0($part0)
    {
        $this->part0 = $part0;
        return $this;
    }

    /**
     * Gets as part1
     *
     * @return string
     */
    public function getPart1()
    {
        return $this->part1;
    }

    /**
     * Sets a new part1
     *
     * @param string $part1
     * @return self
     */
    public function setPart1($part1)
    {
        $this->part1 = $part1;
        return $this;
    }

    /**
     * Gets as part2
     *
     * @return string
     */
    public function getPart2()
    {
        return $this->part2;
    }

    /**
     * Sets a new part2
     *
     * @param string $part2
     * @return self
     */
    public function setPart2($part2)
    {
        $this->part2 = $part2;
        return $this;
    }

    /**
     * Gets as part3
     *
     * @return string
     */
    public function getPart3()
    {
        return $this->part3;
    }

    /**
     * Sets a new part3
     *
     * @param string $part3
     * @return self
     */
    public function setPart3($part3)
    {
        $this->part3 = $part3;
        return $this;
    }

    /**
     * Gets as part4
     *
     * @return string
     */
    public function getPart4()
    {
        return $this->part4;
    }

    /**
     * Sets a new part4
     *
     * @param string $part4
     * @return self
     */
    public function setPart4($part4)
    {
        $this->part4 = $part4;
        return $this;
    }
}
