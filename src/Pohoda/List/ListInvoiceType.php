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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListInvoiceType.
 *
 * XSD Type: listInvoiceType
 */
class ListInvoiceType extends ListVersionType
{
    /**
     * @var \Pohoda\Invoice\InvoiceType[]
     */
    private array $invoice = [
    ];

    /**
     * Adds as invoice.
     *
     * @return self
     */
    public function addToInvoice(\Pohoda\Invoice\InvoiceType $invoice)
    {
        $this->invoice[] = $invoice;

        return $this;
    }

    /**
     * isset invoice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInvoice($index)
    {
        return isset($this->invoice[$index]);
    }

    /**
     * unset invoice.
     *
     * @param int|string $index
     */
    public function unsetInvoice($index): void
    {
        unset($this->invoice[$index]);
    }

    /**
     * Gets as invoice.
     *
     * @return \Pohoda\Invoice\InvoiceType[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice.
     *
     * @param \Pohoda\Invoice\InvoiceType[] $invoice
     *
     * @return self
     */
    public function setInvoice(?array $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }
}
