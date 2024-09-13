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

namespace Pohoda\Enquiry;

/**
 * Class representing EnquiryDetailType.
 *
 * XSD Type: enquiryDetailType
 */
class EnquiryDetailType
{
    /**
     * @var \Pohoda\Enquiry\EnquiryItemType[]
     */
    private array $enquiryItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private \Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as enquiryItem.
     *
     * @return self
     */
    public function addToEnquiryItem(\Pohoda\Enquiry\EnquiryItemType $enquiryItem)
    {
        $this->enquiryItem[] = $enquiryItem;

        return $this;
    }

    /**
     * isset enquiryItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiryItem($index)
    {
        return isset($this->enquiryItem[$index]);
    }

    /**
     * unset enquiryItem.
     *
     * @param int|string $index
     */
    public function unsetEnquiryItem($index): void
    {
        unset($this->enquiryItem[$index]);
    }

    /**
     * Gets as enquiryItem.
     *
     * @return \Pohoda\Enquiry\EnquiryItemType[]
     */
    public function getEnquiryItem()
    {
        return $this->enquiryItem;
    }

    /**
     * Sets a new enquiryItem.
     *
     * @param \Pohoda\Enquiry\EnquiryItemType[] $enquiryItem
     *
     * @return self
     */
    public function setEnquiryItem(array $enquiryItem)
    {
        $this->enquiryItem = $enquiryItem;

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
