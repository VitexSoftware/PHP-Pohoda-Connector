<?php

namespace Pohoda\Documentresponse;

/**
 * Class representing ProducedDetailsType
 *
 *
 * XSD Type: producedDetailsType
 */
class ProducedDetailsType
{
    /**
     * ID vytvořeného dokladu.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * Vytvořené číslo dokladu.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Kód vytvořeného dokladu.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Typ provedené operace.
     *
     * @var string $actionType
     */
    private $actionType = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Výsledek importu položek.
     *
     * @var \Pohoda\Documentresponse\ItemDetailsType $itemDetails
     */
    private $itemDetails = null;

    /**
     * Gets as id
     *
     * ID vytvořeného dokladu.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID vytvořeného dokladu.
     *
     * @param string $id
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
     * Vytvořené číslo dokladu.
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
     * Vytvořené číslo dokladu.
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
     * Gets as code
     *
     * Kód vytvořeného dokladu.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Kód vytvořeného dokladu.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * Typ provedené operace.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ provedené operace.
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as extId
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
     * Sets a new extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
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
     * Gets as itemDetails
     *
     * Výsledek importu položek.
     *
     * @return \Pohoda\Documentresponse\ItemDetailsType
     */
    public function getItemDetails()
    {
        return $this->itemDetails;
    }

    /**
     * Sets a new itemDetails
     *
     * Výsledek importu položek.
     *
     * @param \Pohoda\Documentresponse\ItemDetailsType $itemDetails
     * @return self
     */
    public function setItemDetails(?\Pohoda\Documentresponse\ItemDetailsType $itemDetails = null)
    {
        $this->itemDetails = $itemDetails;
        return $this;
    }
}
