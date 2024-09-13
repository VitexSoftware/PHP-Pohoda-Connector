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

namespace Pohoda\Invoice\InvoiceHeaderType;

/**
 * Class representing PaymentAccountAType.
 */
class PaymentAccountAType
{
    private string $accountNo = null;
    private string $bankCode = null;

    /**
     * Gets as accountNo.
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets a new accountNo.
     *
     * @param string $accountNo
     *
     * @return self
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;

        return $this;
    }

    /**
     * Gets as bankCode.
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets a new bankCode.
     *
     * @param string $bankCode
     *
     * @return self
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }
}
