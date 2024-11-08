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

namespace Pohoda\List;

/**
 * Class representing CreateAccountingType.
 *
 * XSD Type: createAccountingType
 */
class CreateAccountingType
{
    private ?string $code = null;
    private ?string $accounting = null;
    private ?string $agenda = null;
    private ?string $debit = null;
    private ?string $credit = null;

    /**
     * Gets as code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as accounting.
     *
     * @return string
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting.
     *
     * @param string $accounting
     *
     * @return self
     */
    public function setAccounting($accounting)
    {
        $this->accounting = $accounting;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as debit.
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
     * @param string $debit
     *
     * @return self
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Gets as credit.
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
     * @param string $credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }
}
