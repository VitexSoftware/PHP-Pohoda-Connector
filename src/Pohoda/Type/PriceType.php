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

namespace Pohoda\Type;

/**
 * Class representing PriceType.
 *
 * Rozepsání ceny a DPH
 * XSD Type: priceType
 */
class PriceType
{
    /**
     * Částka v příslušné sazbě.
     */
    private float $price = null;

    /**
     * Částka DPH.
     */
    private float $priceVAT = null;

    /**
     * Gets as price.
     *
     * Částka v příslušné sazbě.
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
     * Částka v příslušné sazbě.
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
     * Gets as priceVAT.
     *
     * Částka DPH.
     *
     * @return float
     */
    public function getPriceVAT()
    {
        return $this->priceVAT;
    }

    /**
     * Sets a new priceVAT.
     *
     * Částka DPH.
     *
     * @param float $priceVAT
     *
     * @return self
     */
    public function setPriceVAT($priceVAT)
    {
        $this->priceVAT = $priceVAT;

        return $this;
    }
}
