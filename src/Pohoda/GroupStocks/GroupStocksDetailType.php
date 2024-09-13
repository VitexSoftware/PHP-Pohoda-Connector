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

namespace Pohoda\GroupStocks;

/**
 * Class representing GroupStocksDetailType.
 *
 * XSD Type: groupStocksDetailType
 */
class GroupStocksDetailType
{
    /**
     * Varianta skupiny zásob.
     *
     * @var \Pohoda\GroupStocks\VariantsItemType[]
     */
    private array $variant = [
    ];

    /**
     * Adds as variant.
     *
     * Varianta skupiny zásob.
     *
     * @return self
     */
    public function addToVariant(\Pohoda\GroupStocks\VariantsItemType $variant)
    {
        $this->variant[] = $variant;

        return $this;
    }

    /**
     * isset variant.
     *
     * Varianta skupiny zásob.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVariant($index)
    {
        return isset($this->variant[$index]);
    }

    /**
     * unset variant.
     *
     * Varianta skupiny zásob.
     *
     * @param int|string $index
     */
    public function unsetVariant($index): void
    {
        unset($this->variant[$index]);
    }

    /**
     * Gets as variant.
     *
     * Varianta skupiny zásob.
     *
     * @return \Pohoda\GroupStocks\VariantsItemType[]
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Sets a new variant.
     *
     * Varianta skupiny zásob.
     *
     * @param \Pohoda\GroupStocks\VariantsItemType[] $variant
     *
     * @return self
     */
    public function setVariant(array $variant)
    {
        $this->variant = $variant;

        return $this;
    }
}
