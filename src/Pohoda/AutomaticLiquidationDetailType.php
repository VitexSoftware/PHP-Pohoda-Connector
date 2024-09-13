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

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationDetailType.
 *
 * XSD Type: automaticLiquidationDetailType
 */
class AutomaticLiquidationDetailType
{
    /**
     * Informace o bankovním dokladu.
     */
    private \Pohoda\MovementDetailType $movementDetail = null;

    /**
     * Informace o průběhu likvidace.
     */
    private \Pohoda\LiquidationDetailType $liquidationDetail = null;

    /**
     * Gets as movementDetail.
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
     * Sets a new movementDetail.
     *
     * Informace o bankovním dokladu.
     *
     * @return self
     */
    public function setMovementDetail(\Pohoda\MovementDetailType $movementDetail)
    {
        $this->movementDetail = $movementDetail;

        return $this;
    }

    /**
     * Gets as liquidationDetail.
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
     * Sets a new liquidationDetail.
     *
     * Informace o průběhu likvidace.
     *
     * @return self
     */
    public function setLiquidationDetail(\Pohoda\LiquidationDetailType $liquidationDetail)
    {
        $this->liquidationDetail = $liquidationDetail;

        return $this;
    }
}
