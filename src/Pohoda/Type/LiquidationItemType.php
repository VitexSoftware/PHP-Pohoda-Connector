<?php

namespace Pohoda\Type;

/**
 * Class representing LiquidationItemType
 *
 * Informace o likvidaci faktury.
 * XSD Type: liquidationItemType
 */
class LiquidationItemType
{
    /**
     * ID likvidace
     *
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $extId
     */
    private $extId = null;

    /**
     * Datum likvidace.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Agenda likvidujícího dokladu. Pokud je likvidace bez vazby, element se neuvádí.
     *
     * @var string $sourceAgenda
     */
    private $sourceAgenda = null;

    /**
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Daňový doklad.
     *
     * @var \Pohoda\Type\SourceDocumentType $taxReceiptDocument
     */
    private $taxReceiptDocument = null;

    /**
     * Částka.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * Částka v cizí měně.
     *
     * @var float $foreignCurrencyAmount
     */
    private $foreignCurrencyAmount = null;

    /**
     * Částka zdrojového dokladu v cizí měně.
     *
     * @var float $foreignCurrencySource
     */
    private $foreignCurrencySource = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * ID likvidace
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
     * Gets as extId
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param string $extId
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as date
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
     * Sets a new date
     *
     * Datum likvidace.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sourceAgenda
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
     * Sets a new sourceAgenda
     *
     * Agenda likvidujícího dokladu. Pokud je likvidace bez vazby, element se neuvádí.
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
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
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
     * Likvidující doklad. Pokud je likvidace bez vazby, element se neuvádí.
     *
     * @param \Pohoda\Type\SourceDocumentType $sourceDocument
     * @return self
     */
    public function setSourceDocument(?\Pohoda\Type\SourceDocumentType $sourceDocument = null)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * Gets as taxReceiptDocument
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
     * Sets a new taxReceiptDocument
     *
     * Daňový doklad.
     *
     * @param \Pohoda\Type\SourceDocumentType $taxReceiptDocument
     * @return self
     */
    public function setTaxReceiptDocument(?\Pohoda\Type\SourceDocumentType $taxReceiptDocument = null)
    {
        $this->taxReceiptDocument = $taxReceiptDocument;
        return $this;
    }

    /**
     * Gets as amount
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
     * Sets a new amount
     *
     * Částka.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as foreignCurrencyAmount
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
     * Sets a new foreignCurrencyAmount
     *
     * Částka v cizí měně.
     *
     * @param float $foreignCurrencyAmount
     * @return self
     */
    public function setForeignCurrencyAmount($foreignCurrencyAmount)
    {
        $this->foreignCurrencyAmount = $foreignCurrencyAmount;
        return $this;
    }

    /**
     * Gets as foreignCurrencySource
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
     * Sets a new foreignCurrencySource
     *
     * Částka zdrojového dokladu v cizí měně.
     *
     * @param float $foreignCurrencySource
     * @return self
     */
    public function setForeignCurrencySource($foreignCurrencySource)
    {
        $this->foreignCurrencySource = $foreignCurrencySource;
        return $this;
    }
}
