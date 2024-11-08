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

namespace Pohoda\Payment;

/**
 * Class representing PaymentTypeRootType.
 *
 * XSD Type: paymentTypeRoot
 */
class PaymentTypeRootType
{
    private ?string $version = null;
    private ?\Pohoda\Payment\PaymentHeaderType $paymentHeader = null;

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
     * Gets as paymentHeader.
     *
     * @return \Pohoda\Payment\PaymentHeaderType
     */
    public function getPaymentHeader()
    {
        return $this->paymentHeader;
    }

    /**
     * Sets a new paymentHeader.
     *
     * @return self
     */
    public function setPaymentHeader(\Pohoda\Payment\PaymentHeaderType $paymentHeader)
    {
        $this->paymentHeader = $paymentHeader;

        return $this;
    }
}
