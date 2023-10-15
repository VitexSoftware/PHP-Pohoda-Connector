<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListPaymentType
 *
 *
 * XSD Type: listPaymentType
 */
class ListPaymentType extends ListVersionType
{
    /**
     * @var \Pohoda\Payment\PaymentTypeRootType[] $payment
     */
    private $payment = [
        
    ];

    /**
     * Adds as payment
     *
     * @return self
     * @param \Pohoda\Payment\PaymentTypeRootType $payment
     */
    public function addToPayment(\Pohoda\Payment\PaymentTypeRootType $payment)
    {
        $this->payment[] = $payment;
        return $this;
    }

    /**
     * isset payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * @return \Pohoda\Payment\PaymentTypeRootType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param \Pohoda\Payment\PaymentTypeRootType[] $payment
     * @return self
     */
    public function setPayment(array $payment = null)
    {
        $this->payment = $payment;
        return $this;
    }
}

