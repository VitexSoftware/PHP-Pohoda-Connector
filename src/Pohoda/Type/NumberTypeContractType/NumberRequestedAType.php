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

namespace Pohoda\Type\NumberTypeContractType;

/**
 * Class representing NumberRequestedAType.
 */
class NumberRequestedAType
{
    private ?string $__value = null;

    /**
     * Pokud je hodnota 'true', nedovolí se vytvořit doklad, pokud zadané číslo již existuje.
     *  Pokud je hodnota 'false', doklad se vytvoří s upraveným číslem (do response se zapíše warning).
     */
    private ?string $checkDuplicity = null;

    /**
     * Construct.
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets a string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->__value;
    }

    /**
     * Gets or sets the inner value.
     *
     * @return string
     */
    public function value()
    {
        if ($args = \func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets as checkDuplicity.
     *
     * Pokud je hodnota 'true', nedovolí se vytvořit doklad, pokud zadané číslo již existuje.
     *  Pokud je hodnota 'false', doklad se vytvoří s upraveným číslem (do response se zapíše warning).
     *
     * @return string
     */
    public function getCheckDuplicity()
    {
        return $this->checkDuplicity;
    }

    /**
     * Sets a new checkDuplicity.
     *
     * Pokud je hodnota 'true', nedovolí se vytvořit doklad, pokud zadané číslo již existuje.
     *  Pokud je hodnota 'false', doklad se vytvoří s upraveným číslem (do response se zapíše warning).
     *
     * @param string $checkDuplicity
     *
     * @return self
     */
    public function setCheckDuplicity($checkDuplicity)
    {
        $this->checkDuplicity = $checkDuplicity;

        return $this;
    }
}
