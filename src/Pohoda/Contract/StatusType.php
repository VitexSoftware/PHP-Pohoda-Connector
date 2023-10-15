<?php

namespace Pohoda\Contract;

use Pohoda\Type\RefTypeLongType;

/**
 * Class representing StatusType
 *
 *
 * XSD Type: statusType
 */
class StatusType extends RefTypeLongType
{
    /**
     * Uzamknout a dále nepoužívat (pouze export).
     *
     * @var string $unused
     */
    private $unused = null;

    /**
     * Vyřízeno (pouze export).
     *
     * @var string $executed
     */
    private $executed = null;

    /**
     * Gets as unused
     *
     * Uzamknout a dále nepoužívat (pouze export).
     *
     * @return string
     */
    public function getUnused()
    {
        return $this->unused;
    }

    /**
     * Sets a new unused
     *
     * Uzamknout a dále nepoužívat (pouze export).
     *
     * @param string $unused
     * @return self
     */
    public function setUnused($unused)
    {
        $this->unused = $unused;
        return $this;
    }

    /**
     * Gets as executed
     *
     * Vyřízeno (pouze export).
     *
     * @return string
     */
    public function getExecuted()
    {
        return $this->executed;
    }

    /**
     * Sets a new executed
     *
     * Vyřízeno (pouze export).
     *
     * @param string $executed
     * @return self
     */
    public function setExecuted($executed)
    {
        $this->executed = $executed;
        return $this;
    }
}
