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
 * Class representing LiquidationItemType.
 *
 * Informace o likvidaci faktury.
 * XSD Type: liquidationItemType
 */
class LiquidationItemType
{
    /**
     * ID likvidace.
     */
    private int $id = null;
    private string $extId = null;

    /**
     * Datum likvidace.
     */
    private \DateTime $date = null;

    /**
     * Agenda likvidujícího dokladu. Pokud je likvidace bez vazby, element se neuvádí.
     */
    private string $sourceAgenda = null;

    /**
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
     */
    private \Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Daňový doklad.
     */
    private \Pohoda\Type\SourceDocumentType $taxReceiptDocument = null;

    /**
     * Částka.
     */
    private float $amount = null;

    /**
     * Částka v cizí měně.
     */
    private float $foreignCurrencyAmount = null;

    /**
     * Částka zdrojového dokladu v cizí měně.
     */
    private float $foreignCurrencySource = null;

    /**
     * Gets as id.
     *
     * ID likvidace
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
     * ID likvidace
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
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as date.
     *
     * Datum likvidace.
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
     * Datum likvidace.
     *
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as sourceAgenda.
     *
     * Agenda likvidujícího dokladu. Pokud je likvidace bez vazby, element se neuvádí.
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
     * Agenda likvidujícího dokladu. Pokud je likvidace bez vazby, element se neuvádí.
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
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
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
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
     *
     * @return self
     */
    public function setSourceDocument(?\Pohoda\Type\SourceDocumentType $sourceDocument = null)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }

    /**
     * Gets as taxReceiptDocument.
     *
     * Daňový doklad.
     *
     * @return \Pohoda\Type\SourceDocumentType
     */
    public function getTaxReceiptDocument()
    {
        return $this->taxReceiptDocument;
    }

    /**
     * Sets a new taxReceiptDocument.
     *
     * Daňový doklad.
     *
     * @return self
     */
    public function setTaxReceiptDocument(?\Pohoda\Type\SourceDocumentType $taxReceiptDocument = null)
    {
        $this->taxReceiptDocument = $taxReceiptDocument;

        return $this;
    }

    /**
     * Gets as amount.
     *
     * Částka.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount.
     *
     * Částka.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as foreignCurrencyAmount.
     *
     * Částka v cizí měně.
     *
     * @return float
     */
    public function getForeignCurrencyAmount()
    {
        return $this->foreignCurrencyAmount;
    }

    /**
     * Sets a new foreignCurrencyAmount.
     *
     * Částka v cizí měně.
     *
     * @param float $foreignCurrencyAmount
     *
     * @return self
     */
    public function setForeignCurrencyAmount($foreignCurrencyAmount)
    {
        $this->foreignCurrencyAmount = $foreignCurrencyAmount;

        return $this;
    }

    /**
     * Gets as foreignCurrencySource.
     *
     * Částka zdrojového dokladu v cizí měně.
     *
     * @return float
     */
    public function getForeignCurrencySource()
    {
        return $this->foreignCurrencySource;
    }

    /**
     * Sets a new foreignCurrencySource.
     *
     * Částka zdrojového dokladu v cizí měně.
     *
     * @param float $foreignCurrencySource
     *
     * @return self
     */
    public function setForeignCurrencySource($foreignCurrencySource)
    {
        $this->foreignCurrencySource = $foreignCurrencySource;

        return $this;
    }
}
