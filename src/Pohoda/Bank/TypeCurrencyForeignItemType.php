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

namespace Pohoda\Bank;

/**
 * Class representing TypeCurrencyForeignItemType.
 *
 * XSD Type: typeCurrencyForeignItem
 */
class TypeCurrencyForeignItemType
{
    /**
     * Jednotková cena položky dokladu. Pokud není uvedena, bere se jako NULOVÁ.
     */
    private ?float $unitPrice = null;

    /**
     * Gets as unitPrice.
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
     * Sets a new unitPrice.
     *
     * Jednotková cena položky dokladu. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
