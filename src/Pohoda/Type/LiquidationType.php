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
 * Class representing LiquidationType.
 *
 * Informace o likvidaci faktury
 * XSD Type: liquidationType
 */
class LiquidationType
{
    private \DateTime $date = null;
    private float $amountHome = null;
    private float $amountForeign = null;

    /**
     * Gets as date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date.
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as amountHome.
     *
     * @return float
     */
    public function getAmountHome()
    {
        return $this->amountHome;
    }

    /**
     * Sets a new amountHome.
     *
     * @param float $amountHome
     *
     * @return self
     */
    public function setAmountHome($amountHome)
    {
        $this->amountHome = $amountHome;

        return $this;
    }

    /**
     * Gets as amountForeign.
     *
     * @return float
     */
    public function getAmountForeign()
    {
        return $this->amountForeign;
    }

    /**
     * Sets a new amountForeign.
     *
     * @param float $amountForeign
     *
     * @return self
     */
    public function setAmountForeign($amountForeign)
    {
        $this->amountForeign = $amountForeign;

        return $this;
    }
}
