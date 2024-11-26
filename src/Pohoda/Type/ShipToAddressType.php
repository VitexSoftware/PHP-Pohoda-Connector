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

namespace Pohoda\Type;

/**
 * Class representing ShipToAddressType.
 *
 * Dodací adresa.
 * XSD Type: shipToAddressType
 */
class ShipToAddressType
{
    /**
     * Typ práce s dodací adresou. Výchozí hodnota je přidání nového dodací adresy.
     */
    private ?\Pohoda\Type\ActionTypeItemType $actionType = null;

    /**
     * ID dodací adresy.
     */
    private ?int $id = null;
    private ?string $extId = null;
    private ?string $company = null;
    private ?string $division = null;
    private ?string $name = null;
    private ?string $city = null;
    private ?string $street = null;
    private ?string $zip = null;
    private ?\Pohoda\Type\RefType $country = null;

    /**
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     */
    private ?string $phone = null;

    /**
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     */
    private ?string $email = null;

    /**
     * Výchozí dodací adresa.
     */
    private ?string $defaultShipAddress = null;

    /**
     * Gets as actionType.
     *
     * Typ práce s dodací adresou. Výchozí hodnota je přidání nového dodací adresy.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dodací adresou. Výchozí hodnota je přidání nového dodací adresy.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID dodací adresy.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID dodací adresy.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as company.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Gets as division.
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division.
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets as street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street.
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets as zip.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets a new zip.
     *
     * @param string $zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Gets as country.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country.
     *
     * @return self
     */
    public function setCountry(?\Pohoda\Type\RefType $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets as phone.
     *
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone.
     *
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets as email.
     *
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email.
     *
     * Pouze pro agendy vydané nabídky, přijaté poptávky, přijaté objednávky, vydané faktury, vydané zálohové faktury, ostatní pohledávky, interní doklady, prodejky a výdejky.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as defaultShipAddress.
     *
     * Výchozí dodací adresa.
     *
     * @return string
     */
    public function getDefaultShipAddress()
    {
        return $this->defaultShipAddress;
    }

    /**
     * Sets a new defaultShipAddress.
     *
     * Výchozí dodací adresa.
     *
     * @param string $defaultShipAddress
     *
     * @return self
     */
    public function setDefaultShipAddress($defaultShipAddress)
    {
        $this->defaultShipAddress = $defaultShipAddress;

        return $this;
    }
}
