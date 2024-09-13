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

namespace Pohoda\Filter;

/**
 * Class representing SelectedNumbersType.
 *
 * XSD Type: selectedNumbersType
 */
class SelectedNumbersType
{
    /**
     * Evidenční číslo dokladu.
     *
     * @var \Pohoda\Type\NumberType[]
     */
    private array $number = [
    ];

    /**
     * Adds as number.
     *
     * Evidenční číslo dokladu.
     *
     * @return self
     */
    public function addToNumber(\Pohoda\Type\NumberType $number)
    {
        $this->number[] = $number;

        return $this;
    }

    /**
     * isset number.
     *
     * Evidenční číslo dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetNumber($index)
    {
        return isset($this->number[$index]);
    }

    /**
     * unset number.
     *
     * Evidenční číslo dokladu.
     *
     * @param int|string $index
     */
    public function unsetNumber($index): void
    {
        unset($this->number[$index]);
    }

    /**
     * Gets as number.
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
     * Sets a new number.
     *
     * Evidenční číslo dokladu.
     *
     * @param \Pohoda\Type\NumberType[] $number
     *
     * @return self
     */
    public function setNumber(array $number)
    {
        $this->number = $number;

        return $this;
    }
}
