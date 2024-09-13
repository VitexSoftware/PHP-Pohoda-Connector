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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListOfferType.
 *
 * XSD Type: listOfferType
 */
class ListOfferType extends ListVersionType
{
    /**
     * @var \Pohoda\Offer\OfferType[]
     */
    private array $offer = [
    ];

    /**
     * Adds as offer.
     *
     * @return self
     */
    public function addToOffer(\Pohoda\Offer\OfferType $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer.
     *
     * @param int|string $index
     */
    public function unsetOffer($index): void
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer.
     *
     * @return \Pohoda\Offer\OfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer.
     *
     * @param \Pohoda\Offer\OfferType[] $offer
     *
     * @return self
     */
    public function setOffer(?array $offer = null)
    {
        $this->offer = $offer;

        return $this;
    }
}
