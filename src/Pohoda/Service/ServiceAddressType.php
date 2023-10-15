<?php

namespace Pohoda\Service;

/**
 * Class representing ServiceAddressType
 *
 *
 * XSD Type: serviceAddressType
 */
class ServiceAddressType
{
    /**
     * @var int $refAD
     */
    private $refAD = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * Gets as refAD
     *
     * @return int
     */
    public function getRefAD()
    {
        return $this->refAD;
    }

    /**
     * Sets a new refAD
     *
     * @param int $refAD
     * @return self
     */
    public function setRefAD($refAD)
    {
        $this->refAD = $refAD;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }
}
