<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing AllStocksType
 *
 *
 * XSD Type: allStocksType
 */
class AllStocksType
{
    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Sleva v procentech.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Sleva v procentech.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * Sleva v procentech.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
}

