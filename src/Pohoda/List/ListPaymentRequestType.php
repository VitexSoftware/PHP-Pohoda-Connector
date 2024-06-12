<?php

namespace Pohoda\List;

/**
 * Class representing ListPaymentRequestType
 *
 *
 * XSD Type: listPaymentRequestType
 */
class ListPaymentRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $paymentVersion
     */
    private $paymentVersion = null;

    /**
     * @var \Pohoda\Filter\RequestPaymentType[] $requestPayment
     */
    private $requestPayment = [
    ];

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
     * Gets as paymentVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getPaymentVersion()
    {
        return $this->paymentVersion;
    }

    /**
     * Sets a new paymentVersion
     *
     * Požadovaná verze.
     *
     * @param string $paymentVersion
     * @return self
     */
    public function setPaymentVersion($paymentVersion)
    {
        $this->paymentVersion = $paymentVersion;
        return $this;
    }

    /**
     * Adds as requestPayment
     *
     * @return self
     * @param \Pohoda\Filter\RequestPaymentType $requestPayment
     */
    public function addToRequestPayment(\Pohoda\Filter\RequestPaymentType $requestPayment)
    {
        $this->requestPayment[] = $requestPayment;
        return $this;
    }

    /**
     * isset requestPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestPayment($index)
    {
        return isset($this->requestPayment[$index]);
    }

    /**
     * unset requestPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestPayment($index)
    {
        unset($this->requestPayment[$index]);
    }

    /**
     * Gets as requestPayment
     *
     * @return \Pohoda\Filter\RequestPaymentType[]
     */
    public function getRequestPayment()
    {
        return $this->requestPayment;
    }

    /**
     * Sets a new requestPayment
     *
     * @param \Pohoda\Filter\RequestPaymentType[] $requestPayment
     * @return self
     */
    public function setRequestPayment(array $requestPayment)
    {
        $this->requestPayment = $requestPayment;
        return $this;
    }
}
