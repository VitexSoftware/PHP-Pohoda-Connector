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

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceRetentionType.
 *
 * XSD Type: invoiceRetentionType
 */
class InvoiceRetentionType
{
    /**
     * Datum pozastávky.
     */
    private ?\DateTime $date = null;

    /**
     * Datum splatnosti pozastávky.
     */
    private ?\DateTime $dateDue = null;

    /**
     * Výše pozastávky v domácí měně.
     */
    private ?float $homeCurrency = null;

    /**
     * Informace o likvidaci pozastávky.
     */
    private ?\Pohoda\Type\LiquidationType $liquidation = null;

    /**
     * Text pozastávky.
     */
    private ?string $text = null;

    /**
     * Předkontace pozastávky.
     */
    private ?\Pohoda\Type\RefType $accounting = null;

    /**
     * Gets as date.
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
     * Sets a new date.
     *
     * Datum pozastávky.
     *
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as dateDue.
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
     * Sets a new dateDue.
     *
     * Datum splatnosti pozastávky.
     *
     * @return self
     */
    public function setDateDue(\DateTime $dateDue)
    {
        $this->dateDue = $dateDue;

        return $this;
    }

    /**
     * Gets as homeCurrency.
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
     * Sets a new homeCurrency.
     *
     * Výše pozastávky v domácí měně.
     *
     * @param float $homeCurrency
     *
     * @return self
     */
    public function setHomeCurrency($homeCurrency)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }

    /**
     * Gets as liquidation.
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
     * Sets a new liquidation.
     *
     * Informace o likvidaci pozastávky.
     *
     * @return self
     */
    public function setLiquidation(?\Pohoda\Type\LiquidationType $liquidation = null)
    {
        $this->liquidation = $liquidation;

        return $this;
    }

    /**
     * Gets as text.
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
     * Sets a new text.
     *
     * Text pozastávky.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as accounting.
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
     * Sets a new accounting.
     *
     * Předkontace pozastávky.
     *
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;

        return $this;
    }
}
