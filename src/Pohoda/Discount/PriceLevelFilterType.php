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

namespace Pohoda\Discount;

/**
 * Class representing PriceLevelFilterType.
 *
 * XSD Type: priceLevelFilterType
 */
class PriceLevelFilterType
{
    private \Pohoda\Type\RefType $priceLevel = null;

    /**
     * Gets as priceLevel.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Sets a new priceLevel.
     *
     * @return self
     */
    public function setPriceLevel(\Pohoda\Type\RefType $priceLevel)
    {
        $this->priceLevel = $priceLevel;

        return $this;
    }
}
