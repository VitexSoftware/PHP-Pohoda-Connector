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

namespace Pohoda\Vyroba;

/**
 * Class representing ProductionListType.
 *
 * XSD Type: productionListType
 */
class ProductionListType
{
    /**
     * Položka výrobku (Výrobního listu).
     *
     * @var \Pohoda\Vyroba\ProductionListItemType[]
     */
    private array $productionListItem = [
    ];

    /**
     * Adds as productionListItem.
     *
     * Položka výrobku (Výrobního listu).
     *
     * @return self
     */
    public function addToProductionListItem(\Pohoda\Vyroba\ProductionListItemType $productionListItem)
    {
        $this->productionListItem[] = $productionListItem;

        return $this;
    }

    /**
     * isset productionListItem.
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductionListItem($index)
    {
        return isset($this->productionListItem[$index]);
    }

    /**
     * unset productionListItem.
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param int|string $index
     */
    public function unsetProductionListItem($index): void
    {
        unset($this->productionListItem[$index]);
    }

    /**
     * Gets as productionListItem.
     *
     * Položka výrobku (Výrobního listu).
     *
     * @return \Pohoda\Vyroba\ProductionListItemType[]
     */
    public function getProductionListItem()
    {
        return $this->productionListItem;
    }

    /**
     * Sets a new productionListItem.
     *
     * Položka výrobku (Výrobního listu).
     *
     * @param \Pohoda\Vyroba\ProductionListItemType[] $productionListItem
     *
     * @return self
     */
    public function setProductionListItem(array $productionListItem)
    {
        $this->productionListItem = $productionListItem;

        return $this;
    }
}
