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

namespace Pohoda\Bank;

/**
 * Class representing StatementNumberType.
 *
 * Číslo výpisu je složeno z čísla výpisu + čísla bankovního pohybu. Celková délka čísla nesmí být větší než 10 znaků.
 * XSD Type: statementNumberType
 */
class StatementNumberType
{
    /**
     * Číslo bankovního výpisu.
     */
    private ?string $statementNumber = null;

    /**
     * Číslo bankovního pohybu v rámci výpisu.
     */
    private ?string $numberMovement = null;

    /**
     * Gets as statementNumber.
     *
     * Číslo bankovního výpisu.
     *
     * @return string
     */
    public function getStatementNumber()
    {
        return $this->statementNumber;
    }

    /**
     * Sets a new statementNumber.
     *
     * Číslo bankovního výpisu.
     *
     * @param string $statementNumber
     *
     * @return self
     */
    public function setStatementNumber($statementNumber)
    {
        $this->statementNumber = $statementNumber;

        return $this;
    }

    /**
     * Gets as numberMovement.
     *
     * Číslo bankovního pohybu v rámci výpisu.
     *
     * @return string
     */
    public function getNumberMovement()
    {
        return $this->numberMovement;
    }

    /**
     * Sets a new numberMovement.
     *
     * Číslo bankovního pohybu v rámci výpisu.
     *
     * @param string $numberMovement
     *
     * @return self
     */
    public function setNumberMovement($numberMovement)
    {
        $this->numberMovement = $numberMovement;

        return $this;
    }
}
