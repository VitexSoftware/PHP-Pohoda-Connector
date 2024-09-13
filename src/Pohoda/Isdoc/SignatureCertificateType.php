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

namespace Pohoda\Isdoc;

/**
 * Class representing SignatureCertificateType.
 *
 * XSD Type: signatureCertificateType
 */
class SignatureCertificateType
{
    /**
     * Sériové číslo podpisového certifikátu, který má být použit pro podepsání ISDOC dokumentu.
     */
    private string $serialNumber = null;

    /**
     * Gets as serialNumber.
     *
     * Sériové číslo podpisového certifikátu, který má být použit pro podepsání ISDOC dokumentu.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber.
     *
     * Sériové číslo podpisového certifikátu, který má být použit pro podepsání ISDOC dokumentu.
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }
}
