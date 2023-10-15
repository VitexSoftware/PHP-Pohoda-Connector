<?php

namespace Pohoda\Bank;

/**
 * Class representing BankSummaryType
 *
 *
 * XSD Type: bankSummaryType
 */
class BankSummaryType
{
    /**
     * Zaokrouhlení celkové částky dokladu.
     *
     * @var string $roundingDocument
     */
    private $roundingDocument = null;

    /**
     * Zaokrouhlení DPH.
     *
     * @var string $roundingVAT
     */
    private $roundingVAT = null;

    /**
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37 (pouze CZ verze pro JU nebo DE).
     *
     * @var string $typeCalculateVATInclusivePrice
     */
    private $typeCalculateVATInclusivePrice = null;

    /**
     * Kč.
     *
     * @var \Pohoda\Type\TypeCurrencyHomeType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Cizí měna.
     *
     * @var \Pohoda\Type\TypeCurrencyForeignType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Gets as roundingDocument
     *
     * Zaokrouhlení celkové částky dokladu.
     *
     * @return string
     */
    public function getRoundingDocument()
    {
        return $this->roundingDocument;
    }

    /**
     * Sets a new roundingDocument
     *
     * Zaokrouhlení celkové částky dokladu.
     *
     * @param string $roundingDocument
     * @return self
     */
    public function setRoundingDocument($roundingDocument)
    {
        $this->roundingDocument = $roundingDocument;
        return $this;
    }

    /**
     * Gets as roundingVAT
     *
     * Zaokrouhlení DPH.
     *
     * @return string
     */
    public function getRoundingVAT()
    {
        return $this->roundingVAT;
    }

    /**
     * Sets a new roundingVAT
     *
     * Zaokrouhlení DPH.
     *
     * @param string $roundingVAT
     * @return self
     */
    public function setRoundingVAT($roundingVAT)
    {
        $this->roundingVAT = $roundingVAT;
        return $this;
    }

    /**
     * Gets as typeCalculateVATInclusivePrice
     *
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37 (pouze CZ verze pro JU nebo DE).
     *
     * @return string
     */
    public function getTypeCalculateVATInclusivePrice()
    {
        return $this->typeCalculateVATInclusivePrice;
    }

    /**
     * Sets a new typeCalculateVATInclusivePrice
     *
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37 (pouze CZ verze pro JU nebo DE).
     *
     * @param string $typeCalculateVATInclusivePrice
     * @return self
     */
    public function setTypeCalculateVATInclusivePrice($typeCalculateVATInclusivePrice)
    {
        $this->typeCalculateVATInclusivePrice = $typeCalculateVATInclusivePrice;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Kč.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Kč.
     *
     * @param \Pohoda\Type\TypeCurrencyHomeType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\TypeCurrencyForeignType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Cizí měna.
     *
     * @param \Pohoda\Type\TypeCurrencyForeignType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Type\TypeCurrencyForeignType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }
}
