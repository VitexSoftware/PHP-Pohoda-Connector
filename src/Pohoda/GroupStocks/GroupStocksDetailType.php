<?php

namespace Pohoda\GroupStocks;

/**
 * Class representing GroupStocksDetailType
 *
 *
 * XSD Type: groupStocksDetailType
 */
class GroupStocksDetailType
{
    /**
     * Varianta skupiny zásob.
     *
     * @var \Pohoda\GroupStocks\VariantsItemType[] $variant
     */
    private $variant = [
    ];

    /**
     * Adds as variant
     *
     * Varianta skupiny zásob.
     *
     * @return self
     * @param \Pohoda\GroupStocks\VariantsItemType $variant
     */
    public function addToVariant(\Pohoda\GroupStocks\VariantsItemType $variant)
    {
        $this->variant[] = $variant;
        return $this;
    }

    /**
     * isset variant
     *
     * Varianta skupiny zásob.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariant($index)
    {
        return isset($this->variant[$index]);
    }

    /**
     * unset variant
     *
     * Varianta skupiny zásob.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariant($index)
    {
        unset($this->variant[$index]);
    }

    /**
     * Gets as variant
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
     * Sets a new variant
     *
     * Varianta skupiny zásob.
     *
     * @param \Pohoda\GroupStocks\VariantsItemType[] $variant
     * @return self
     */
    public function setVariant(array $variant)
    {
        $this->variant = $variant;
        return $this;
    }
}
