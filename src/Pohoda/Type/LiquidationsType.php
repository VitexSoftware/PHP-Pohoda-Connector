<?php

namespace Pohoda\Type;

/**
 * Class representing LiquidationsType
 *
 * Informace o likvidacích faktury.
 * XSD Type: liquidationsType
 */
class LiquidationsType
{
    /**
     * @var \Pohoda\Type\LiquidationItemType[] $liquidation
     */
    private $liquidation = [

    ];

    /**
     * Adds as liquidation
     *
     * @return self
     * @param \Pohoda\Type\LiquidationItemType $liquidation
     */
    public function addToLiquidation(\Pohoda\Type\LiquidationItemType $liquidation)
    {
        $this->liquidation[] = $liquidation;
        return $this;
    }

    /**
     * isset liquidation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLiquidation($index)
    {
        return isset($this->liquidation[$index]);
    }

    /**
     * unset liquidation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLiquidation($index)
    {
        unset($this->liquidation[$index]);
    }

    /**
     * Gets as liquidation
     *
     * @return \Pohoda\Type\LiquidationItemType[]
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation
     *
     * @param \Pohoda\Type\LiquidationItemType[] $liquidation
     * @return self
     */
    public function setLiquidation(array $liquidation)
    {
        $this->liquidation = $liquidation;
        return $this;
    }
}
