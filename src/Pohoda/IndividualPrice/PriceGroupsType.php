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

namespace Pohoda\IndividualPrice;

/**
 * Class representing PriceGroupsType.
 *
 * XSD Type: priceGroupsType
 */
class PriceGroupsType
{
    /**
     * Individuální cena cenové skupiny.
     *
     * @var \Pohoda\IndividualPrice\PriceGroupItemType[]
     */
    private array $priceGroupItem = [
    ];

    /**
     * Adds as priceGroupItem.
     *
     * Individuální cena cenové skupiny.
     *
     * @return self
     */
    public function addToPriceGroupItem(\Pohoda\IndividualPrice\PriceGroupItemType $priceGroupItem)
    {
        $this->priceGroupItem[] = $priceGroupItem;

        return $this;
    }

    /**
     * isset priceGroupItem.
     *
     * Individuální cena cenové skupiny.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPriceGroupItem($index)
    {
        return isset($this->priceGroupItem[$index]);
    }

    /**
     * unset priceGroupItem.
     *
     * Individuální cena cenové skupiny.
     *
     * @param int|string $index
     */
    public function unsetPriceGroupItem($index): void
    {
        unset($this->priceGroupItem[$index]);
    }

    /**
     * Gets as priceGroupItem.
     *
     * Individuální cena cenové skupiny.
     *
     * @return \Pohoda\IndividualPrice\PriceGroupItemType[]
     */
    public function getPriceGroupItem()
    {
        return $this->priceGroupItem;
    }

    /**
     * Sets a new priceGroupItem.
     *
     * Individuální cena cenové skupiny.
     *
     * @param \Pohoda\IndividualPrice\PriceGroupItemType[] $priceGroupItem
     *
     * @return self
     */
    public function setPriceGroupItem(?array $priceGroupItem = null)
    {
        $this->priceGroupItem = $priceGroupItem;

        return $this;
    }
}
