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

namespace Pohoda\Voucher;

/**
 * Class representing SettingsLiquidationType.
 *
 * XSD Type: settingsLiquidationType
 */
class SettingsLiquidationType
{
    /**
     * Agenda likvidovaného dokladu.
     */
    private ?string $sourceAgenda = null;

    /**
     * Likvidovaný doklad.
     */
    private ?\Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Částka k likvidaci.
     */
    private ?float $liquidationPrice = null;

    /**
     * Likvidace.
     */
    private ?\Pohoda\Voucher\LiquidationType $liquidation = null;

    /**
     * Gets as sourceAgenda.
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
     * Sets a new sourceAgenda.
     *
     * Agenda likvidovaného dokladu.
     *
     * @param string $sourceAgenda
     *
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;

        return $this;
    }

    /**
     * Gets as sourceDocument.
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
     * Sets a new sourceDocument.
     *
     * Likvidovaný doklad.
     *
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }

    /**
     * Gets as liquidationPrice.
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
     * Sets a new liquidationPrice.
     *
     * Částka k likvidaci.
     *
     * @param float $liquidationPrice
     *
     * @return self
     */
    public function setLiquidationPrice($liquidationPrice)
    {
        $this->liquidationPrice = $liquidationPrice;

        return $this;
    }

    /**
     * Gets as liquidation.
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
     * Sets a new liquidation.
     *
     * Likvidace.
     *
     * @return self
     */
    public function setLiquidation(?\Pohoda\Voucher\LiquidationType $liquidation = null)
    {
        $this->liquidation = $liquidation;

        return $this;
    }
}
