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

namespace Pohoda\Stock\StockHeaderType;

/**
 * Class representing PurchasingPriceAType.
 */
class PurchasingPriceAType
{
    private ?float $__value = null;

    /**
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     */
    private ?bool $payVAT = null;

    /**
     * Construct.
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets a string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->__value;
    }

    /**
     * Gets or sets the inner value.
     *
     * @return float
     */
    public function value()
    {
        if ($args = \func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets as payVAT.
     *
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     *
     * @return bool
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT.
     *
     * Příznak určuje zda se jedná o nákupní cenu s/bez DPH. Pokud není uveden atribut payVAT, jedná se o „Nákupní cena bez DPH“.
     *
     * @param bool $payVAT
     *
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;

        return $this;
    }
}
