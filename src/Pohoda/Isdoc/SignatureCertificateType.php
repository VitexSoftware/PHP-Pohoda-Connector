<?php

namespace Pohoda\Isdoc;

/**
 * Class representing SignatureCertificateType
 *
 *
 * XSD Type: signatureCertificateType
 */
class SignatureCertificateType
{
    /**
     * Sériové číslo podpisového certifikátu, který má být použit pro podepsání ISDOC dokumentu.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * Gets as serialNumber
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
     * Sets a new serialNumber
     *
     * Sériové číslo podpisového certifikátu, který má být použit pro podepsání ISDOC dokumentu.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }
}

