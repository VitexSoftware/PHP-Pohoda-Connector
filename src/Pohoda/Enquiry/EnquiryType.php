<?php

namespace Pohoda\Enquiry;

/**
 * Class representing EnquiryType
 *
 *
 * XSD Type: enquiryType
 */
class EnquiryType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader
     */
    private $enquiryHeader = null;

    /**
     * @var \Pohoda\Enquiry\EnquiryDetailType $enquiryDetail
     */
    private $enquiryDetail = null;

    /**
     * @var \Pohoda\Enquiry\EnquirySummaryType $enquirySummary
     */
    private $enquirySummary = null;

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
     * Gets as enquiryHeader
     *
     * @return \Pohoda\Enquiry\EnquiryHeaderType
     */
    public function getEnquiryHeader()
    {
        return $this->enquiryHeader;
    }

    /**
     * Sets a new enquiryHeader
     *
     * @param \Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader
     * @return self
     */
    public function setEnquiryHeader(\Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader)
    {
        $this->enquiryHeader = $enquiryHeader;
        return $this;
    }

    /**
     * Gets as enquiryDetail
     *
     * @return \Pohoda\Enquiry\EnquiryDetailType
     */
    public function getEnquiryDetail()
    {
        return $this->enquiryDetail;
    }

    /**
     * Sets a new enquiryDetail
     *
     * @param \Pohoda\Enquiry\EnquiryDetailType $enquiryDetail
     * @return self
     */
    public function setEnquiryDetail(\Pohoda\Enquiry\EnquiryDetailType $enquiryDetail)
    {
        $this->enquiryDetail = $enquiryDetail;
        return $this;
    }

    /**
     * Gets as enquirySummary
     *
     * @return \Pohoda\Enquiry\EnquirySummaryType
     */
    public function getEnquirySummary()
    {
        return $this->enquirySummary;
    }

    /**
     * Sets a new enquirySummary
     *
     * @param \Pohoda\Enquiry\EnquirySummaryType $enquirySummary
     * @return self
     */
    public function setEnquirySummary(\Pohoda\Enquiry\EnquirySummaryType $enquirySummary)
    {
        $this->enquirySummary = $enquirySummary;
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
    public function setPrint(array $print)
    {
        $this->print = $print;
        return $this;
    }
}

