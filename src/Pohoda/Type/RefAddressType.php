<?php

namespace Pohoda\Type;

/**
 * Class representing RefAddressType
 *
 * Odkaz kontaktní osoby na hlavní adresu.
 * XSD Type: refAddressType
 */
class RefAddressType
{
    /**
     * @var int $refAD
     */
    private $refAD = null;

    /**
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * @var \Pohoda\Type\AddressType $address
     */
    private $address = null;

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
     * Gets as extId
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Pohoda\Type\AddressType $address
     * @return self
     */
    public function setAddress(?\Pohoda\Type\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

