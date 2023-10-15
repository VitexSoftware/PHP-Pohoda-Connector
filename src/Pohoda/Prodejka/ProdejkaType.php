<?php

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaType
 *
 *
 * XSD Type: prodejkaType
 */
class ProdejkaType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v prodejkaHeader a eKasa (ostatní elementy budou ignorovány).
     *
     * @var \Pohoda\Type\CancelDocumentType $cancelDocument
     */
    private $cancelDocument = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (pro typ Prodejka)
     *
     * @var \Pohoda\Type\LinksType $links
     */
    private $links = null;

    /**
     * @var \Pohoda\Prodejka\ProdejkaHeaderType $prodejkaHeader
     */
    private $prodejkaHeader = null;

    /**
     * @var \Pohoda\Prodejka\ProdejkaDetailType $prodejkaDetail
     */
    private $prodejkaDetail = null;

    /**
     * @var \Pohoda\Prodejka\PaymentItemType[] $prodejkaPayments
     */
    private $prodejkaPayments = null;

    /**
     * @var \Pohoda\Prodejka\ProdejkaSummaryType $prodejkaSummary
     */
    private $prodejkaSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType $linkedDocuments
     */
    private $linkedDocuments = null;

    /**
     * @var \Pohoda\Type\EETType $eET
     */
    private $eET = null;

    /**
     * Informace pro eKasu (pouze SK verze).
     *
     * @var \Pohoda\Prodejka\EKasaType $eKasa
     */
    private $eKasa = null;

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
     * Gets as cancelDocument
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v prodejkaHeader a eKasa (ostatní elementy budou ignorovány).
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
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v prodejkaHeader a eKasa (ostatní elementy budou ignorovány).
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
     * Gets as links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (pro typ Prodejka)
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
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (pro typ Prodejka)
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
     * Gets as prodejkaHeader
     *
     * @return \Pohoda\Prodejka\ProdejkaHeaderType
     */
    public function getProdejkaHeader()
    {
        return $this->prodejkaHeader;
    }

    /**
     * Sets a new prodejkaHeader
     *
     * @param \Pohoda\Prodejka\ProdejkaHeaderType $prodejkaHeader
     * @return self
     */
    public function setProdejkaHeader(?\Pohoda\Prodejka\ProdejkaHeaderType $prodejkaHeader = null)
    {
        $this->prodejkaHeader = $prodejkaHeader;
        return $this;
    }

    /**
     * Gets as prodejkaDetail
     *
     * @return \Pohoda\Prodejka\ProdejkaDetailType
     */
    public function getProdejkaDetail()
    {
        return $this->prodejkaDetail;
    }

    /**
     * Sets a new prodejkaDetail
     *
     * @param \Pohoda\Prodejka\ProdejkaDetailType $prodejkaDetail
     * @return self
     */
    public function setProdejkaDetail(?\Pohoda\Prodejka\ProdejkaDetailType $prodejkaDetail = null)
    {
        $this->prodejkaDetail = $prodejkaDetail;
        return $this;
    }

    /**
     * Adds as paymentItem
     *
     * @return self
     * @param \Pohoda\Prodejka\PaymentItemType $paymentItem
     */
    public function addToProdejkaPayments(\Pohoda\Prodejka\PaymentItemType $paymentItem)
    {
        $this->prodejkaPayments[] = $paymentItem;
        return $this;
    }

    /**
     * isset prodejkaPayments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProdejkaPayments($index)
    {
        return isset($this->prodejkaPayments[$index]);
    }

    /**
     * unset prodejkaPayments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProdejkaPayments($index)
    {
        unset($this->prodejkaPayments[$index]);
    }

    /**
     * Gets as prodejkaPayments
     *
     * @return \Pohoda\Prodejka\PaymentItemType[]
     */
    public function getProdejkaPayments()
    {
        return $this->prodejkaPayments;
    }

    /**
     * Sets a new prodejkaPayments
     *
     * @param \Pohoda\Prodejka\PaymentItemType[] $prodejkaPayments
     * @return self
     */
    public function setProdejkaPayments(array $prodejkaPayments = null)
    {
        $this->prodejkaPayments = $prodejkaPayments;
        return $this;
    }

    /**
     * Gets as prodejkaSummary
     *
     * @return \Pohoda\Prodejka\ProdejkaSummaryType
     */
    public function getProdejkaSummary()
    {
        return $this->prodejkaSummary;
    }

    /**
     * Sets a new prodejkaSummary
     *
     * @param \Pohoda\Prodejka\ProdejkaSummaryType $prodejkaSummary
     * @return self
     */
    public function setProdejkaSummary(?\Pohoda\Prodejka\ProdejkaSummaryType $prodejkaSummary = null)
    {
        $this->prodejkaSummary = $prodejkaSummary;
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
     * Gets as eKasa
     *
     * Informace pro eKasu (pouze SK verze).
     *
     * @return \Pohoda\Prodejka\EKasaType
     */
    public function getEKasa()
    {
        return $this->eKasa;
    }

    /**
     * Sets a new eKasa
     *
     * Informace pro eKasu (pouze SK verze).
     *
     * @param \Pohoda\Prodejka\EKasaType $eKasa
     * @return self
     */
    public function setEKasa(?\Pohoda\Prodejka\EKasaType $eKasa = null)
    {
        $this->eKasa = $eKasa;
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
