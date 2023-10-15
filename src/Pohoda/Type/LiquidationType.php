<?php

namespace Pohoda\Type;

/**
 * Class representing LiquidationType
 *
 * Informace o likvidaci faktury
 * XSD Type: liquidationType
 */
class LiquidationType
{
    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var float $amountHome
     */
    private $amountHome = null;

    /**
     * @var float $amountForeign
     */
    private $amountForeign = null;

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as amountHome
     *
     * @return float
     */
    public function getAmountHome()
    {
        return $this->amountHome;
    }

    /**
     * Sets a new amountHome
     *
     * @param float $amountHome
     * @return self
     */
    public function setAmountHome($amountHome)
    {
        $this->amountHome = $amountHome;
        return $this;
    }

    /**
     * Gets as amountForeign
     *
     * @return float
     */
    public function getAmountForeign()
    {
        return $this->amountForeign;
    }

    /**
     * Sets a new amountForeign
     *
     * @param float $amountForeign
     * @return self
     */
    public function setAmountForeign($amountForeign)
    {
        $this->amountForeign = $amountForeign;
        return $this;
    }
}
