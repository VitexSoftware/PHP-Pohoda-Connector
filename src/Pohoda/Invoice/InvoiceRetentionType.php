<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceRetentionType
 *
 *
 * XSD Type: invoiceRetentionType
 */
class InvoiceRetentionType
{
    /**
     * Datum pozastávky.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Datum splatnosti pozastávky.
     *
     * @var \DateTime $dateDue
     */
    private $dateDue = null;

    /**
     * Výše pozastávky v domácí měně.
     *
     * @var float $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Informace o likvidaci pozastávky.
     *
     * @var \Pohoda\Type\LiquidationType $liquidation
     */
    private $liquidation = null;

    /**
     * Text pozastávky.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Předkontace pozastávky.
     *
     * @var \Pohoda\Type\RefType $accounting
     */
    private $accounting = null;

    /**
     * Gets as date
     *
     * Datum pozastávky.
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
     * Datum pozastávky.
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
     * Gets as dateDue
     *
     * Datum splatnosti pozastávky.
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Sets a new dateDue
     *
     * Datum splatnosti pozastávky.
     *
     * @param \DateTime $dateDue
     * @return self
     */
    public function setDateDue(\DateTime $dateDue)
    {
        $this->dateDue = $dateDue;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Výše pozastávky v domácí měně.
     *
     * @return float
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Výše pozastávky v domácí měně.
     *
     * @param float $homeCurrency
     * @return self
     */
    public function setHomeCurrency($homeCurrency)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as liquidation
     *
     * Informace o likvidaci pozastávky.
     *
     * @return \Pohoda\Type\LiquidationType
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation
     *
     * Informace o likvidaci pozastávky.
     *
     * @param \Pohoda\Type\LiquidationType $liquidation
     * @return self
     */
    public function setLiquidation(?\Pohoda\Type\LiquidationType $liquidation = null)
    {
        $this->liquidation = $liquidation;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text pozastávky.
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
     * Text pozastávky.
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
     * Gets as accounting
     *
     * Předkontace pozastávky.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace pozastávky.
     *
     * @param \Pohoda\Type\RefType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }
}
