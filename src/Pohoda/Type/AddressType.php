<?php

namespace Pohoda\Type;

/**
 * Class representing AddressType
 *
 * Adresa.
 * XSD Type: addressType
 */
class AddressType
{
    /**
     * Při nastavení atributu na hodnotu "true" bude vytvořena vazba adresy dokladu na Adresář programu POHODA.
     *  Vyhledání adresy v Adresáři programu POHODA bude dle elementů "ico", "dic", "icdph" (pro POHODA SK), "company" a "name".
     *  K vyhledání se použije první neprázdný element (podle pořadí uvedeného v předchozí větě).
     *  K vytvoření vazby adresy dokladu na Adresář dojde pouze tehdy, pokud bude nalezena pouze 1 adresa.
     *
     * @var bool $linkToAddress
     */
    private $linkToAddress = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $division
     */
    private $division = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $zip
     */
    private $zip = null;

    /**
     * @var string $ico
     */
    private $ico = null;

    /**
     * @var string $dic
     */
    private $dic = null;

    /**
     * Typ plátce DPH.
     *
     * @var string $vATPayerType
     */
    private $vATPayerType = null;

    /**
     * @var string $icDph
     */
    private $icDph = null;

    /**
     * @var \Pohoda\Type\RefType $country
     */
    private $country = null;

    /**
     * Podporováno pouze u objednávek a nabídek.
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $mobilPhone
     */
    private $mobilPhone = null;

    /**
     * Podporováno pouze u objednávek a nabídek.
     *
     * @var string $fax
     */
    private $fax = null;

    /**
     * Podporováno pouze u dokladů (Nabídka, Poptávky, Přijaté objednávky, Vydané Objednávky, Vydané Faktury, Vydané Zálohové Faktury, Ostatní Pohledávky, Výdejky).
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as linkToAddress
     *
     * Při nastavení atributu na hodnotu "true" bude vytvořena vazba adresy dokladu na Adresář programu POHODA.
     *  Vyhledání adresy v Adresáři programu POHODA bude dle elementů "ico", "dic", "icdph" (pro POHODA SK), "company" a "name".
     *  K vyhledání se použije první neprázdný element (podle pořadí uvedeného v předchozí větě).
     *  K vytvoření vazby adresy dokladu na Adresář dojde pouze tehdy, pokud bude nalezena pouze 1 adresa.
     *
     * @return bool
     */
    public function getLinkToAddress()
    {
        return $this->linkToAddress;
    }

    /**
     * Sets a new linkToAddress
     *
     * Při nastavení atributu na hodnotu "true" bude vytvořena vazba adresy dokladu na Adresář programu POHODA.
     *  Vyhledání adresy v Adresáři programu POHODA bude dle elementů "ico", "dic", "icdph" (pro POHODA SK), "company" a "name".
     *  K vyhledání se použije první neprázdný element (podle pořadí uvedeného v předchozí větě).
     *  K vytvoření vazby adresy dokladu na Adresář dojde pouze tehdy, pokud bude nalezena pouze 1 adresa.
     *
     * @param bool $linkToAddress
     * @return self
     */
    public function setLinkToAddress($linkToAddress)
    {
        $this->linkToAddress = $linkToAddress;
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

    /**
     * Gets as division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets a new zip
     *
     * @param string $zip
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Gets as ico
     *
     * @return string
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Sets a new ico
     *
     * @param string $ico
     * @return self
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * Gets as dic
     *
     * @return string
     */
    public function getDic()
    {
        return $this->dic;
    }

    /**
     * Sets a new dic
     *
     * @param string $dic
     * @return self
     */
    public function setDic($dic)
    {
        $this->dic = $dic;
        return $this;
    }

    /**
     * Gets as vATPayerType
     *
     * Typ plátce DPH.
     *
     * @return string
     */
    public function getVATPayerType()
    {
        return $this->vATPayerType;
    }

    /**
     * Sets a new vATPayerType
     *
     * Typ plátce DPH.
     *
     * @param string $vATPayerType
     * @return self
     */
    public function setVATPayerType($vATPayerType)
    {
        $this->vATPayerType = $vATPayerType;
        return $this;
    }

    /**
     * Gets as icDph
     *
     * @return string
     */
    public function getIcDph()
    {
        return $this->icDph;
    }

    /**
     * Sets a new icDph
     *
     * @param string $icDph
     * @return self
     */
    public function setIcDph($icDph)
    {
        $this->icDph = $icDph;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \Pohoda\Type\RefType $country
     * @return self
     */
    public function setCountry(?\Pohoda\Type\RefType $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as phone
     *
     * Podporováno pouze u objednávek a nabídek.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Podporováno pouze u objednávek a nabídek.
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as mobilPhone
     *
     * @return string
     */
    public function getMobilPhone()
    {
        return $this->mobilPhone;
    }

    /**
     * Sets a new mobilPhone
     *
     * @param string $mobilPhone
     * @return self
     */
    public function setMobilPhone($mobilPhone)
    {
        $this->mobilPhone = $mobilPhone;
        return $this;
    }

    /**
     * Gets as fax
     *
     * Podporováno pouze u objednávek a nabídek.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * Podporováno pouze u objednávek a nabídek.
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as email
     *
     * Podporováno pouze u dokladů (Nabídka, Poptávky, Přijaté objednávky, Vydané Objednávky, Vydané Faktury, Vydané Zálohové Faktury, Ostatní Pohledávky, Výdejky).
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Podporováno pouze u dokladů (Nabídka, Poptávky, Přijaté objednávky, Vydané Objednávky, Vydané Faktury, Vydané Zálohové Faktury, Ostatní Pohledávky, Výdejky).
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
