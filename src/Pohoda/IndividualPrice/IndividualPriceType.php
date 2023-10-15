<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing IndividualPriceType
 *
 *
 * XSD Type: individualPriceType
 */
class IndividualPriceType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Identifikace partnera.
     *
     * @var \Pohoda\IndividualPrice\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Individuální ceny partnera.
     *
     * @var \Pohoda\IndividualPrice\SetPricesType $setPrices
     */
    private $setPrices = null;

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
     * Gets as partnerIdentity
     *
     * Identifikace partnera.
     *
     * @return \Pohoda\IndividualPrice\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity
     *
     * Identifikace partnera.
     *
     * @param \Pohoda\IndividualPrice\AddressType $partnerIdentity
     * @return self
     */
    public function setPartnerIdentity(\Pohoda\IndividualPrice\AddressType $partnerIdentity)
    {
        $this->partnerIdentity = $partnerIdentity;
        return $this;
    }

    /**
     * Gets as setPrices
     *
     * Individuální ceny partnera.
     *
     * @return \Pohoda\IndividualPrice\SetPricesType
     */
    public function getSetPrices()
    {
        return $this->setPrices;
    }

    /**
     * Sets a new setPrices
     *
     * Individuální ceny partnera.
     *
     * @param \Pohoda\IndividualPrice\SetPricesType $setPrices
     * @return self
     */
    public function setSetPrices(\Pohoda\IndividualPrice\SetPricesType $setPrices)
    {
        $this->setPrices = $setPrices;
        return $this;
    }
}

