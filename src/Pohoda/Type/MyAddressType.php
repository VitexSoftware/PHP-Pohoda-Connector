<?php

namespace Pohoda\Type;

/**
 * Class representing MyAddressType
 *
 *
 * XSD Type: myAddress
 */
class MyAddressType
{
    /**
     * @var \Pohoda\Type\AddressInternetType $address
     */
    private $address = null;

    /**
     * @var \Pohoda\Type\EstablishmentType $establishment
     */
    private $establishment = null;

    /**
     * Gets as address
     *
     * @return \Pohoda\Type\AddressInternetType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Pohoda\Type\AddressInternetType $address
     * @return self
     */
    public function setAddress(\Pohoda\Type\AddressInternetType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as establishment
     *
     * @return \Pohoda\Type\EstablishmentType
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment
     *
     * @param \Pohoda\Type\EstablishmentType $establishment
     * @return self
     */
    public function setEstablishment(?\Pohoda\Type\EstablishmentType $establishment = null)
    {
        $this->establishment = $establishment;
        return $this;
    }
}
