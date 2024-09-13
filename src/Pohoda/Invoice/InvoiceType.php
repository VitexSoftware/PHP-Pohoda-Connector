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
 * Class representing InvoiceType.
 *
 * XSD Type: invoiceType
 */
class InvoiceType
{
    private string $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Pokud nejsou specifikovány položky, vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (do agendy Vydané zálohové faktury)
     *  - Přijaté objednávky (do agendy Vydané faktury)
     *  - Vydané objednávky (do agendy Přijaté zálohové faktury)
     *  - Vydané objednávky (do agendy Přijaté faktury)
     *  - Výdejky (do agendy Vydané faktury, typ Faktura).
     */
    private \Pohoda\Type\LinksType $links = null;

    /**
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     */
    private \Pohoda\Type\CancelDocumentType $cancelDocument = null;

    /**
     * Pomocí tohoto bloku bude vytvořen opravný daňový doklad (pouze CZ verze) nebo Dobropis (pouze SK verze). V programu POHODA bude vyhledán doklad, pokud bude nalezen, bude k němu vytvořen opravný daňový doklad, Dobropis.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     */
    private \Pohoda\Type\CorrectiveDocumentType $correctiveDocument = null;
    private \Pohoda\Invoice\InvoiceHeaderType $invoiceHeader = null;

    /**
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @var \Pohoda\Invoice\InvoiceRetentionType[]
     */
    private array $invoiceRetentions = null;
    private \Pohoda\Invoice\InvoiceDetailType $invoiceDetail = null;
    private \Pohoda\Invoice\InvoiceSummaryType $invoiceSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     */
    private \Pohoda\Type\LinksType $linkedDocuments = null;

    /**
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @var \Pohoda\Type\LiquidationItemType[]
     */
    private array $liquidations = null;
    private \Pohoda\Type\EETType $eET = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private array $print = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as links.
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
     * Sets a new links.
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
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Gets as cancelDocument.
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
     * Sets a new cancelDocument.
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @return self
     */
    public function setCancelDocument(?\Pohoda\Type\CancelDocumentType $cancelDocument = null)
    {
        $this->cancelDocument = $cancelDocument;

        return $this;
    }

    /**
     * Gets as correctiveDocument.
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
     * Sets a new correctiveDocument.
     *
     * Pomocí tohoto bloku bude vytvořen opravný daňový doklad (pouze CZ verze) nebo Dobropis (pouze SK verze). V programu POHODA bude vyhledán doklad, pokud bude nalezen, bude k němu vytvořen opravný daňový doklad, Dobropis.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v invoiceHeader (ostatní elementy budou ignorovány).
     *
     * @return self
     */
    public function setCorrectiveDocument(?\Pohoda\Type\CorrectiveDocumentType $correctiveDocument = null)
    {
        $this->correctiveDocument = $correctiveDocument;

        return $this;
    }

    /**
     * Gets as invoiceHeader.
     *
     * @return \Pohoda\Invoice\InvoiceHeaderType
     */
    public function getInvoiceHeader()
    {
        return $this->invoiceHeader;
    }

    /**
     * Sets a new invoiceHeader.
     *
     * @return self
     */
    public function setInvoiceHeader(?\Pohoda\Invoice\InvoiceHeaderType $invoiceHeader = null)
    {
        $this->invoiceHeader = $invoiceHeader;

        return $this;
    }

    /**
     * Adds as invoiceRetention.
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @return self
     */
    public function addToInvoiceRetentions(\Pohoda\Invoice\InvoiceRetentionType $invoiceRetention)
    {
        $this->invoiceRetentions[] = $invoiceRetention;

        return $this;
    }

    /**
     * isset invoiceRetentions.
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInvoiceRetentions($index)
    {
        return isset($this->invoiceRetentions[$index]);
    }

    /**
     * unset invoiceRetentions.
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetInvoiceRetentions($index): void
    {
        unset($this->invoiceRetentions[$index]);
    }

    /**
     * Gets as invoiceRetentions.
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
     * Sets a new invoiceRetentions.
     *
     * Údaje o pozastávkách k vydané nebo přijaté faktuře. Pouze pro export.
     *
     * @param \Pohoda\Invoice\InvoiceRetentionType[] $invoiceRetentions
     *
     * @return self
     */
    public function setInvoiceRetentions(?array $invoiceRetentions = null)
    {
        $this->invoiceRetentions = $invoiceRetentions;

        return $this;
    }

    /**
     * Gets as invoiceDetail.
     *
     * @return \Pohoda\Invoice\InvoiceDetailType
     */
    public function getInvoiceDetail()
    {
        return $this->invoiceDetail;
    }

    /**
     * Sets a new invoiceDetail.
     *
     * @return self
     */
    public function setInvoiceDetail(?\Pohoda\Invoice\InvoiceDetailType $invoiceDetail = null)
    {
        $this->invoiceDetail = $invoiceDetail;

        return $this;
    }

    /**
     * Gets as invoiceSummary.
     *
     * @return \Pohoda\Invoice\InvoiceSummaryType
     */
    public function getInvoiceSummary()
    {
        return $this->invoiceSummary;
    }

    /**
     * Sets a new invoiceSummary.
     *
     * @return self
     */
    public function setInvoiceSummary(?\Pohoda\Invoice\InvoiceSummaryType $invoiceSummary = null)
    {
        $this->invoiceSummary = $invoiceSummary;

        return $this;
    }

    /**
     * Gets as linkedDocuments.
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
     * Sets a new linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return self
     */
    public function setLinkedDocuments(?\Pohoda\Type\LinksType $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;

        return $this;
    }

    /**
     * Adds as liquidation.
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @return self
     */
    public function addToLiquidations(\Pohoda\Type\LiquidationItemType $liquidation)
    {
        $this->liquidations[] = $liquidation;

        return $this;
    }

    /**
     * isset liquidations.
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLiquidations($index)
    {
        return isset($this->liquidations[$index]);
    }

    /**
     * unset liquidations.
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param int|string $index
     */
    public function unsetLiquidations($index): void
    {
        unset($this->liquidations[$index]);
    }

    /**
     * Gets as liquidations.
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
     * Sets a new liquidations.
     *
     * Vazba na likvidace dokladu (pouze pro export).
     *
     * @param \Pohoda\Type\LiquidationItemType[] $liquidations
     *
     * @return self
     */
    public function setLiquidations(?array $liquidations = null)
    {
        $this->liquidations = $liquidations;

        return $this;
    }

    /**
     * Gets as eET.
     *
     * @return \Pohoda\Type\EETType
     */
    public function getEET()
    {
        return $this->eET;
    }

    /**
     * Sets a new eET.
     *
     * @return self
     */
    public function setEET(?\Pohoda\Type\EETType $eET = null)
    {
        $this->eET = $eET;

        return $this;
    }

    /**
     * Adds as printerSettings.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;

        return $this;
    }

    /**
     * isset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     */
    public function unsetPrint($index): void
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print.
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
     * Sets a new print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     *
     * @return self
     */
    public function setPrint(?array $print = null)
    {
        $this->print = $print;

        return $this;
    }
}
