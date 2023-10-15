<?php

namespace Pohoda\Payment;

/**
 * Class representing TicketType
 *
 *
 * XSD Type: ticketType
 */
class TicketType
{
    /**
     * Hodnota stravenky.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * Hodnota stravenky.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Hodnota stravenky.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

