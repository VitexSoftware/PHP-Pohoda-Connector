<?php

namespace Pohoda\Payment;

/**
 * Class representing PaymentTypeRootType
 *
 *
 * XSD Type: paymentTypeRoot
 */
class PaymentTypeRootType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Payment\PaymentHeaderType $paymentHeader
     */
    private $paymentHeader = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as paymentHeader
     *
     * @return \Pohoda\Payment\PaymentHeaderType
     */
    public function getPaymentHeader()
    {
        return $this->paymentHeader;
    }

    /**
     * Sets a new paymentHeader
     *
     * @param \Pohoda\Payment\PaymentHeaderType $paymentHeader
     * @return self
     */
    public function setPaymentHeader(\Pohoda\Payment\PaymentHeaderType $paymentHeader)
    {
        $this->paymentHeader = $paymentHeader;
        return $this;
    }
}

