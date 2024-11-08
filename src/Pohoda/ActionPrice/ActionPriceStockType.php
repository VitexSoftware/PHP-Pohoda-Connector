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

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceStockType.
 *
 * XSD Type: actionPriceStockType
 */
class ActionPriceStockType
{
    /**
     * Akční cena skladové zásoby.
     */
    private ?float $price = null;

    /**
     * Sleva v procentech.
     */
    private ?float $discountPercentage = null;

    /**
     * Fixace Akční ceny skladové zásoby.
     */
    private ?string $fixedPrice = null;

    /**
     * Gets as price.
     *
     * Akční cena skladové zásoby.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price.
     *
     * Akční cena skladové zásoby.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as discountPercentage.
     *
     * Sleva v procentech.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage.
     *
     * Sleva v procentech.
     *
     * @param float $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as fixedPrice.
     *
     * Fixace Akční ceny skladové zásoby.
     *
     * @return string
     */
    public function getFixedPrice()
    {
        return $this->fixedPrice;
    }

    /**
     * Sets a new fixedPrice.
     *
     * Fixace Akční ceny skladové zásoby.
     *
     * @param string $fixedPrice
     *
     * @return self
     */
    public function setFixedPrice($fixedPrice)
    {
        $this->fixedPrice = $fixedPrice;

        return $this;
    }
}
