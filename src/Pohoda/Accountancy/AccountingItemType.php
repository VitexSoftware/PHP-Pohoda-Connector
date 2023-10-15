<?php

namespace Pohoda\Accountancy;

/**
 * Class representing AccountingItemType
 *
 *
 * XSD Type: accountingItemType
 */
class AccountingItemType
{
    /**
     * Používá se pouze při exportu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Zdroj dokladu.
     *
     * @var string $source
     */
    private $source = null;

    /**
     * Evidenční číslo záznamu .
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Text zdrojového dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Kč.
     *
     * @var \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Cizí měna.
     *
     * @var \Pohoda\Type\TypeCurrencyForeignType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Zaúčtování.
     *
     * @var \Pohoda\Accountancy\AccountingType $accounting
     */
    private $accounting = null;

    /**
     * Zákazníkova adresa.
     *
     * @var \Pohoda\Type\AddressType $address
     */
    private $address = null;

    /**
     * Datum vystavení.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Datum zdanitelného plnění / Datum odpočtu.
     *
     * @var \DateTime $dateTax
     */
    private $dateTax = null;

    /**
     * Středisko.
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Činnost.
     *
     * @var \Pohoda\Type\RefType $activity
     */
    private $activity = null;

    /**
     * Zakázka.
     *
     * @var \Pohoda\Type\RefType $contract
     */
    private $contract = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as id
     *
     * Používá se pouze při exportu.
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
     * Používá se pouze při exportu.
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
     * Gets as source
     *
     * Zdroj dokladu.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Zdroj dokladu.
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as number
     *
     * Evidenční číslo záznamu .
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo záznamu .
     *
     * @param \Pohoda\Type\NumberType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as symPar
     *
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar
     *
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
     *
     * @param string $symPar
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text zdrojového dokladu.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text zdrojového dokladu.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Kč.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Kč.
     *
     * @param \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\TypeCurrencyForeignType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Cizí měna.
     *
     * @param \Pohoda\Type\TypeCurrencyForeignType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Type\TypeCurrencyForeignType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Zaúčtování.
     *
     * @return \Pohoda\Accountancy\AccountingType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Zaúčtování.
     *
     * @param \Pohoda\Accountancy\AccountingType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Accountancy\AccountingType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as address
     *
     * Zákazníkova adresa.
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
     * Zákazníkova adresa.
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
     * Gets as date
     *
     * Datum vystavení.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Datum vystavení.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as dateTax
     *
     * Datum zdanitelného plnění / Datum odpočtu.
     *
     * @return \DateTime
     */
    public function getDateTax()
    {
        return $this->dateTax;
    }

    /**
     * Sets a new dateTax
     *
     * Datum zdanitelného plnění / Datum odpočtu.
     *
     * @param \DateTime $dateTax
     * @return self
     */
    public function setDateTax(?\DateTime $dateTax = null)
    {
        $this->dateTax = $dateTax;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * Středisko.
     *
     * @param \Pohoda\Type\RefType $centre
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Gets as activity
     *
     * Činnost.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Činnost.
     *
     * @param \Pohoda\Type\RefType $activity
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * Zakázka.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * Zakázka.
     *
     * @param \Pohoda\Type\RefType $contract
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Volitelný parametr.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
