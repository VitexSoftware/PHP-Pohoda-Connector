<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListOfferType
 *
 *
 * XSD Type: listOfferType
 */
class ListOfferType extends ListVersionType
{
    /**
     * @var \Pohoda\Offer\OfferType[] $offer
     */
    private $offer = [

    ];

    /**
     * Adds as offer
     *
     * @return self
     * @param \Pohoda\Offer\OfferType $offer
     */
    public function addToOffer(\Pohoda\Offer\OfferType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * @return \Pohoda\Offer\OfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * @param \Pohoda\Offer\OfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer = null)
    {
        $this->offer = $offer;
        return $this;
    }
}
