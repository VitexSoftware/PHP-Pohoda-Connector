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

namespace Pohoda\IndividualPrice;

/**
 * Class representing IndividualPriceType.
 *
 * XSD Type: individualPriceType
 */
class IndividualPriceType
{
    private ?string $version = null;

    /**
     * Identifikace partnera.
     */
    private ?\Pohoda\IndividualPrice\AddressType $partnerIdentity = null;

    /**
     * Individuální ceny partnera.
     */
    private ?\Pohoda\IndividualPrice\SetPricesType $setPrices = null;

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
     * Gets as partnerIdentity.
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
     * Sets a new partnerIdentity.
     *
     * Identifikace partnera.
     *
     * @return self
     */
    public function setPartnerIdentity(\Pohoda\IndividualPrice\AddressType $partnerIdentity)
    {
        $this->partnerIdentity = $partnerIdentity;

        return $this;
    }

    /**
     * Gets as setPrices.
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
     * Sets a new setPrices.
     *
     * Individuální ceny partnera.
     *
     * @return self
     */
    public function setSetPrices(\Pohoda\IndividualPrice\SetPricesType $setPrices)
    {
        $this->setPrices = $setPrices;

        return $this;
    }
}
