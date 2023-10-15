<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListInvoiceType
 *
 *
 * XSD Type: listInvoiceType
 */
class ListInvoiceType extends ListVersionType
{
    /**
     * @var \Pohoda\Invoice\InvoiceType[] $invoice
     */
    private $invoice = [

    ];

    /**
     * Adds as invoice
     *
     * @return self
     * @param \Pohoda\Invoice\InvoiceType $invoice
     */
    public function addToInvoice(\Pohoda\Invoice\InvoiceType $invoice)
    {
        $this->invoice[] = $invoice;
        return $this;
    }

    /**
     * isset invoice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoice($index)
    {
        return isset($this->invoice[$index]);
    }

    /**
     * unset invoice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoice($index)
    {
        unset($this->invoice[$index]);
    }

    /**
     * Gets as invoice
     *
     * @return \Pohoda\Invoice\InvoiceType[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \Pohoda\Invoice\InvoiceType[] $invoice
     * @return self
     */
    public function setInvoice(array $invoice = null)
    {
        $this->invoice = $invoice;
        return $this;
    }
}
