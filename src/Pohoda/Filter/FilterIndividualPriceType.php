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

namespace Pohoda\Filter;

/**
 * Class representing FilterIndividualPriceType.
 *
 * XSD Type: filterIndividualPriceType
 */
class FilterIndividualPriceType
{
    /**
     * Vybere záznam dle zadaného ID.
     */
    private int $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Kontrola duplicity v poli Firma.
     */
    private string $company = null;

    /**
     * Kontrola duplicity v poli Jméno.
     */
    private string $name = null;

    /**
     * Kontrola duplicity v poli Obec.
     */
    private string $city = null;

    /**
     * Kontrola duplicity v poli Ulice.
     */
    private string $street = null;

    /**
     * Kontrola duplicity v poli PSČ.
     */
    private string $zip = null;

    /**
     * Kontrola duplicity v poli IČ.
     */
    private string $ico = null;

    /**
     * Kontrola duplicity v poli DIČ.
     */
    private string $dic = null;

    /**
     * Kontrola duplicity v poli Číslo.
     */
    private \Pohoda\Type\NumberADType $number = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     */
    private \DateTime $lastChanges = null;

    /**
     * Vyexportuje změněné záznamy od zadaného data z tabulky AdCn (Individuální slevy). Pouze pro export.
     */
    private \DateTime $lastChangesIndividualPrice = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * Vybere záznam dle zadaného ID.
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
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as company.
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
     * Sets a new company.
     *
     * Kontrola duplicity v poli Firma.
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
     * Gets as name.
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
     * Sets a new name.
     *
     * Kontrola duplicity v poli Jméno.
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
     * Kontrola duplicity v poli Obec.
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
     * Kontrola duplicity v poli Obec.
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
     * Kontrola duplicity v poli Ulice.
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
     * Kontrola duplicity v poli Ulice.
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
     * Kontrola duplicity v poli PSČ.
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
     * Kontrola duplicity v poli PSČ.
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
     * Gets as ico.
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
     * Sets a new ico.
     *
     * Kontrola duplicity v poli IČ.
     *
     * @param string $ico
     *
     * @return self
     */
    public function setIco($ico)
    {
        $this->ico = $ico;

        return $this;
    }

    /**
     * Gets as dic.
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
     * Sets a new dic.
     *
     * Kontrola duplicity v poli DIČ.
     *
     * @param string $dic
     *
     * @return self
     */
    public function setDic($dic)
    {
        $this->dic = $dic;

        return $this;
    }

    /**
     * Gets as number.
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
     * Sets a new number.
     *
     * Kontrola duplicity v poli Číslo.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberADType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as lastChanges.
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
     * Sets a new lastChanges.
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;

        return $this;
    }

    /**
     * Gets as lastChangesIndividualPrice.
     *
     * Vyexportuje změněné záznamy od zadaného data z tabulky AdCn (Individuální slevy). Pouze pro export.
     *
     * @return \DateTime
     */
    public function getLastChangesIndividualPrice()
    {
        return $this->lastChangesIndividualPrice;
    }

    /**
     * Sets a new lastChangesIndividualPrice.
     *
     * Vyexportuje změněné záznamy od zadaného data z tabulky AdCn (Individuální slevy). Pouze pro export.
     *
     * @return self
     */
    public function setLastChangesIndividualPrice(?\DateTime $lastChangesIndividualPrice = null)
    {
        $this->lastChangesIndividualPrice = $lastChangesIndividualPrice;

        return $this;
    }
}
