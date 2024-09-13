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

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaType.
 *
 * XSD Type: prodejkaType
 */
class ProdejkaType
{
    private string $version = null;

    /**
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v prodejkaHeader a eKasa (ostatní elementy budou ignorovány).
     */
    private \Pohoda\Type\CancelDocumentType $cancelDocument = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (pro typ Prodejka).
     */
    private \Pohoda\Type\LinksType $links = null;
    private \Pohoda\Prodejka\ProdejkaHeaderType $prodejkaHeader = null;
    private \Pohoda\Prodejka\ProdejkaDetailType $prodejkaDetail = null;

    /**
     * @var \Pohoda\Prodejka\PaymentItemType[]
     */
    private array $prodejkaPayments = null;
    private \Pohoda\Prodejka\ProdejkaSummaryType $prodejkaSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     */
    private \Pohoda\Type\LinksType $linkedDocuments = null;
    private \Pohoda\Type\EETType $eET = null;

    /**
     * Informace pro eKasu (pouze SK verze).
     */
    private \Pohoda\Prodejka\EKasaType $eKasa = null;

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
     * Gets as cancelDocument.
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
     * Sets a new cancelDocument.
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v prodejkaHeader a eKasa (ostatní elementy budou ignorovány).
     *
     * @return self
     */
    public function setCancelDocument(?\Pohoda\Type\CancelDocumentType $cancelDocument = null)
    {
        $this->cancelDocument = $cancelDocument;

        return $this;
    }

    /**
     * Gets as links.
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
     * Sets a new links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky (pro typ Prodejka)
     *
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Gets as prodejkaHeader.
     *
     * @return \Pohoda\Prodejka\ProdejkaHeaderType
     */
    public function getProdejkaHeader()
    {
        return $this->prodejkaHeader;
    }

    /**
     * Sets a new prodejkaHeader.
     *
     * @return self
     */
    public function setProdejkaHeader(?\Pohoda\Prodejka\ProdejkaHeaderType $prodejkaHeader = null)
    {
        $this->prodejkaHeader = $prodejkaHeader;

        return $this;
    }

    /**
     * Gets as prodejkaDetail.
     *
     * @return \Pohoda\Prodejka\ProdejkaDetailType
     */
    public function getProdejkaDetail()
    {
        return $this->prodejkaDetail;
    }

    /**
     * Sets a new prodejkaDetail.
     *
     * @return self
     */
    public function setProdejkaDetail(?\Pohoda\Prodejka\ProdejkaDetailType $prodejkaDetail = null)
    {
        $this->prodejkaDetail = $prodejkaDetail;

        return $this;
    }

    /**
     * Adds as paymentItem.
     *
     * @return self
     */
    public function addToProdejkaPayments(\Pohoda\Prodejka\PaymentItemType $paymentItem)
    {
        $this->prodejkaPayments[] = $paymentItem;

        return $this;
    }

    /**
     * isset prodejkaPayments.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProdejkaPayments($index)
    {
        return isset($this->prodejkaPayments[$index]);
    }

    /**
     * unset prodejkaPayments.
     *
     * @param int|string $index
     */
    public function unsetProdejkaPayments($index): void
    {
        unset($this->prodejkaPayments[$index]);
    }

    /**
     * Gets as prodejkaPayments.
     *
     * @return \Pohoda\Prodejka\PaymentItemType[]
     */
    public function getProdejkaPayments()
    {
        return $this->prodejkaPayments;
    }

    /**
     * Sets a new prodejkaPayments.
     *
     * @param \Pohoda\Prodejka\PaymentItemType[] $prodejkaPayments
     *
     * @return self
     */
    public function setProdejkaPayments(?array $prodejkaPayments = null)
    {
        $this->prodejkaPayments = $prodejkaPayments;

        return $this;
    }

    /**
     * Gets as prodejkaSummary.
     *
     * @return \Pohoda\Prodejka\ProdejkaSummaryType
     */
    public function getProdejkaSummary()
    {
        return $this->prodejkaSummary;
    }

    /**
     * Sets a new prodejkaSummary.
     *
     * @return self
     */
    public function setProdejkaSummary(?\Pohoda\Prodejka\ProdejkaSummaryType $prodejkaSummary = null)
    {
        $this->prodejkaSummary = $prodejkaSummary;

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
     * Gets as eKasa.
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
     * Sets a new eKasa.
     *
     * Informace pro eKasu (pouze SK verze).
     *
     * @return self
     */
    public function setEKasa(?\Pohoda\Prodejka\EKasaType $eKasa = null)
    {
        $this->eKasa = $eKasa;

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
