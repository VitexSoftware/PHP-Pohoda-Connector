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

namespace Pohoda\Accountancy;

/**
 * Class representing AccountingType.
 *
 * Zaúčtování dokladu
 * XSD Type: accountingType
 */
class AccountingType
{
    /**
     * MD.
     */
    private string $credit = null;

    /**
     * DAL.
     */
    private string $debit = null;

    /**
     * Gets as credit.
     *
     * MD.
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Sets a new credit.
     *
     * MD.
     *
     * @param string $credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Gets as debit.
     *
     * DAL.
     *
     * @return string
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Sets a new debit.
     *
     * DAL.
     *
     * @param string $debit
     *
     * @return self
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }
}
