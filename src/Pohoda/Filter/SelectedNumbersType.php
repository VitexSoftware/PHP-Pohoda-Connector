<?php

namespace Pohoda\Filter;

/**
 * Class representing SelectedNumbersType
 *
 *
 * XSD Type: selectedNumbersType
 */
class SelectedNumbersType
{
    /**
     * Evidenční číslo dokladu.
     *
     * @var \Pohoda\Type\NumberType[] $number
     */
    private $number = [
        
    ];

    /**
     * Adds as number
     *
     * Evidenční číslo dokladu.
     *
     * @return self
     * @param \Pohoda\Type\NumberType $number
     */
    public function addToNumber(\Pohoda\Type\NumberType $number)
    {
        $this->number[] = $number;
        return $this;
    }

    /**
     * isset number
     *
     * Evidenční číslo dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumber($index)
    {
        return isset($this->number[$index]);
    }

    /**
     * unset number
     *
     * Evidenční číslo dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumber($index)
    {
        unset($this->number[$index]);
    }

    /**
     * Gets as number
     *
     * Evidenční číslo dokladu.
     *
     * @return \Pohoda\Type\NumberType[]
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo dokladu.
     *
     * @param \Pohoda\Type\NumberType[] $number
     * @return self
     */
    public function setNumber(array $number)
    {
        $this->number = $number;
        return $this;
    }
}

