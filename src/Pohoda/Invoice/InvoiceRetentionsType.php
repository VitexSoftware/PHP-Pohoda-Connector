<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceRetentionsType
 *
 *
 * XSD Type: invoiceRetentionsType
 */
class InvoiceRetentionsType
{
    /**
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @var \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetention
     */
    private $invoiceRetention = [

    ];

    /**
     * Adds as invoiceRetention
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return self
     * @param \Pohoda\Invoice\InvoiceRetentionType $invoiceRetention
     */
    public function addToInvoiceRetention(\Pohoda\Invoice\InvoiceRetentionType $invoiceRetention)
    {
        $this->invoiceRetention[] = $invoiceRetention;
        return $this;
    }

    /**
     * isset invoiceRetention
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceRetention($index)
    {
        return isset($this->invoiceRetention[$index]);
    }

    /**
     * unset invoiceRetention
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceRetention($index)
    {
        unset($this->invoiceRetention[$index]);
    }

    /**
     * Gets as invoiceRetention
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return \Pohoda\Invoice\InvoiceRetentionType[]
     */
    public function getInvoiceRetention()
    {
        return $this->invoiceRetention;
    }

    /**
     * Sets a new invoiceRetention
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetention
     * @return self
     */
    public function setInvoiceRetention(array $invoiceRetention)
    {
        $this->invoiceRetention = $invoiceRetention;
        return $this;
    }
}
