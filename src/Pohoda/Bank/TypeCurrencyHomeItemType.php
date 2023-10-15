<?php

namespace Pohoda\Bank;

/**
 * Class representing TypeCurrencyHomeItemType
 *
 *
 * XSD Type: typeCurrencyHomeItem
 */
class TypeCurrencyHomeItemType
{
    /**
     * Jednotková cena položky dokladu. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @var float $unitPrice
     */
    private $unitPrice = null;

    /**
     * Gets as unitPrice
     *
     * Jednotková cena položky dokladu. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * Jednotková cena položky dokladu. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}

