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
 * Class representing ProdejkaSummaryType.
 *
 * XSD Type: prodejkaSummaryType
 */
class ProdejkaSummaryType
{
    /**
     * Zaokrouhlení celkové částky dokladu.
     */
    private ?string $roundingDocument = null;

    /**
     * Zaokrouhlení DPH.
     */
    private ?string $roundingVAT = null;

    /**
     * Vypočíst DPH ze zaokrouhlení.
     */
    private ?bool $calculateVAT = null;

    /**
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data vystavení dokladu. (pouze CZ verze).
     */
    private ?string $typeCalculateVATInclusivePrice = null;

    /**
     * Kč.
     */
    private ?\Pohoda\Type\TypeCurrencyHomeType $homeCurrency = null;

    /**
     * Gets as roundingDocument.
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
     * Sets a new roundingDocument.
     *
     * Zaokrouhlení celkové částky dokladu.
     *
     * @param string $roundingDocument
     *
     * @return self
     */
    public function setRoundingDocument($roundingDocument)
    {
        $this->roundingDocument = $roundingDocument;

        return $this;
    }

    /**
     * Gets as roundingVAT.
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
     * Sets a new roundingVAT.
     *
     * Zaokrouhlení DPH.
     *
     * @param string $roundingVAT
     *
     * @return self
     */
    public function setRoundingVAT($roundingVAT)
    {
        $this->roundingVAT = $roundingVAT;

        return $this;
    }

    /**
     * Gets as calculateVAT.
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
     * Sets a new calculateVAT.
     *
     * Vypočíst DPH ze zaokrouhlení.
     *
     * @param bool $calculateVAT
     *
     * @return self
     */
    public function setCalculateVAT($calculateVAT)
    {
        $this->calculateVAT = $calculateVAT;

        return $this;
    }

    /**
     * Gets as typeCalculateVATInclusivePrice.
     *
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data vystavení dokladu. (pouze CZ verze)
     *
     * @return string
     */
    public function getTypeCalculateVATInclusivePrice()
    {
        return $this->typeCalculateVATInclusivePrice;
    }

    /**
     * Sets a new typeCalculateVATInclusivePrice.
     *
     * Způsob výpočtu hodnoty DPH z částky včetně daně dle § 37. Pokud není element uveden, použije se způsob výpočtu dle data vystavení dokladu. (pouze CZ verze)
     *
     * @param string $typeCalculateVATInclusivePrice
     *
     * @return self
     */
    public function setTypeCalculateVATInclusivePrice($typeCalculateVATInclusivePrice)
    {
        $this->typeCalculateVATInclusivePrice = $typeCalculateVATInclusivePrice;

        return $this;
    }

    /**
     * Gets as homeCurrency.
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
     * Sets a new homeCurrency.
     *
     * Kč.
     *
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }
}
