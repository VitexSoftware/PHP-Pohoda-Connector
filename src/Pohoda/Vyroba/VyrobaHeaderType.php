<?php

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaHeaderType
 *
 *
 * XSD Type: vyrobaHeaderType
 */
class VyrobaHeaderType
{
    /**
     * ID záznamu. Používá se při requestu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Evidenční číslo dokladu.
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Datum vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální datum.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Čas vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální čas.
     *
     * @var \DateTime $time
     */
    private $time = null;

    /**
     * Datum výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se datum vyskladnění.
     *
     * @var \DateTime $dateOfReceipt
     */
    private $dateOfReceipt = null;

    /**
     * Čas výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se čas vyskladnění.
     *
     * @var \DateTime $timeOfReceipt
     */
    private $timeOfReceipt = null;

    /**
     * Párovací symbol pro párování dokladu v saldu.
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Účet pro naskladnění výrobku na jiný výnosový účet
     *
     * @var string $acc
     */
    private $acc = null;

    /**
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Zákazníkova adresa
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Zdrojové středisko.
     *
     * @var \Pohoda\Type\RefType $centreSource
     */
    private $centreSource = null;

    /**
     * Cílové středisko.
     *
     * @var \Pohoda\Type\RefType $centreDestination
     */
    private $centreDestination = null;

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
     * Interní poznámka.
     *
     * @var string $intNote
     */
    private $intNote = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @var string $lock1
     */
    private $lock1 = null;

    /**
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @var string $lock2
     */
    private $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[] $labels
     */
    private $labels = null;

    /**
     * Podmíněná kontrola dokladu.
     *
     * @var \Pohoda\Type\TypeValidateType $validate
     */
    private $validate = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as id
     *
     * ID záznamu. Používá se při requestu.
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
     * ID záznamu. Používá se při requestu.
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
     * Evidenční číslo dokladu.
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
     * Evidenční číslo dokladu.
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
     * Gets as date
     *
     * Datum vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální datum.
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
     * Datum vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální datum.
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
     * Gets as time
     *
     * Čas vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální čas.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Čas vyskladnění (výdeje položek výrobku). Pokud hodnota není uvedena, použije se aktuální čas.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(?\DateTime $time = null)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as dateOfReceipt
     *
     * Datum výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se datum vyskladnění.
     *
     * @return \DateTime
     */
    public function getDateOfReceipt()
    {
        return $this->dateOfReceipt;
    }

    /**
     * Sets a new dateOfReceipt
     *
     * Datum výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se datum vyskladnění.
     *
     * @param \DateTime $dateOfReceipt
     * @return self
     */
    public function setDateOfReceipt(?\DateTime $dateOfReceipt = null)
    {
        $this->dateOfReceipt = $dateOfReceipt;
        return $this;
    }

    /**
     * Gets as timeOfReceipt
     *
     * Čas výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se čas vyskladnění.
     *
     * @return \DateTime
     */
    public function getTimeOfReceipt()
    {
        return $this->timeOfReceipt;
    }

    /**
     * Sets a new timeOfReceipt
     *
     * Čas výroby (příjmu výrobku). Pokud hodnota není uvedena, použije se čas vyskladnění.
     *
     * @param \DateTime $timeOfReceipt
     * @return self
     */
    public function setTimeOfReceipt(?\DateTime $timeOfReceipt = null)
    {
        $this->timeOfReceipt = $timeOfReceipt;
        return $this;
    }

    /**
     * Gets as symPar
     *
     * Párovací symbol pro párování dokladu v saldu.
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
     * Párovací symbol pro párování dokladu v saldu.
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
     * Gets as acc
     *
     * Účet pro naskladnění výrobku na jiný výnosový účet
     *
     * @return string
     */
    public function getAcc()
    {
        return $this->acc;
    }

    /**
     * Sets a new acc
     *
     * Účet pro naskladnění výrobku na jiný výnosový účet
     *
     * @param string $acc
     * @return self
     */
    public function setAcc($acc)
    {
        $this->acc = $acc;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as partnerIdentity
     *
     * Zákazníkova adresa
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity
     *
     * Zákazníkova adresa
     *
     * @param \Pohoda\Type\AddressType $partnerIdentity
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;
        return $this;
    }

    /**
     * Gets as centreSource
     *
     * Zdrojové středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentreSource()
    {
        return $this->centreSource;
    }

    /**
     * Sets a new centreSource
     *
     * Zdrojové středisko.
     *
     * @param \Pohoda\Type\RefType $centreSource
     * @return self
     */
    public function setCentreSource(?\Pohoda\Type\RefType $centreSource = null)
    {
        $this->centreSource = $centreSource;
        return $this;
    }

    /**
     * Gets as centreDestination
     *
     * Cílové středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentreDestination()
    {
        return $this->centreDestination;
    }

    /**
     * Sets a new centreDestination
     *
     * Cílové středisko.
     *
     * @param \Pohoda\Type\RefType $centreDestination
     * @return self
     */
    public function setCentreDestination(?\Pohoda\Type\RefType $centreDestination = null)
    {
        $this->centreDestination = $centreDestination;
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
     * Gets as intNote
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote
     *
     * Interní poznámka.
     *
     * @param string $intNote
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;
        return $this;
    }

    /**
     * Gets as lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @return string
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;
        return $this;
    }

    /**
     * Gets as lock2
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;
        return $this;
    }

    /**
     * Gets as markRecord
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
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }

    /**
     * Adds as label
     *
     * Štítky záznamu.
     *
     * @return self
     * @param \Pohoda\Type\LabelType $label
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * isset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabels($index)
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     * @return self
     */
    public function setLabels(array $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Gets as validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @return \Pohoda\Type\TypeValidateType
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Sets a new validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @param \Pohoda\Type\TypeValidateType $validate
     * @return self
     */
    public function setValidate(?\Pohoda\Type\TypeValidateType $validate = null)
    {
        $this->validate = $validate;
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
