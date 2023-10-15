<?php

namespace Pohoda\Type;

/**
 * Class representing AddressInternetType
 *
 * Adresa účetní jednotky.
 * XSD Type: addressInternetType
 */
class AddressInternetType
{
    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $surname
     */
    private $surname = null;

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
     * @var string $number
     */
    private $number = null;

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
     * @var string $icDph
     */
    private $icDph = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var string $mobilPhone
     */
    private $mobilPhone = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $www
     */
    private $www = null;

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
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
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
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
     * Gets as phone
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
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as www
     *
     * @return string
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * Sets a new www
     *
     * @param string $www
     * @return self
     */
    public function setWww($www)
    {
        $this->www = $www;
        return $this;
    }
}

