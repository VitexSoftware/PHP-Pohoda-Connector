<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceDetailType
 *
 *
 * XSD Type: invoiceDetailType
 */
class InvoiceDetailType
{
    /**
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @var \Pohoda\Invoice\InvoiceItemType[] $invoiceItem
     */
    private $invoiceItem = [
        
    ];

    /**
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @var \Pohoda\Invoice\InvoiceAdvancePaymentItemType[] $invoiceAdvancePaymentItem
     */
    private $invoiceAdvancePaymentItem = [
        
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType[] $roundingItem
     */
    private $roundingItem = [
        
    ];

    /**
     * Adds as invoiceItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return self
     * @param \Pohoda\Invoice\InvoiceItemType $invoiceItem
     */
    public function addToInvoiceItem(\Pohoda\Invoice\InvoiceItemType $invoiceItem)
    {
        $this->invoiceItem[] = $invoiceItem;
        return $this;
    }

    /**
     * isset invoiceItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceItem($index)
    {
        return isset($this->invoiceItem[$index]);
    }

    /**
     * unset invoiceItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceItem($index)
    {
        unset($this->invoiceItem[$index]);
    }

    /**
     * Gets as invoiceItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return \Pohoda\Invoice\InvoiceItemType[]
     */
    public function getInvoiceItem()
    {
        return $this->invoiceItem;
    }

    /**
     * Sets a new invoiceItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param \Pohoda\Invoice\InvoiceItemType[] $invoiceItem
     * @return self
     */
    public function setInvoiceItem(array $invoiceItem)
    {
        $this->invoiceItem = $invoiceItem;
        return $this;
    }

    /**
     * Adds as invoiceAdvancePaymentItem
     *
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @return self
     * @param \Pohoda\Invoice\InvoiceAdvancePaymentItemType $invoiceAdvancePaymentItem
     */
    public function addToInvoiceAdvancePaymentItem(\Pohoda\Invoice\InvoiceAdvancePaymentItemType $invoiceAdvancePaymentItem)
    {
        $this->invoiceAdvancePaymentItem[] = $invoiceAdvancePaymentItem;
        return $this;
    }

    /**
     * isset invoiceAdvancePaymentItem
     *
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceAdvancePaymentItem($index)
    {
        return isset($this->invoiceAdvancePaymentItem[$index]);
    }

    /**
     * unset invoiceAdvancePaymentItem
     *
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceAdvancePaymentItem($index)
    {
        unset($this->invoiceAdvancePaymentItem[$index]);
    }

    /**
     * Gets as invoiceAdvancePaymentItem
     *
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @return \Pohoda\Invoice\InvoiceAdvancePaymentItemType[]
     */
    public function getInvoiceAdvancePaymentItem()
    {
        return $this->invoiceAdvancePaymentItem;
    }

    /**
     * Sets a new invoiceAdvancePaymentItem
     *
     * Definice položky dokladu typu "Odpočet zálohy"/"Ruční odpočet zálohy". Používá se pouze v agendě Vydaná, Přijatá faktura.
     *
     * @param \Pohoda\Invoice\InvoiceAdvancePaymentItemType[] $invoiceAdvancePaymentItem
     * @return self
     */
    public function setInvoiceAdvancePaymentItem(array $invoiceAdvancePaymentItem)
    {
        $this->invoiceAdvancePaymentItem = $invoiceAdvancePaymentItem;
        return $this;
    }

    /**
     * Adds as roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return self
     * @param \Pohoda\Type\RoundingItemType $roundingItem
     */
    public function addToRoundingItem(\Pohoda\Type\RoundingItemType $roundingItem)
    {
        $this->roundingItem[] = $roundingItem;
        return $this;
    }

    /**
     * isset roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoundingItem($index)
    {
        return isset($this->roundingItem[$index]);
    }

    /**
     * unset roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoundingItem($index)
    {
        unset($this->roundingItem[$index]);
    }

    /**
     * Gets as roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType[]
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param \Pohoda\Type\RoundingItemType[] $roundingItem
     * @return self
     */
    public function setRoundingItem(array $roundingItem)
    {
        $this->roundingItem = $roundingItem;
        return $this;
    }
}

