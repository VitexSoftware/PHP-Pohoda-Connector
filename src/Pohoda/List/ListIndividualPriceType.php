<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListIndividualPriceType
 *
 *
 * XSD Type: listIndividualPriceType
 */
class ListIndividualPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\IndividualPrice\IndividualPriceType[] $individualPrice
     */
    private $individualPrice = [
        
    ];

    /**
     * Adds as individualPrice
     *
     * @return self
     * @param \Pohoda\IndividualPrice\IndividualPriceType $individualPrice
     */
    public function addToIndividualPrice(\Pohoda\IndividualPrice\IndividualPriceType $individualPrice)
    {
        $this->individualPrice[] = $individualPrice;
        return $this;
    }

    /**
     * isset individualPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndividualPrice($index)
    {
        return isset($this->individualPrice[$index]);
    }

    /**
     * unset individualPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndividualPrice($index)
    {
        unset($this->individualPrice[$index]);
    }

    /**
     * Gets as individualPrice
     *
     * @return \Pohoda\IndividualPrice\IndividualPriceType[]
     */
    public function getIndividualPrice()
    {
        return $this->individualPrice;
    }

    /**
     * Sets a new individualPrice
     *
     * @param \Pohoda\IndividualPrice\IndividualPriceType[] $individualPrice
     * @return self
     */
    public function setIndividualPrice(array $individualPrice = null)
    {
        $this->individualPrice = $individualPrice;
        return $this;
    }
}

