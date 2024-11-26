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

namespace Pohoda\Balance;

/**
 * Class representing BalanceHeaderType.
 *
 * XSD Type: balanceHeaderType
 */
class BalanceHeaderType
{
    /**
     * Datum ke kterému je saldo sestaveno.
     */
    private ?\DateTime $dateTo = null;

    /**
     * Gets as dateTo.
     *
     * Datum ke kterému je saldo sestaveno.
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo.
     *
     * Datum ke kterému je saldo sestaveno.
     *
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }
}
