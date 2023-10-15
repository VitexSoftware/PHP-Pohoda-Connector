<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceSummaryType
 *
 *
 * XSD Type: invoiceSummaryType
 */
class InvoiceSummaryType
{
    /**
     * Zaokrouhlení celkové částky dokladu + typ zaokrouhlení.
     *  Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
     *
     * @var string $roundingDocument
     */
    private $roundingDocument = null;

    /**
     * Zaokrouhlení DPH. Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
     *
     * @var string $roundingVAT
     */
    private $roundingVAT = null;

    /**
     * Vypočíst DPH ze zaokrouhlení.
     *
     * @var bool $calculateVAT
     */
    private $calculateVAT = null;

    /**
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data zdanitelného plnění nebo data vystavení dokladu. (pouze CZ verze)
     *
     * @var string $typeCalculateVATInclusivePrice
     */
    private $typeCalculateVATInclusivePrice = null;

    /**
     * Kč. V případě použití cizí měny, je tuzemská částka při importu ignorována.
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
     * Zaokrouhlení celkové částky dokladu + typ zaokrouhlení.
     *  Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
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
     * Zaokrouhlení celkové částky dokladu + typ zaokrouhlení.
     *  Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
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
     * Zaokrouhlení DPH. Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
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
     * Zaokrouhlení DPH. Pokud není uvedeno zaokrouhlení, nastaví se hodnoty z Globálního nastavení.
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
     * Gets as calculateVAT
     *
     * Vypočíst DPH ze zaokrouhlení.
     *
     * @return bool
     */
    public function getCalculateVAT()
    {
        return $this->calculateVAT;
    }

    /**
     * Sets a new calculateVAT
     *
     * Vypočíst DPH ze zaokrouhlení.
     *
     * @param bool $calculateVAT
     * @return self
     */
    public function setCalculateVAT($calculateVAT)
    {
        $this->calculateVAT = $calculateVAT;
        return $this;
    }

    /**
     * Gets as typeCalculateVATInclusivePrice
     *
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data zdanitelného plnění nebo data vystavení dokladu. (pouze CZ verze)
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
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data zdanitelného plnění nebo data vystavení dokladu. (pouze CZ verze)
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
     * Kč. V případě použití cizí měny, je tuzemská částka při importu ignorována.
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
     * Kč. V případě použití cizí měny, je tuzemská částka při importu ignorována.
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
