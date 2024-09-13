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

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaDetailType.
 *
 * XSD Type: prodejkaDetailType
 */
class ProdejkaDetailType
{
    /**
     * @var \Pohoda\Prodejka\ProdejkaItemType[]
     */
    private array $prodejkaItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     */
    private \Pohoda\Type\RoundingItemType $roundingItem = null;

    /**
     * Adds as prodejkaItem.
     *
     * @return self
     */
    public function addToProdejkaItem(\Pohoda\Prodejka\ProdejkaItemType $prodejkaItem)
    {
        $this->prodejkaItem[] = $prodejkaItem;

        return $this;
    }

    /**
     * isset prodejkaItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProdejkaItem($index)
    {
        return isset($this->prodejkaItem[$index]);
    }

    /**
     * unset prodejkaItem.
     *
     * @param int|string $index
     */
    public function unsetProdejkaItem($index): void
    {
        unset($this->prodejkaItem[$index]);
    }

    /**
     * Gets as prodejkaItem.
     *
     * @return \Pohoda\Prodejka\ProdejkaItemType[]
     */
    public function getProdejkaItem()
    {
        return $this->prodejkaItem;
    }

    /**
     * Sets a new prodejkaItem.
     *
     * @param \Pohoda\Prodejka\ProdejkaItemType[] $prodejkaItem
     *
     * @return self
     */
    public function setProdejkaItem(array $prodejkaItem)
    {
        $this->prodejkaItem = $prodejkaItem;

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
