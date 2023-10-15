<?php

namespace Pohoda\Bank;

/**
 * Class representing StatementNumberType
 *
 * Číslo výpisu je složeno z čísla výpisu + čísla bankovního pohybu. Celková délka čísla nesmí být větší než 10 znaků.
 * XSD Type: statementNumberType
 */
class StatementNumberType
{
    /**
     * Číslo bankovního výpisu.
     *
     * @var string $statementNumber
     */
    private $statementNumber = null;

    /**
     * Číslo bankovního pohybu v rámci výpisu.
     *
     * @var string $numberMovement
     */
    private $numberMovement = null;

    /**
     * Gets as statementNumber
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
     * Sets a new statementNumber
     *
     * Číslo bankovního výpisu.
     *
     * @param string $statementNumber
     * @return self
     */
    public function setStatementNumber($statementNumber)
    {
        $this->statementNumber = $statementNumber;
        return $this;
    }

    /**
     * Gets as numberMovement
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
     * Sets a new numberMovement
     *
     * Číslo bankovního pohybu v rámci výpisu.
     *
     * @param string $numberMovement
     * @return self
     */
    public function setNumberMovement($numberMovement)
    {
        $this->numberMovement = $numberMovement;
        return $this;
    }
}
