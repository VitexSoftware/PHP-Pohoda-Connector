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

namespace Pohoda\IntDoc;

/**
 * Class representing IntDocType.
 *
 * XSD Type: intDocType
 */
class IntDocType
{
    private ?string $version = null;
    private ?\Pohoda\IntDoc\TaxDocumentType $taxDocument = null;
    private ?\Pohoda\IntDoc\IntDocHeaderType $intDocHeader = null;
    private ?\Pohoda\IntDoc\IntDocDetailType $intDocDetail = null;
    private ?\Pohoda\IntDoc\IntDocSummaryType $intDocSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     */
    private ?\Pohoda\Type\LinksType $linkedDocuments = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private ?array $print = null;

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
     * Gets as taxDocument.
     *
     * @return \Pohoda\IntDoc\TaxDocumentType
     */
    public function getTaxDocument()
    {
        return $this->taxDocument;
    }

    /**
     * Sets a new taxDocument.
     *
     * @return self
     */
    public function setTaxDocument(?\Pohoda\IntDoc\TaxDocumentType $taxDocument = null)
    {
        $this->taxDocument = $taxDocument;

        return $this;
    }

    /**
     * Gets as intDocHeader.
     *
     * @return \Pohoda\IntDoc\IntDocHeaderType
     */
    public function getIntDocHeader()
    {
        return $this->intDocHeader;
    }

    /**
     * Sets a new intDocHeader.
     *
     * @return self
     */
    public function setIntDocHeader(?\Pohoda\IntDoc\IntDocHeaderType $intDocHeader = null)
    {
        $this->intDocHeader = $intDocHeader;

        return $this;
    }

    /**
     * Gets as intDocDetail.
     *
     * @return \Pohoda\IntDoc\IntDocDetailType
     */
    public function getIntDocDetail()
    {
        return $this->intDocDetail;
    }

    /**
     * Sets a new intDocDetail.
     *
     * @return self
     */
    public function setIntDocDetail(?\Pohoda\IntDoc\IntDocDetailType $intDocDetail = null)
    {
        $this->intDocDetail = $intDocDetail;

        return $this;
    }

    /**
     * Gets as intDocSummary.
     *
     * @return \Pohoda\IntDoc\IntDocSummaryType
     */
    public function getIntDocSummary()
    {
        return $this->intDocSummary;
    }

    /**
     * Sets a new intDocSummary.
     *
     * @return self
     */
    public function setIntDocSummary(?\Pohoda\IntDoc\IntDocSummaryType $intDocSummary = null)
    {
        $this->intDocSummary = $intDocSummary;

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
