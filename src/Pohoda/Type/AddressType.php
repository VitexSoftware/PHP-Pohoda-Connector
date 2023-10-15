<?php

namespace Pohoda\Type;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: address
 */
class AddressType
{
    /**
     * Identifikátor adresy.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Identifikátor externího systému.
     *
     * @var \Pohoda\Type\ExtIdType[] $extId
     */
    private $extId = [
        
    ];

    /**
     * @var \Pohoda\Type\AddressType $address
     */
    private $address = null;

    /**
     * @var \Pohoda\Type\ShipToAddressType[] $shipToAddress
     */
    private $shipToAddress = [
        
    ];

    /**
     * Gets as id
     *
     * Identifikátor adresy.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Identifikátor adresy.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as extId
     *
     * Identifikátor externího systému.
     *
     * @return self
     * @param \Pohoda\Type\ExtIdType $extId
     */
    public function addToExtId(\Pohoda\Type\ExtIdType $extId)
    {
        $this->extId[] = $extId;
        return $this;
    }

    /**
     * isset extId
     *
     * Identifikátor externího systému.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtId($index)
    {
        return isset($this->extId[$index]);
    }

    /**
     * unset extId
     *
     * Identifikátor externího systému.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtId($index)
    {
        unset($this->extId[$index]);
    }

    /**
     * Gets as extId
     *
     * Identifikátor externího systému.
     *
     * @return \Pohoda\Type\ExtIdType[]
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * Identifikátor externího systému.
     *
     * @param \Pohoda\Type\ExtIdType[] $extId
     * @return self
     */
    public function setExtId(array $extId = null)
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

    /**
     * Adds as shipToAddress
     *
     * @return self
     * @param \Pohoda\Type\ShipToAddressType $shipToAddress
     */
    public function addToShipToAddress(\Pohoda\Type\ShipToAddressType $shipToAddress)
    {
        $this->shipToAddress[] = $shipToAddress;
        return $this;
    }

    /**
     * isset shipToAddress
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToAddress($index)
    {
        return isset($this->shipToAddress[$index]);
    }

    /**
     * unset shipToAddress
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToAddress($index)
    {
        unset($this->shipToAddress[$index]);
    }

    /**
     * Gets as shipToAddress
     *
     * @return \Pohoda\Type\ShipToAddressType[]
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * Sets a new shipToAddress
     *
     * @param \Pohoda\Type\ShipToAddressType[] $shipToAddress
     * @return self
     */
    public function setShipToAddress(array $shipToAddress = null)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }
}

