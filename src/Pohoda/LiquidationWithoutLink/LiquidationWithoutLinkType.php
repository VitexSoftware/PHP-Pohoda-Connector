<?php

namespace Pohoda\LiquidationWithoutLink;

/**
 * Class representing LiquidationWithoutLinkType
 *
 *
 * XSD Type: liquidationWithoutLinkType
 */
class LiquidationWithoutLinkType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType $record
     */
    private $record = null;

    /**
     * Datum Likvidace. Pokud není hodnota zadaná, použije se aktuální datum
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Částka likvidace v tuzemské měně
     *
     * @var float $amountHome
     */
    private $amountHome = null;

    /**
     * Částka likvidace v cizí měně
     *
     * @var float $amountForeign
     */
    private $amountForeign = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * Gets as record
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record
     *
     * Výběr záznamu.
     *
     * @param \Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType $record
     * @return self
     */
    public function setRecord(\Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Gets as date
     *
     * Datum Likvidace. Pokud není hodnota zadaná, použije se aktuální datum
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
     * Datum Likvidace. Pokud není hodnota zadaná, použije se aktuální datum
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
     * Gets as amountHome
     *
     * Částka likvidace v tuzemské měně
     *
     * @return float
     */
    public function getAmountHome()
    {
        return $this->amountHome;
    }

    /**
     * Sets a new amountHome
     *
     * Částka likvidace v tuzemské měně
     *
     * @param float $amountHome
     * @return self
     */
    public function setAmountHome($amountHome)
    {
        $this->amountHome = $amountHome;
        return $this;
    }

    /**
     * Gets as amountForeign
     *
     * Částka likvidace v cizí měně
     *
     * @return float
     */
    public function getAmountForeign()
    {
        return $this->amountForeign;
    }

    /**
     * Sets a new amountForeign
     *
     * Částka likvidace v cizí měně
     *
     * @param float $amountForeign
     * @return self
     */
    public function setAmountForeign($amountForeign)
    {
        $this->amountForeign = $amountForeign;
        return $this;
    }
}

