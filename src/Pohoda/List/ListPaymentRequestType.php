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
 * Class representing ListPaymentRequestType.
 *
 * XSD Type: listPaymentRequestType
 */
class ListPaymentRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $paymentVersion = null;

    /**
     * @var \Pohoda\Filter\RequestPaymentType[]
     */
    private array $requestPayment = [
    ];

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
     * Gets as paymentVersion.
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
     * Sets a new paymentVersion.
     *
     * Požadovaná verze.
     *
     * @param string $paymentVersion
     *
     * @return self
     */
    public function setPaymentVersion($paymentVersion)
    {
        $this->paymentVersion = $paymentVersion;

        return $this;
    }

    /**
     * Adds as requestPayment.
     *
     * @return self
     */
    public function addToRequestPayment(\Pohoda\Filter\RequestPaymentType $requestPayment)
    {
        $this->requestPayment[] = $requestPayment;

        return $this;
    }

    /**
     * isset requestPayment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestPayment($index)
    {
        return isset($this->requestPayment[$index]);
    }

    /**
     * unset requestPayment.
     *
     * @param int|string $index
     */
    public function unsetRequestPayment($index): void
    {
        unset($this->requestPayment[$index]);
    }

    /**
     * Gets as requestPayment.
     *
     * @return \Pohoda\Filter\RequestPaymentType[]
     */
    public function getRequestPayment()
    {
        return $this->requestPayment;
    }

    /**
     * Sets a new requestPayment.
     *
     * @param \Pohoda\Filter\RequestPaymentType[] $requestPayment
     *
     * @return self
     */
    public function setRequestPayment(array $requestPayment)
    {
        $this->requestPayment = $requestPayment;

        return $this;
    }
}
