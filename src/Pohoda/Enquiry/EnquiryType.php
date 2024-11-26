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

namespace Pohoda\Enquiry;

/**
 * Class representing EnquiryType.
 *
 * XSD Type: enquiryType
 */
class EnquiryType
{
    private ?string $version = null;
    private ?\Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader = null;
    private ?\Pohoda\Enquiry\EnquiryDetailType $enquiryDetail = null;
    private ?\Pohoda\Enquiry\EnquirySummaryType $enquirySummary = null;

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
     * Gets as enquiryHeader.
     *
     * @return \Pohoda\Enquiry\EnquiryHeaderType
     */
    public function getEnquiryHeader()
    {
        return $this->enquiryHeader;
    }

    /**
     * Sets a new enquiryHeader.
     *
     * @return self
     */
    public function setEnquiryHeader(\Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader)
    {
        $this->enquiryHeader = $enquiryHeader;

        return $this;
    }

    /**
     * Gets as enquiryDetail.
     *
     * @return \Pohoda\Enquiry\EnquiryDetailType
     */
    public function getEnquiryDetail()
    {
        return $this->enquiryDetail;
    }

    /**
     * Sets a new enquiryDetail.
     *
     * @return self
     */
    public function setEnquiryDetail(\Pohoda\Enquiry\EnquiryDetailType $enquiryDetail)
    {
        $this->enquiryDetail = $enquiryDetail;

        return $this;
    }

    /**
     * Gets as enquirySummary.
     *
     * @return \Pohoda\Enquiry\EnquirySummaryType
     */
    public function getEnquirySummary()
    {
        return $this->enquirySummary;
    }

    /**
     * Sets a new enquirySummary.
     *
     * @return self
     */
    public function setEnquirySummary(\Pohoda\Enquiry\EnquirySummaryType $enquirySummary)
    {
        $this->enquirySummary = $enquirySummary;

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
    public function setPrint(array $print)
    {
        $this->print = $print;

        return $this;
    }
}
