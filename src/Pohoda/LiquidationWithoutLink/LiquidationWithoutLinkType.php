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

namespace Pohoda\LiquidationWithoutLink;

/**
 * Class representing LiquidationWithoutLinkType.
 *
 * XSD Type: liquidationWithoutLinkType
 */
class LiquidationWithoutLinkType
{
    private string $version = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Výběr záznamu.
     */
    private \Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType $record = null;

    /**
     * Datum Likvidace. Pokud není hodnota zadaná, použije se aktuální datum.
     */
    private \DateTime $date = null;

    /**
     * Částka likvidace v tuzemské měně.
     */
    private float $amountHome = null;

    /**
     * Částka likvidace v cizí měně.
     */
    private float $amountForeign = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

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
     * Gets as record.
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
     * Sets a new record.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecord(\Pohoda\LiquidationWithoutLink\RecordliquidationWithoutLinkType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Gets as date.
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
     * Sets a new date.
     *
     * Datum Likvidace. Pokud není hodnota zadaná, použije se aktuální datum
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as amountHome.
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
     * Sets a new amountHome.
     *
     * Částka likvidace v tuzemské měně
     *
     * @param float $amountHome
     *
     * @return self
     */
    public function setAmountHome($amountHome)
    {
        $this->amountHome = $amountHome;

        return $this;
    }

    /**
     * Gets as amountForeign.
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
     * Sets a new amountForeign.
     *
     * Částka likvidace v cizí měně
     *
     * @param float $amountForeign
     *
     * @return self
     */
    public function setAmountForeign($amountForeign)
    {
        $this->amountForeign = $amountForeign;

        return $this;
    }
}
