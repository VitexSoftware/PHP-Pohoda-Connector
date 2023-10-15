<?php

namespace Pohoda\Type;

/**
 * Class representing ParameterDocType
 *
 * Data volitelného parametru.
 * XSD Type: parameterDocType
 */
class ParameterDocType
{
    /**
     * Název db.pole.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Data typu Text.
     *
     * @var string $textValue
     */
    private $textValue = null;

    /**
     * Data typu Text (dlouhý).
     *
     * @var string $memoValue
     */
    private $memoValue = null;

    /**
     * Data typu Měna.
     *
     * @var float $currencyValue
     */
    private $currencyValue = null;

    /**
     * Data typu Ano/Ne.
     *
     * @var string $booleanValue
     */
    private $booleanValue = null;

    /**
     * Data typu Číslo.
     *
     * @var float $numberValue
     */
    private $numberValue = null;

    /**
     * Data typu Datum.
     *
     * @var \DateTime $datetimeValue
     */
    private $datetimeValue = null;

    /**
     * Data typu Seznam.
     *
     * @var \Pohoda\Type\RefType $listValueRef
     */
    private $listValueRef = null;

    /**
     * Data typu Číslo(celé).
     *
     * @var int $integerValue
     */
    private $integerValue = null;

    /**
     * Seznam na který je parametr napojen.
     *
     * @var \Pohoda\Type\RefType $list
     */
    private $list = null;

    /**
     * Gets as name
     *
     * Název db.pole.
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
     * Název db.pole.
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
     * Gets as textValue
     *
     * Data typu Text.
     *
     * @return string
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * Sets a new textValue
     *
     * Data typu Text.
     *
     * @param string $textValue
     * @return self
     */
    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;
        return $this;
    }

    /**
     * Gets as memoValue
     *
     * Data typu Text (dlouhý).
     *
     * @return string
     */
    public function getMemoValue()
    {
        return $this->memoValue;
    }

    /**
     * Sets a new memoValue
     *
     * Data typu Text (dlouhý).
     *
     * @param string $memoValue
     * @return self
     */
    public function setMemoValue($memoValue)
    {
        $this->memoValue = $memoValue;
        return $this;
    }

    /**
     * Gets as currencyValue
     *
     * Data typu Měna.
     *
     * @return float
     */
    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    /**
     * Sets a new currencyValue
     *
     * Data typu Měna.
     *
     * @param float $currencyValue
     * @return self
     */
    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;
        return $this;
    }

    /**
     * Gets as booleanValue
     *
     * Data typu Ano/Ne.
     *
     * @return string
     */
    public function getBooleanValue()
    {
        return $this->booleanValue;
    }

    /**
     * Sets a new booleanValue
     *
     * Data typu Ano/Ne.
     *
     * @param string $booleanValue
     * @return self
     */
    public function setBooleanValue($booleanValue)
    {
        $this->booleanValue = $booleanValue;
        return $this;
    }

    /**
     * Gets as numberValue
     *
     * Data typu Číslo.
     *
     * @return float
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * Sets a new numberValue
     *
     * Data typu Číslo.
     *
     * @param float $numberValue
     * @return self
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;
        return $this;
    }

    /**
     * Gets as datetimeValue
     *
     * Data typu Datum.
     *
     * @return \DateTime
     */
    public function getDatetimeValue()
    {
        return $this->datetimeValue;
    }

    /**
     * Sets a new datetimeValue
     *
     * Data typu Datum.
     *
     * @param \DateTime $datetimeValue
     * @return self
     */
    public function setDatetimeValue(?\DateTime $datetimeValue = null)
    {
        $this->datetimeValue = $datetimeValue;
        return $this;
    }

    /**
     * Gets as listValueRef
     *
     * Data typu Seznam.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getListValueRef()
    {
        return $this->listValueRef;
    }

    /**
     * Sets a new listValueRef
     *
     * Data typu Seznam.
     *
     * @param \Pohoda\Type\RefType $listValueRef
     * @return self
     */
    public function setListValueRef(?\Pohoda\Type\RefType $listValueRef = null)
    {
        $this->listValueRef = $listValueRef;
        return $this;
    }

    /**
     * Gets as integerValue
     *
     * Data typu Číslo(celé).
     *
     * @return int
     */
    public function getIntegerValue()
    {
        return $this->integerValue;
    }

    /**
     * Sets a new integerValue
     *
     * Data typu Číslo(celé).
     *
     * @param int $integerValue
     * @return self
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;
        return $this;
    }

    /**
     * Gets as list
     *
     * Seznam na který je parametr napojen.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * Seznam na který je parametr napojen.
     *
     * @param \Pohoda\Type\RefType $list
     * @return self
     */
    public function setList(?\Pohoda\Type\RefType $list = null)
    {
        $this->list = $list;
        return $this;
    }
}
