<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceType
 *
 *
 * XSD Type: invoiceType
 */
class InvoiceType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Pokud nejsou specifikovány položky, vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (do agendy Vydané zálohové faktury)
     *  - Přijaté objednávky (do agendy Vydané faktury) 
     *  - Vydané objednávky (do agendy Přijaté zálohové faktury)
     *  - Vydané objednávky (do agendy Přijaté faktury)
     *  - Výdejky (do agendy Vydané faktury, typ Faktura)
     *
     * @var \Pohoda\Type\LinksType $links
     */
    private $links = null;

    /**
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad. 
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @var \Pohoda\Type\CancelDocumentType $cancelDocument
     */
    private $cancelDocument = null;

    /**
     * Pomocí tohoto bloku bude vytvořen opravný daňový doklad (pouze CZ verze) nebo Dobropis (pouze SK verze). V programu POHODA bude vyhledán doklad, pokud bude nalezen, bude k němu vytvořen opravný daňový doklad, Dobropis.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @var \Pohoda\Type\CorrectiveDocumentType $correctiveDocument
     */
    private $correctiveDocument = null;

    /**
     * @var \Pohoda\Invoice\InvoiceHeaderType $invoiceHeader
     */
    private $invoiceHeader = null;

    /**
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @var \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetentions
     */
    private $invoiceRetentions = null;

    /**
     * @var \Pohoda\Invoice\InvoiceDetailType $invoiceDetail
     */
    private $invoiceDetail = null;

    /**
     * @var \Pohoda\Invoice\InvoiceSummaryType $invoiceSummary
     */
    private $invoiceSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType $linkedDocuments
     */
    private $linkedDocuments = null;

    /**
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @var \Pohoda\Type\LiquidationItemType[] $liquidations
     */
    private $liquidations = null;

    /**
     * @var \Pohoda\Type\EETType $eET
     */
    private $eET = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[] $print
     */
    private $print = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Pokud nejsou specifikovány položky, vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (do agendy Vydané zálohové faktury)
     *  - Přijaté objednávky (do agendy Vydané faktury) 
     *  - Vydané objednávky (do agendy Přijaté zálohové faktury)
     *  - Vydané objednávky (do agendy Přijaté faktury)
     *  - Výdejky (do agendy Vydané faktury, typ Faktura)
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Pokud nejsou specifikovány položky, vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (do agendy Vydané zálohové faktury)
     *  - Přijaté objednávky (do agendy Vydané faktury) 
     *  - Vydané objednávky (do agendy Přijaté zálohové faktury)
     *  - Vydané objednávky (do agendy Přijaté faktury)
     *  - Výdejky (do agendy Vydané faktury, typ Faktura)
     *
     * @param \Pohoda\Type\LinksType $links
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as cancelDocument
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad. 
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @return \Pohoda\Type\CancelDocumentType
     */
    public function getCancelDocument()
    {
        return $this->cancelDocument;
    }

    /**
     * Sets a new cancelDocument
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad. 
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @param \Pohoda\Type\CancelDocumentType $cancelDocument
     * @return self
     */
    public function setCancelDocument(?\Pohoda\Type\CancelDocumentType $cancelDocument = null)
    {
        $this->cancelDocument = $cancelDocument;
        return $this;
    }

    /**
     * Gets as correctiveDocument
     *
     * Pomocí tohoto bloku bude vytvořen opravný daňový doklad (pouze CZ verze) nebo Dobropis (pouze SK verze). V programu POHODA bude vyhledán doklad, pokud bude nalezen, bude k němu vytvořen opravný daňový doklad, Dobropis.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @return \Pohoda\Type\CorrectiveDocumentType
     */
    public function getCorrectiveDocument()
    {
        return $this->correctiveDocument;
    }

    /**
     * Sets a new correctiveDocument
     *
     * Pomocí tohoto bloku bude vytvořen opravný daňový doklad (pouze CZ verze) nebo Dobropis (pouze SK verze). V programu POHODA bude vyhledán doklad, pokud bude nalezen, bude k němu vytvořen opravný daňový doklad, Dobropis.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @param \Pohoda\Type\CorrectiveDocumentType $correctiveDocument
     * @return self
     */
    public function setCorrectiveDocument(?\Pohoda\Type\CorrectiveDocumentType $correctiveDocument = null)
    {
        $this->correctiveDocument = $correctiveDocument;
        return $this;
    }

    /**
     * Gets as invoiceHeader
     *
     * @return \Pohoda\Invoice\InvoiceHeaderType
     */
    public function getInvoiceHeader()
    {
        return $this->invoiceHeader;
    }

    /**
     * Sets a new invoiceHeader
     *
     * @param \Pohoda\Invoice\InvoiceHeaderType $invoiceHeader
     * @return self
     */
    public function setInvoiceHeader(?\Pohoda\Invoice\InvoiceHeaderType $invoiceHeader = null)
    {
        $this->invoiceHeader = $invoiceHeader;
        return $this;
    }

    /**
     * Adds as invoiceRetention
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return self
     * @param \Pohoda\Invoice\InvoiceRetentionType $invoiceRetention
     */
    public function addToInvoiceRetentions(\Pohoda\Invoice\InvoiceRetentionType $invoiceRetention)
    {
        $this->invoiceRetentions[] = $invoiceRetention;
        return $this;
    }

    /**
     * isset invoiceRetentions
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceRetentions($index)
    {
        return isset($this->invoiceRetentions[$index]);
    }

    /**
     * unset invoiceRetentions
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceRetentions($index)
    {
        unset($this->invoiceRetentions[$index]);
    }

    /**
     * Gets as invoiceRetentions
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return \Pohoda\Invoice\InvoiceRetentionType[]
     */
    public function getInvoiceRetentions()
    {
        return $this->invoiceRetentions;
    }

    /**
     * Sets a new invoiceRetentions
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetentions
     * @return self
     */
    public function setInvoiceRetentions(array $invoiceRetentions = null)
    {
        $this->invoiceRetentions = $invoiceRetentions;
        return $this;
    }

    /**
     * Gets as invoiceDetail
     *
     * @return \Pohoda\Invoice\InvoiceDetailType
     */
    public function getInvoiceDetail()
    {
        return $this->invoiceDetail;
    }

    /**
     * Sets a new invoiceDetail
     *
     * @param \Pohoda\Invoice\InvoiceDetailType $invoiceDetail
     * @return self
     */
    public function setInvoiceDetail(?\Pohoda\Invoice\InvoiceDetailType $invoiceDetail = null)
    {
        $this->invoiceDetail = $invoiceDetail;
        return $this;
    }

    /**
     * Gets as invoiceSummary
     *
     * @return \Pohoda\Invoice\InvoiceSummaryType
     */
    public function getInvoiceSummary()
    {
        return $this->invoiceSummary;
    }

    /**
     * Sets a new invoiceSummary
     *
     * @param \Pohoda\Invoice\InvoiceSummaryType $invoiceSummary
     * @return self
     */
    public function setInvoiceSummary(?\Pohoda\Invoice\InvoiceSummaryType $invoiceSummary = null)
    {
        $this->invoiceSummary = $invoiceSummary;
        return $this;
    }

    /**
     * Gets as linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinkedDocuments()
    {
        return $this->linkedDocuments;
    }

    /**
     * Sets a new linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @param \Pohoda\Type\LinksType $linkedDocuments
     * @return self
     */
    public function setLinkedDocuments(?\Pohoda\Type\LinksType $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;
        return $this;
    }

    /**
     * Adds as liquidation
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @return self
     * @param \Pohoda\Type\LiquidationItemType $liquidation
     */
    public function addToLiquidations(\Pohoda\Type\LiquidationItemType $liquidation)
    {
        $this->liquidations[] = $liquidation;
        return $this;
    }

    /**
     * isset liquidations
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLiquidations($index)
    {
        return isset($this->liquidations[$index]);
    }

    /**
     * unset liquidations
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLiquidations($index)
    {
        unset($this->liquidations[$index]);
    }

    /**
     * Gets as liquidations
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @return \Pohoda\Type\LiquidationItemType[]
     */
    public function getLiquidations()
    {
        return $this->liquidations;
    }

    /**
     * Sets a new liquidations
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param \Pohoda\Type\LiquidationItemType[] $liquidations
     * @return self
     */
    public function setLiquidations(array $liquidations = null)
    {
        $this->liquidations = $liquidations;
        return $this;
    }

    /**
     * Gets as eET
     *
     * @return \Pohoda\Type\EETType
     */
    public function getEET()
    {
        return $this->eET;
    }

    /**
     * Sets a new eET
     *
     * @param \Pohoda\Type\EETType $eET
     * @return self
     */
    public function setEET(?\Pohoda\Type\EETType $eET = null)
    {
        $this->eET = $eET;
        return $this;
    }

    /**
     * Adds as printerSettings
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     * @param \Pohoda\Print\PrinterSettingsType $printerSettings
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;
        return $this;
    }

    /**
     * isset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrint($index)
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     * @return self
     */
    public function setPrint(array $print = null)
    {
        $this->print = $print;
        return $this;
    }
}

