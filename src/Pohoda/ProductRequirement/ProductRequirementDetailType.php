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

namespace Pohoda\ProductRequirement;

/**
 * Class representing ProductRequirementDetailType.
 *
 * XSD Type: productRequirementDetailType
 */
class ProductRequirementDetailType
{
    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementItemType[]
     */
    private array $productRequirementItem = [
    ];

    /**
     * Adds as productRequirementItem.
     *
     * @return self
     */
    public function addToProductRequirementItem(\Pohoda\ProductRequirement\ProductRequirementItemType $productRequirementItem)
    {
        $this->productRequirementItem[] = $productRequirementItem;

        return $this;
    }

    /**
     * isset productRequirementItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductRequirementItem($index)
    {
        return isset($this->productRequirementItem[$index]);
    }

    /**
     * unset productRequirementItem.
     *
     * @param int|string $index
     */
    public function unsetProductRequirementItem($index): void
    {
        unset($this->productRequirementItem[$index]);
    }

    /**
     * Gets as productRequirementItem.
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementItemType[]
     */
    public function getProductRequirementItem()
    {
        return $this->productRequirementItem;
    }

    /**
     * Sets a new productRequirementItem.
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementItemType[] $productRequirementItem
     *
     * @return self
     */
    public function setProductRequirementItem(array $productRequirementItem)
    {
        $this->productRequirementItem = $productRequirementItem;

        return $this;
    }
}
