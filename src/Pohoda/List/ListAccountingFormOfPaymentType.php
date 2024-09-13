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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingFormOfPaymentType.
 *
 * XSD Type: listAccountingFormOfPaymentType
 */
class ListAccountingFormOfPaymentType extends ListVersionType
{
    /**
     * @var \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[]
     */
    private array $accountingFormOfPayment = [
    ];

    /**
     * Adds as accountingFormOfPayment.
     *
     * @return self
     */
    public function addToAccountingFormOfPayment(\Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType $accountingFormOfPayment)
    {
        $this->accountingFormOfPayment[] = $accountingFormOfPayment;

        return $this;
    }

    /**
     * isset accountingFormOfPayment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingFormOfPayment($index)
    {
        return isset($this->accountingFormOfPayment[$index]);
    }

    /**
     * unset accountingFormOfPayment.
     *
     * @param int|string $index
     */
    public function unsetAccountingFormOfPayment($index): void
    {
        unset($this->accountingFormOfPayment[$index]);
    }

    /**
     * Gets as accountingFormOfPayment.
     *
     * @return \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[]
     */
    public function getAccountingFormOfPayment()
    {
        return $this->accountingFormOfPayment;
    }

    /**
     * Sets a new accountingFormOfPayment.
     *
     * @param \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentTypeRootType[] $accountingFormOfPayment
     *
     * @return self
     */
    public function setAccountingFormOfPayment(?array $accountingFormOfPayment = null)
    {
        $this->accountingFormOfPayment = $accountingFormOfPayment;

        return $this;
    }
}
