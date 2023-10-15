<?php

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationDetailType
 *
 *
 * XSD Type: automaticLiquidationDetailType
 */
class AutomaticLiquidationDetailType
{
    /**
     * Informace o bankovním dokladu.
     *
     * @var \Pohoda\MovementDetailType $movementDetail
     */
    private $movementDetail = null;

    /**
     * Informace o průběhu likvidace.
     *
     * @var \Pohoda\LiquidationDetailType $liquidationDetail
     */
    private $liquidationDetail = null;

    /**
     * Gets as movementDetail
     *
     * Informace o bankovním dokladu.
     *
     * @return \Pohoda\MovementDetailType
     */
    public function getMovementDetail()
    {
        return $this->movementDetail;
    }

    /**
     * Sets a new movementDetail
     *
     * Informace o bankovním dokladu.
     *
     * @param \Pohoda\MovementDetailType $movementDetail
     * @return self
     */
    public function setMovementDetail(\Pohoda\MovementDetailType $movementDetail)
    {
        $this->movementDetail = $movementDetail;
        return $this;
    }

    /**
     * Gets as liquidationDetail
     *
     * Informace o průběhu likvidace.
     *
     * @return \Pohoda\LiquidationDetailType
     */
    public function getLiquidationDetail()
    {
        return $this->liquidationDetail;
    }

    /**
     * Sets a new liquidationDetail
     *
     * Informace o průběhu likvidace.
     *
     * @param \Pohoda\LiquidationDetailType $liquidationDetail
     * @return self
     */
    public function setLiquidationDetail(\Pohoda\LiquidationDetailType $liquidationDetail)
    {
        $this->liquidationDetail = $liquidationDetail;
        return $this;
    }
}

