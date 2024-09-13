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
 * Class representing ListPaymentType.
 *
 * XSD Type: listPaymentType
 */
class ListPaymentType extends ListVersionType
{
    /**
     * @var \Pohoda\Payment\PaymentTypeRootType[]
     */
    private array $payment = [
    ];

    /**
     * Adds as payment.
     *
     * @return self
     */
    public function addToPayment(\Pohoda\Payment\PaymentTypeRootType $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * isset payment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment.
     *
     * @param int|string $index
     */
    public function unsetPayment($index): void
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment.
     *
     * @return \Pohoda\Payment\PaymentTypeRootType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment.
     *
     * @param \Pohoda\Payment\PaymentTypeRootType[] $payment
     *
     * @return self
     */
    public function setPayment(?array $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }
}
