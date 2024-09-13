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

namespace Pohoda\MKasa;

/**
 * Class representing CompanyInfoType.
 *
 * XSD Type: companyInfoType
 */
class CompanyInfoType
{
    private string $key = null;
    private \Pohoda\Type\AddressInternetType $address = null;
    private \Pohoda\Type\EstablishmentType $establishment = null;
    private string $unitType = null;
    private string $suffix = null;
    private string $stateType = null;
    private string $register = null;
    private \Pohoda\MKasa\VatPayerType $vatPayer = null;
    private string $changeForFoodVouchers = null;

    /**
     * Gets as key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Gets as address.
     *
     * @return \Pohoda\Type\AddressInternetType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address.
     *
     * @return self
     */
    public function setAddress(\Pohoda\Type\AddressInternetType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as establishment.
     *
     * @return \Pohoda\Type\EstablishmentType
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment.
     *
     * @return self
     */
    public function setEstablishment(?\Pohoda\Type\EstablishmentType $establishment = null)
    {
        $this->establishment = $establishment;

        return $this;
    }

    /**
     * Gets as unitType.
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * Sets a new unitType.
     *
     * @param string $unitType
     *
     * @return self
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * Gets as suffix.
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Sets a new suffix.
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Gets as stateType.
     *
     * @return string
     */
    public function getStateType()
    {
        return $this->stateType;
    }

    /**
     * Sets a new stateType.
     *
     * @param string $stateType
     *
     * @return self
     */
    public function setStateType($stateType)
    {
        $this->stateType = $stateType;

        return $this;
    }

    /**
     * Gets as register.
     *
     * @return string
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Sets a new register.
     *
     * @param string $register
     *
     * @return self
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Gets as vatPayer.
     *
     * @return \Pohoda\MKasa\VatPayerType
     */
    public function getVatPayer()
    {
        return $this->vatPayer;
    }

    /**
     * Sets a new vatPayer.
     *
     * @return self
     */
    public function setVatPayer(\Pohoda\MKasa\VatPayerType $vatPayer)
    {
        $this->vatPayer = $vatPayer;

        return $this;
    }

    /**
     * Gets as changeForFoodVouchers.
     *
     * @return string
     */
    public function getChangeForFoodVouchers()
    {
        return $this->changeForFoodVouchers;
    }

    /**
     * Sets a new changeForFoodVouchers.
     *
     * @param string $changeForFoodVouchers
     *
     * @return self
     */
    public function setChangeForFoodVouchers($changeForFoodVouchers)
    {
        $this->changeForFoodVouchers = $changeForFoodVouchers;

        return $this;
    }
}
