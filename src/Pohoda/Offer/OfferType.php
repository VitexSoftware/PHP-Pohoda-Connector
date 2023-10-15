<?php

namespace Pohoda\Offer;

/**
 * Class representing OfferType
 *
 *
 * XSD Type: offerType
 */
class OfferType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Offer\OfferHeaderType $offerHeader
     */
    private $offerHeader = null;

    /**
     * @var \Pohoda\Offer\OfferDetailType $offerDetail
     */
    private $offerDetail = null;

    /**
     * @var \Pohoda\Offer\OfferSummaryType $offerSummary
     */
    private $offerSummary = null;

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
     * Gets as offerHeader
     *
     * @return \Pohoda\Offer\OfferHeaderType
     */
    public function getOfferHeader()
    {
        return $this->offerHeader;
    }

    /**
     * Sets a new offerHeader
     *
     * @param \Pohoda\Offer\OfferHeaderType $offerHeader
     * @return self
     */
    public function setOfferHeader(\Pohoda\Offer\OfferHeaderType $offerHeader)
    {
        $this->offerHeader = $offerHeader;
        return $this;
    }

    /**
     * Gets as offerDetail
     *
     * @return \Pohoda\Offer\OfferDetailType
     */
    public function getOfferDetail()
    {
        return $this->offerDetail;
    }

    /**
     * Sets a new offerDetail
     *
     * @param \Pohoda\Offer\OfferDetailType $offerDetail
     * @return self
     */
    public function setOfferDetail(\Pohoda\Offer\OfferDetailType $offerDetail)
    {
        $this->offerDetail = $offerDetail;
        return $this;
    }

    /**
     * Gets as offerSummary
     *
     * @return \Pohoda\Offer\OfferSummaryType
     */
    public function getOfferSummary()
    {
        return $this->offerSummary;
    }

    /**
     * Sets a new offerSummary
     *
     * @param \Pohoda\Offer\OfferSummaryType $offerSummary
     * @return self
     */
    public function setOfferSummary(\Pohoda\Offer\OfferSummaryType $offerSummary)
    {
        $this->offerSummary = $offerSummary;
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

