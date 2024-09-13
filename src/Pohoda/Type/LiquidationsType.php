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
 * Class representing LiquidationsType.
 *
 * Informace o likvidacích faktury.
 * XSD Type: liquidationsType
 */
class LiquidationsType
{
    /**
     * @var \Pohoda\Type\LiquidationItemType[]
     */
    private array $liquidation = [
    ];

    /**
     * Adds as liquidation.
     *
     * @return self
     */
    public function addToLiquidation(\Pohoda\Type\LiquidationItemType $liquidation)
    {
        $this->liquidation[] = $liquidation;

        return $this;
    }

    /**
     * isset liquidation.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLiquidation($index)
    {
        return isset($this->liquidation[$index]);
    }

    /**
     * unset liquidation.
     *
     * @param int|string $index
     */
    public function unsetLiquidation($index): void
    {
        unset($this->liquidation[$index]);
    }

    /**
     * Gets as liquidation.
     *
     * @return \Pohoda\Type\LiquidationItemType[]
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation.
     *
     * @param \Pohoda\Type\LiquidationItemType[] $liquidation
     *
     * @return self
     */
    public function setLiquidation(array $liquidation)
    {
        $this->liquidation = $liquidation;

        return $this;
    }
}
