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
 * Class representing IntParameterValueType.
 *
 * XSD Type: intParameterValueType
 */
class IntParameterValueType
{
    /**
     * ID, používá se jen u typu seznam.
     */
    private ?int $parameterValueID = null;

    /**
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     */
    private ?string $parameterValue = null;

    /**
     * Pořadí, používá se jen u typu seznam.
     */
    private ?int $parameterOrder = null;

    /**
     * Gets as parameterValueID.
     *
     * ID, používá se jen u typu seznam.
     *
     * @return int
     */
    public function getParameterValueID()
    {
        return $this->parameterValueID;
    }

    /**
     * Sets a new parameterValueID.
     *
     * ID, používá se jen u typu seznam.
     *
     * @param int $parameterValueID
     *
     * @return self
     */
    public function setParameterValueID($parameterValueID)
    {
        $this->parameterValueID = $parameterValueID;

        return $this;
    }

    /**
     * Gets as parameterValue.
     *
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Sets a new parameterValue.
     *
     * Hodnota parametru, závisí na typu. Pokud je zadáno u parametru typu seznam a zároveň není zadáno ID, musí být tato hodnota v databázi unikátní.
     *
     * @param string $parameterValue
     *
     * @return self
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Gets as parameterOrder.
     *
     * Pořadí, používá se jen u typu seznam.
     *
     * @return int
     */
    public function getParameterOrder()
    {
        return $this->parameterOrder;
    }

    /**
     * Sets a new parameterOrder.
     *
     * Pořadí, používá se jen u typu seznam.
     *
     * @param int $parameterOrder
     *
     * @return self
     */
    public function setParameterOrder($parameterOrder)
    {
        $this->parameterOrder = $parameterOrder;

        return $this;
    }
}
