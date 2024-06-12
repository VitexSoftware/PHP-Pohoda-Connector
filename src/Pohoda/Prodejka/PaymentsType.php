<?php

namespace Pohoda\Prodejka;

/**
 * Class representing PaymentsType
 *
 *
 * XSD Type: paymentsType
 */
class PaymentsType
{
    /**
     * Úhrady dokladu.
     *
     * @var \Pohoda\Prodejka\PaymentItemType[] $paymentItem
     */
    private $paymentItem = [
    ];

    /**
     * Adds as paymentItem
     *
     * Úhrady dokladu.
     *
     * @return self
     * @param \Pohoda\Prodejka\PaymentItemType $paymentItem
     */
    public function addToPaymentItem(\Pohoda\Prodejka\PaymentItemType $paymentItem)
    {
        $this->paymentItem[] = $paymentItem;
        return $this;
    }

    /**
     * isset paymentItem
     *
     * Úhrady dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentItem($index)
    {
        return isset($this->paymentItem[$index]);
    }

    /**
     * unset paymentItem
     *
     * Úhrady dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentItem($index)
    {
        unset($this->paymentItem[$index]);
    }

    /**
     * Gets as paymentItem
     *
     * Úhrady dokladu.
     *
     * @return \Pohoda\Prodejka\PaymentItemType[]
     */
    public function getPaymentItem()
    {
        return $this->paymentItem;
    }

    /**
     * Sets a new paymentItem
     *
     * Úhrady dokladu.
     *
     * @param \Pohoda\Prodejka\PaymentItemType[] $paymentItem
     * @return self
     */
    public function setPaymentItem(array $paymentItem)
    {
        $this->paymentItem = $paymentItem;
        return $this;
    }
}
