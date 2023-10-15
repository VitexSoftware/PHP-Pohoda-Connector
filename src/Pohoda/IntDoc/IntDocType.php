<?php

namespace Pohoda\IntDoc;

/**
 * Class representing IntDocType
 *
 *
 * XSD Type: intDocType
 */
class IntDocType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\IntDoc\TaxDocumentType $taxDocument
     */
    private $taxDocument = null;

    /**
     * @var \Pohoda\IntDoc\IntDocHeaderType $intDocHeader
     */
    private $intDocHeader = null;

    /**
     * @var \Pohoda\IntDoc\IntDocDetailType $intDocDetail
     */
    private $intDocDetail = null;

    /**
     * @var \Pohoda\IntDoc\IntDocSummaryType $intDocSummary
     */
    private $intDocSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType $linkedDocuments
     */
    private $linkedDocuments = null;

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
     * Gets as taxDocument
     *
     * @return \Pohoda\IntDoc\TaxDocumentType
     */
    public function getTaxDocument()
    {
        return $this->taxDocument;
    }

    /**
     * Sets a new taxDocument
     *
     * @param \Pohoda\IntDoc\TaxDocumentType $taxDocument
     * @return self
     */
    public function setTaxDocument(?\Pohoda\IntDoc\TaxDocumentType $taxDocument = null)
    {
        $this->taxDocument = $taxDocument;
        return $this;
    }

    /**
     * Gets as intDocHeader
     *
     * @return \Pohoda\IntDoc\IntDocHeaderType
     */
    public function getIntDocHeader()
    {
        return $this->intDocHeader;
    }

    /**
     * Sets a new intDocHeader
     *
     * @param \Pohoda\IntDoc\IntDocHeaderType $intDocHeader
     * @return self
     */
    public function setIntDocHeader(?\Pohoda\IntDoc\IntDocHeaderType $intDocHeader = null)
    {
        $this->intDocHeader = $intDocHeader;
        return $this;
    }

    /**
     * Gets as intDocDetail
     *
     * @return \Pohoda\IntDoc\IntDocDetailType
     */
    public function getIntDocDetail()
    {
        return $this->intDocDetail;
    }

    /**
     * Sets a new intDocDetail
     *
     * @param \Pohoda\IntDoc\IntDocDetailType $intDocDetail
     * @return self
     */
    public function setIntDocDetail(?\Pohoda\IntDoc\IntDocDetailType $intDocDetail = null)
    {
        $this->intDocDetail = $intDocDetail;
        return $this;
    }

    /**
     * Gets as intDocSummary
     *
     * @return \Pohoda\IntDoc\IntDocSummaryType
     */
    public function getIntDocSummary()
    {
        return $this->intDocSummary;
    }

    /**
     * Sets a new intDocSummary
     *
     * @param \Pohoda\IntDoc\IntDocSummaryType $intDocSummary
     * @return self
     */
    public function setIntDocSummary(?\Pohoda\IntDoc\IntDocSummaryType $intDocSummary = null)
    {
        $this->intDocSummary = $intDocSummary;
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
