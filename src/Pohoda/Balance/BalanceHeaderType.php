<?php

namespace Pohoda\Balance;

/**
 * Class representing BalanceHeaderType
 *
 *
 * XSD Type: balanceHeaderType
 */
class BalanceHeaderType
{
    /**
     * Datum ke kterému je saldo sestaveno.
     *
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * Gets as dateTo
     *
     * Datum ke kterému je saldo sestaveno.
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * Datum ke kterému je saldo sestaveno.
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
