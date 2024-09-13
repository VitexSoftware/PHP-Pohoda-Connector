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

namespace Pohoda\Vydejka;

/**
 * Class representing VydejkaDetailType.
 *
 * XSD Type: vydejkaDetailType
 */
class VydejkaDetailType
{
    /**
     * @var \Pohoda\Vydejka\VydejkaItemType[]
     */
    private array $vydejkaItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private \Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as vydejkaItem.
     *
     * @return self
     */
    public function addToVydejkaItem(\Pohoda\Vydejka\VydejkaItemType $vydejkaItem)
    {
        $this->vydejkaItem[] = $vydejkaItem;

        return $this;
    }

    /**
     * isset vydejkaItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVydejkaItem($index)
    {
        return isset($this->vydejkaItem[$index]);
    }

    /**
     * unset vydejkaItem.
     *
     * @param int|string $index
     */
    public function unsetVydejkaItem($index): void
    {
        unset($this->vydejkaItem[$index]);
    }

    /**
     * Gets as vydejkaItem.
     *
     * @return \Pohoda\Vydejka\VydejkaItemType[]
     */
    public function getVydejkaItem()
    {
        return $this->vydejkaItem;
    }

    /**
     * Sets a new vydejkaItem.
     *
     * @param \Pohoda\Vydejka\VydejkaItemType[] $vydejkaItem
     *
     * @return self
     */
    public function setVydejkaItem(array $vydejkaItem)
    {
        $this->vydejkaItem = $vydejkaItem;

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
