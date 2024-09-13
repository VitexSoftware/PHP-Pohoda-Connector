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

namespace Pohoda\NumericalSeries;

/**
 * Class representing NumericalSeriesHeaderType.
 *
 * XSD Type: numericalSeriesHeaderType
 */
class NumericalSeriesHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     */
    private int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Prefix číselné řady.
     */
    private string $prefix = null;

    /**
     * Číslo.
     */
    private string $number = null;

    /**
     * Nejvyšší číslo v dané číselné řadě (pouze pro export).
     */
    private string $topNumber = null;

    /**
     * Název (popis).
     */
    private string $name = null;

    /**
     * Agenda.
     */
    private string $agenda = null;

    /**
     * Typ dokladu. Tento element je vyžadován při vytvoření číselné řady pro agendu, které má více typů dokladů.
     */
    private string $typeOfDocument = null;

    /**
     * Pokladna. Tento element je vyžadován při vytvoření číselné řady pro agendu "Pokladna".
     */
    private \Pohoda\Type\RefType $cashAccount = null;

    /**
     * Kasa. Tento element je vyžadován při vytvoření číselné řady pro agendu "Prodejky".
     */
    private \Pohoda\Type\RefType $cashbox = null;

    /**
     * Období plastnosti číselné řady.
     */
    private string $period = null;

    /**
     * Období plastnosti účetní jednotky.
     */
    private \Pohoda\NumericalSeries\PeriodAccountUnitType $periodAccountUnit = null;

    /**
     * Jednotka PZD. Nastavení vlastníka číselné řady v režimu „Pobočkové zpracování dat“.
     */
    private \Pohoda\Type\RefType $unitPZD = null;

    /**
     * Rok běžného nebo přechodné období. V případě, že ještě nedošlo k přepnutí přechodného období, řada do následujícího období se nenaimportuje.
     */
    private int $year = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private string $markRecord = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private array $parameters = null;

    /**
     * Gets as id.
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
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
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as prefix.
     *
     * Prefix číselné řady.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix.
     *
     * Prefix číselné řady.
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Číslo.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Číslo.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as topNumber.
     *
     * Nejvyšší číslo v dané číselné řadě (pouze pro export).
     *
     * @return string
     */
    public function getTopNumber()
    {
        return $this->topNumber;
    }

    /**
     * Sets a new topNumber.
     *
     * Nejvyšší číslo v dané číselné řadě (pouze pro export).
     *
     * @param string $topNumber
     *
     * @return self
     */
    public function setTopNumber($topNumber)
    {
        $this->topNumber = $topNumber;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název (popis).
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
     * Název (popis).
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
     * Gets as agenda.
     *
     * Agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * Agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as typeOfDocument.
     *
     * Typ dokladu. Tento element je vyžadován při vytvoření číselné řady pro agendu, které má více typů dokladů.
     *
     * @return string
     */
    public function getTypeOfDocument()
    {
        return $this->typeOfDocument;
    }

    /**
     * Sets a new typeOfDocument.
     *
     * Typ dokladu. Tento element je vyžadován při vytvoření číselné řady pro agendu, které má více typů dokladů.
     *
     * @param string $typeOfDocument
     *
     * @return self
     */
    public function setTypeOfDocument($typeOfDocument)
    {
        $this->typeOfDocument = $typeOfDocument;

        return $this;
    }

    /**
     * Gets as cashAccount.
     *
     * Pokladna. Tento element je vyžadován při vytvoření číselné řady pro agendu "Pokladna".
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCashAccount()
    {
        return $this->cashAccount;
    }

    /**
     * Sets a new cashAccount.
     *
     * Pokladna. Tento element je vyžadován při vytvoření číselné řady pro agendu "Pokladna".
     *
     * @return self
     */
    public function setCashAccount(?\Pohoda\Type\RefType $cashAccount = null)
    {
        $this->cashAccount = $cashAccount;

        return $this;
    }

    /**
     * Gets as cashbox.
     *
     * Kasa. Tento element je vyžadován při vytvoření číselné řady pro agendu "Prodejky".
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCashbox()
    {
        return $this->cashbox;
    }

    /**
     * Sets a new cashbox.
     *
     * Kasa. Tento element je vyžadován při vytvoření číselné řady pro agendu "Prodejky".
     *
     * @return self
     */
    public function setCashbox(?\Pohoda\Type\RefType $cashbox = null)
    {
        $this->cashbox = $cashbox;

        return $this;
    }

    /**
     * Gets as period.
     *
     * Období plastnosti číselné řady.
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period.
     *
     * Období plastnosti číselné řady.
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Gets as periodAccountUnit.
     *
     * Období plastnosti účetní jednotky.
     *
     * @return \Pohoda\NumericalSeries\PeriodAccountUnitType
     */
    public function getPeriodAccountUnit()
    {
        return $this->periodAccountUnit;
    }

    /**
     * Sets a new periodAccountUnit.
     *
     * Období plastnosti účetní jednotky.
     *
     * @return self
     */
    public function setPeriodAccountUnit(?\Pohoda\NumericalSeries\PeriodAccountUnitType $periodAccountUnit = null)
    {
        $this->periodAccountUnit = $periodAccountUnit;

        return $this;
    }

    /**
     * Gets as unitPZD.
     *
     * Jednotka PZD. Nastavení vlastníka číselné řady v režimu „Pobočkové zpracování dat“.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getUnitPZD()
    {
        return $this->unitPZD;
    }

    /**
     * Sets a new unitPZD.
     *
     * Jednotka PZD. Nastavení vlastníka číselné řady v režimu „Pobočkové zpracování dat“.
     *
     * @return self
     */
    public function setUnitPZD(?\Pohoda\Type\RefType $unitPZD = null)
    {
        $this->unitPZD = $unitPZD;

        return $this;
    }

    /**
     * Gets as year.
     *
     * Rok běžného nebo přechodné období. V případě, že ještě nedošlo k přepnutí přechodného období, řada do následujícího období se nenaimportuje.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year.
     *
     * Rok běžného nebo přechodné období. V případě, že ještě nedošlo k přepnutí přechodného období, řada do následujícího období se nenaimportuje.
     *
     * @param int $year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Gets as note.
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
     * Sets a new note.
     *
     * Poznámka.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelný parametr.
     *
     * @return self
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * isset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     */
    public function unsetParameters($index): void
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
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
     * Sets a new parameters.
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
