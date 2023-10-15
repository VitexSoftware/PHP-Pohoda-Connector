<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterAdbsType
 *
 *
 * XSD Type: filterAdbsType
 */
class FilterAdbsType
{
    /**
     * Vybere záznam dle zadaného ID.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Kontrola duplicity v poli Firma.
     *
     * @var string $company
     */
    private $company = null;

    /**
     * Kontrola duplicity v poli Jméno.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Kontrola duplicity v poli Obec.
     *
     * @var string $city
     */
    private $city = null;

    /**
     * Kontrola duplicity v poli Ulice.
     *
     * @var string $street
     */
    private $street = null;

    /**
     * Kontrola duplicity v poli PSČ.
     *
     * @var string $zip
     */
    private $zip = null;

    /**
     * Kontrola duplicity v poli IČ.
     *
     * @var string $ico
     */
    private $ico = null;

    /**
     * Kontrola duplicity v poli DIČ.
     *
     * @var string $dic
     */
    private $dic = null;

    /**
     * Kontrola duplicity v poli Číslo.
     *
     * @var \Pohoda\Type\NumberADType $number
     */
    private $number = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @var \DateTime $lastChanges
     */
    private $lastChanges = null;

    /**
     * Gets as id
     *
     * Vybere záznam dle zadaného ID.
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
     * Vybere záznam dle zadaného ID.
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
     * Gets as extId
     *
     * Vybere záznam dle zadaného externího identifikátoru.
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
     * Vybere záznam dle zadaného externího identifikátoru.
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
     * Gets as company
     *
     * Kontrola duplicity v poli Firma.
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
     * Kontrola duplicity v poli Firma.
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
     * Gets as name
     *
     * Kontrola duplicity v poli Jméno.
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
     * Kontrola duplicity v poli Jméno.
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
     * Kontrola duplicity v poli Obec.
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
     * Kontrola duplicity v poli Obec.
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
     * Kontrola duplicity v poli Ulice.
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
     * Kontrola duplicity v poli Ulice.
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
     * Kontrola duplicity v poli PSČ.
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
     * Kontrola duplicity v poli PSČ.
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
     * Kontrola duplicity v poli IČ.
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
     * Kontrola duplicity v poli IČ.
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
     * Kontrola duplicity v poli DIČ.
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
     * Kontrola duplicity v poli DIČ.
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
     * Gets as number
     *
     * Kontrola duplicity v poli Číslo.
     *
     * @return \Pohoda\Type\NumberADType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Kontrola duplicity v poli Číslo.
     *
     * @param \Pohoda\Type\NumberADType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberADType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @return \DateTime
     */
    public function getLastChanges()
    {
        return $this->lastChanges;
    }

    /**
     * Sets a new lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @param \DateTime $lastChanges
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;
        return $this;
    }
}

