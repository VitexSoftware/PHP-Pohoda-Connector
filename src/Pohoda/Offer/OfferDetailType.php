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

namespace Pohoda\Offer;

/**
 * Class representing OfferDetailType.
 *
 * XSD Type: offerDetailType
 */
class OfferDetailType
{
    /**
     * @var \Pohoda\Offer\OfferItemType[]
     */
    private array $offerItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private ?\Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as offerItem.
     *
     * @return self
     */
    public function addToOfferItem(\Pohoda\Offer\OfferItemType $offerItem)
    {
        $this->offerItem[] = $offerItem;

        return $this;
    }

    /**
     * isset offerItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOfferItem($index)
    {
        return isset($this->offerItem[$index]);
    }

    /**
     * unset offerItem.
     *
     * @param int|string $index
     */
    public function unsetOfferItem($index): void
    {
        unset($this->offerItem[$index]);
    }

    /**
     * Gets as offerItem.
     *
     * @return \Pohoda\Offer\OfferItemType[]
     */
    public function getOfferItem()
    {
        return $this->offerItem;
    }

    /**
     * Sets a new offerItem.
     *
     * @param \Pohoda\Offer\OfferItemType[] $offerItem
     *
     * @return self
     */
    public function setOfferItem(array $offerItem)
    {
        $this->offerItem = $offerItem;

        return $this;
    }

    /**
     * Gets as roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return self
     */
    public function setRoundingItem(?\Pohoda\Type\RoundingItemType $roundingItem = null)
    {
        $this->roundingItem = $roundingItem;

        return $this;
    }
}
