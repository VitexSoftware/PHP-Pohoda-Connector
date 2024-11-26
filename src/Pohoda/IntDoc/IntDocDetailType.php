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

namespace Pohoda\IntDoc;

/**
 * Class representing IntDocDetailType.
 *
 * XSD Type: intDocDetailType
 */
class IntDocDetailType
{
    /**
     * @var \Pohoda\IntDoc\IntDocItemType[]
     */
    private array $intDocItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private ?\Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as intDocItem.
     *
     * @return self
     */
    public function addToIntDocItem(\Pohoda\IntDoc\IntDocItemType $intDocItem)
    {
        $this->intDocItem[] = $intDocItem;

        return $this;
    }

    /**
     * isset intDocItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntDocItem($index)
    {
        return isset($this->intDocItem[$index]);
    }

    /**
     * unset intDocItem.
     *
     * @param int|string $index
     */
    public function unsetIntDocItem($index): void
    {
        unset($this->intDocItem[$index]);
    }

    /**
     * Gets as intDocItem.
     *
     * @return \Pohoda\IntDoc\IntDocItemType[]
     */
    public function getIntDocItem()
    {
        return $this->intDocItem;
    }

    /**
     * Sets a new intDocItem.
     *
     * @param \Pohoda\IntDoc\IntDocItemType[] $intDocItem
     *
     * @return self
     */
    public function setIntDocItem(array $intDocItem)
    {
        $this->intDocItem = $intDocItem;

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
