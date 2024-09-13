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
 * Class representing InvoiceRetentionsType.
 *
 * XSD Type: invoiceRetentionsType
 */
class InvoiceRetentionsType
{
    /**
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @var \Pohoda\Invoice\InvoiceRetentionType[]
     */
    private array $invoiceRetention = [
    ];

    /**
     * Adds as invoiceRetention.
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return self
     */
    public function addToInvoiceRetention(\Pohoda\Invoice\InvoiceRetentionType $invoiceRetention)
    {
        $this->invoiceRetention[] = $invoiceRetention;

        return $this;
    }

    /**
     * isset invoiceRetention.
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInvoiceRetention($index)
    {
        return isset($this->invoiceRetention[$index]);
    }

    /**
     * unset invoiceRetention.
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetInvoiceRetention($index): void
    {
        unset($this->invoiceRetention[$index]);
    }

    /**
     * Gets as invoiceRetention.
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
     * Sets a new invoiceRetention.
     *
     * Údaje o pozastávce k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetention
     *
     * @return self
     */
    public function setInvoiceRetention(array $invoiceRetention)
    {
        $this->invoiceRetention = $invoiceRetention;

        return $this;
    }
}
