<?php

namespace Pohoda\Voucher;

/**
 * Class representing SettingsLiquidationType
 *
 *
 * XSD Type: settingsLiquidationType
 */
class SettingsLiquidationType
{
    /**
     * Agenda likvidovaného dokladu.
     *
     * @var string $sourceAgenda
     */
    private $sourceAgenda = null;

    /**
     * Likvidovaný doklad.
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Částka k likvidaci.
     *
     * @var float $liquidationPrice
     */
    private $liquidationPrice = null;

    /**
     * Likvidace.
     *
     * @var \Pohoda\Voucher\LiquidationType $liquidation
     */
    private $liquidation = null;

    /**
     * Gets as sourceAgenda
     *
     * Agenda likvidovaného dokladu.
     *
     * @return string
     */
    public function getSourceAgenda()
    {
        return $this->sourceAgenda;
    }

    /**
     * Sets a new sourceAgenda
     *
     * Agenda likvidovaného dokladu.
     *
     * @param string $sourceAgenda
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;
        return $this;
    }

    /**
     * Gets as sourceDocument
     *
     * Likvidovaný doklad.
     *
     * @return \Pohoda\Type\SourceDocumentType
     */
    public function getSourceDocument()
    {
        return $this->sourceDocument;
    }

    /**
     * Sets a new sourceDocument
     *
     * Likvidovaný doklad.
     *
     * @param \Pohoda\Type\SourceDocumentType $sourceDocument
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * Gets as liquidationPrice
     *
     * Částka k likvidaci.
     *
     * @return float
     */
    public function getLiquidationPrice()
    {
        return $this->liquidationPrice;
    }

    /**
     * Sets a new liquidationPrice
     *
     * Částka k likvidaci.
     *
     * @param float $liquidationPrice
     * @return self
     */
    public function setLiquidationPrice($liquidationPrice)
    {
        $this->liquidationPrice = $liquidationPrice;
        return $this;
    }

    /**
     * Gets as liquidation
     *
     * Likvidace.
     *
     * @return \Pohoda\Voucher\LiquidationType
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation
     *
     * Likvidace.
     *
     * @param \Pohoda\Voucher\LiquidationType $liquidation
     * @return self
     */
    public function setLiquidation(?\Pohoda\Voucher\LiquidationType $liquidation = null)
    {
        $this->liquidation = $liquidation;
        return $this;
    }
}

