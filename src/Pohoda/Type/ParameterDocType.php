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
 * Class representing ParameterDocType.
 *
 * Data volitelného parametru.
 * XSD Type: parameterDocType
 */
class ParameterDocType
{
    /**
     * Název db.pole.
     */
    private string $name = null;

    /**
     * Data typu Text.
     */
    private string $textValue = null;

    /**
     * Data typu Text (dlouhý).
     */
    private string $memoValue = null;

    /**
     * Data typu Měna.
     */
    private float $currencyValue = null;

    /**
     * Data typu Ano/Ne.
     */
    private string $booleanValue = null;

    /**
     * Data typu Číslo.
     */
    private float $numberValue = null;

    /**
     * Data typu Datum.
     */
    private \DateTime $datetimeValue = null;

    /**
     * Data typu Seznam.
     */
    private \Pohoda\Type\RefType $listValueRef = null;

    /**
     * Data typu Číslo(celé).
     */
    private int $integerValue = null;

    /**
     * Seznam na který je parametr napojen.
     */
    private \Pohoda\Type\RefType $list = null;

    /**
     * Gets as name.
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
     * Sets a new name.
     *
     * Název db.pole.
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
     * Gets as textValue.
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
     * Sets a new textValue.
     *
     * Data typu Text.
     *
     * @param string $textValue
     *
     * @return self
     */
    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;

        return $this;
    }

    /**
     * Gets as memoValue.
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
     * Sets a new memoValue.
     *
     * Data typu Text (dlouhý).
     *
     * @param string $memoValue
     *
     * @return self
     */
    public function setMemoValue($memoValue)
    {
        $this->memoValue = $memoValue;

        return $this;
    }

    /**
     * Gets as currencyValue.
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
     * Sets a new currencyValue.
     *
     * Data typu Měna.
     *
     * @param float $currencyValue
     *
     * @return self
     */
    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    /**
     * Gets as booleanValue.
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
     * Sets a new booleanValue.
     *
     * Data typu Ano/Ne.
     *
     * @param string $booleanValue
     *
     * @return self
     */
    public function setBooleanValue($booleanValue)
    {
        $this->booleanValue = $booleanValue;

        return $this;
    }

    /**
     * Gets as numberValue.
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
     * Sets a new numberValue.
     *
     * Data typu Číslo.
     *
     * @param float $numberValue
     *
     * @return self
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;

        return $this;
    }

    /**
     * Gets as datetimeValue.
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
     * Sets a new datetimeValue.
     *
     * Data typu Datum.
     *
     * @return self
     */
    public function setDatetimeValue(?\DateTime $datetimeValue = null)
    {
        $this->datetimeValue = $datetimeValue;

        return $this;
    }

    /**
     * Gets as listValueRef.
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
     * Sets a new listValueRef.
     *
     * Data typu Seznam.
     *
     * @return self
     */
    public function setListValueRef(?\Pohoda\Type\RefType $listValueRef = null)
    {
        $this->listValueRef = $listValueRef;

        return $this;
    }

    /**
     * Gets as integerValue.
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
     * Sets a new integerValue.
     *
     * Data typu Číslo(celé).
     *
     * @param int $integerValue
     *
     * @return self
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;

        return $this;
    }

    /**
     * Gets as list.
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
     * Sets a new list.
     *
     * Seznam na který je parametr napojen.
     *
     * @return self
     */
    public function setList(?\Pohoda\Type\RefType $list = null)
    {
        $this->list = $list;

        return $this;
    }
}
