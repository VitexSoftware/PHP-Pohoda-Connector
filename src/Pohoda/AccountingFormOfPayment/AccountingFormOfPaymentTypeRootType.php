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

namespace Pohoda\AccountingFormOfPayment;

/**
 * Class representing AccountingFormOfPaymentTypeRootType.
 *
 * XSD Type: accountingFormOfPaymentTypeRoot
 */
class AccountingFormOfPaymentTypeRootType
{
    private string $version = null;
    private \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as accountingFormOfPaymentHeader.
     *
     * @return \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType
     */
    public function getAccountingFormOfPaymentHeader()
    {
        return $this->accountingFormOfPaymentHeader;
    }

    /**
     * Sets a new accountingFormOfPaymentHeader.
     *
     * @return self
     */
    public function setAccountingFormOfPaymentHeader(\Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader)
    {
        $this->accountingFormOfPaymentHeader = $accountingFormOfPaymentHeader;

        return $this;
    }
}
