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

namespace Pohoda\Prodejka;

/**
 * Class representing PaymentsType.
 *
 * XSD Type: paymentsType
 */
class PaymentsType
{
    /**
     * Úhrady dokladu.
     *
     * @var \Pohoda\Prodejka\PaymentItemType[]
     */
    private array $paymentItem = [
    ];

    /**
     * Adds as paymentItem.
     *
     * Úhrady dokladu.
     *
     * @return self
     */
    public function addToPaymentItem(\Pohoda\Prodejka\PaymentItemType $paymentItem)
    {
        $this->paymentItem[] = $paymentItem;

        return $this;
    }

    /**
     * isset paymentItem.
     *
     * Úhrady dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPaymentItem($index)
    {
        return isset($this->paymentItem[$index]);
    }

    /**
     * unset paymentItem.
     *
     * Úhrady dokladu.
     *
     * @param int|string $index
     */
    public function unsetPaymentItem($index): void
    {
        unset($this->paymentItem[$index]);
    }

    /**
     * Gets as paymentItem.
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
     * Sets a new paymentItem.
     *
     * Úhrady dokladu.
     *
     * @param \Pohoda\Prodejka\PaymentItemType[] $paymentItem
     *
     * @return self
     */
    public function setPaymentItem(array $paymentItem)
    {
        $this->paymentItem = $paymentItem;

        return $this;
    }
}
