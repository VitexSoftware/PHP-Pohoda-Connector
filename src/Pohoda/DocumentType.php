<?php

namespace Pohoda;

/**
 * Class representing DocumentType
 *
 *
 * XSD Type: documentType
 */
class DocumentType
{
    /**
     * Výsledek likvidace.
     *
     * @var string $state
     */
    private $state = null;

    /**
     * Popis likvidace. Případně další infomrace k likvidaci (Vytvožení daňového dokladu, vznik přeplatku, atp.).
     *
     * @var string $detail
     */
    private $detail = null;

    /**
     * ID likvidovaného dokladu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Číslo likvidovaného dokladu.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Agenda likvidovaného dokladu.
     *
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * Likvidovaná částka.
     *
     * @var \Pohoda\HomeCurrencyType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Likvidovaná částka.
     *
     * @var \Pohoda\ForeignCurrencyType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Textový popis pravidla, které bylo použito k dohledání likvidovaného dokladu.
     *
     * @var string $rule
     */
    private $rule = null;

    /**
     * Daňový doklad. Element je uveden, jan pokud byl vytvořen daňový doklad.
     *
     * @var \Pohoda\TaxDocumentType $taxDocumentNumber
     */
    private $taxDocumentNumber = null;

    /**
     * Gets as state
     *
     * Výsledek likvidace.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * Výsledek likvidace.
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Popis likvidace. Případně další infomrace k likvidaci (Vytvožení daňového dokladu, vznik přeplatku, atp.).
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Popis likvidace. Případně další infomrace k likvidaci (Vytvožení daňového dokladu, vznik přeplatku, atp.).
     *
     * @param string $detail
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as id
     *
     * ID likvidovaného dokladu.
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
     * ID likvidovaného dokladu.
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
     * Gets as number
     *
     * Číslo likvidovaného dokladu.
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
     * Číslo likvidovaného dokladu.
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
     * Gets as agenda
     *
     * Agenda likvidovaného dokladu.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * Agenda likvidovaného dokladu.
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Likvidovaná částka.
     *
     * @return \Pohoda\HomeCurrencyType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Likvidovaná částka.
     *
     * @param \Pohoda\HomeCurrencyType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(\Pohoda\HomeCurrencyType $homeCurrency)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Likvidovaná částka.
     *
     * @return \Pohoda\ForeignCurrencyType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Likvidovaná částka.
     *
     * @param \Pohoda\ForeignCurrencyType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\ForeignCurrencyType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }

    /**
     * Gets as rule
     *
     * Textový popis pravidla, které bylo použito k dohledání likvidovaného dokladu.
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * Textový popis pravidla, které bylo použito k dohledání likvidovaného dokladu.
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as taxDocumentNumber
     *
     * Daňový doklad. Element je uveden, jan pokud byl vytvořen daňový doklad.
     *
     * @return \Pohoda\TaxDocumentType
     */
    public function getTaxDocumentNumber()
    {
        return $this->taxDocumentNumber;
    }

    /**
     * Sets a new taxDocumentNumber
     *
     * Daňový doklad. Element je uveden, jan pokud byl vytvořen daňový doklad.
     *
     * @param \Pohoda\TaxDocumentType $taxDocumentNumber
     * @return self
     */
    public function setTaxDocumentNumber(?\Pohoda\TaxDocumentType $taxDocumentNumber = null)
    {
        $this->taxDocumentNumber = $taxDocumentNumber;
        return $this;
    }
}

