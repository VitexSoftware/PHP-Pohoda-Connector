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

namespace Pohoda\Offer;

/**
 * Class representing OfferType.
 *
 * XSD Type: offerType
 */
class OfferType
{
    private ?string $version = null;
    private ?\Pohoda\Offer\OfferHeaderType $offerHeader = null;
    private ?\Pohoda\Offer\OfferDetailType $offerDetail = null;
    private ?\Pohoda\Offer\OfferSummaryType $offerSummary = null;

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
     * Gets as offerHeader.
     *
     * @return \Pohoda\Offer\OfferHeaderType
     */
    public function getOfferHeader()
    {
        return $this->offerHeader;
    }

    /**
     * Sets a new offerHeader.
     *
     * @return self
     */
    public function setOfferHeader(\Pohoda\Offer\OfferHeaderType $offerHeader)
    {
        $this->offerHeader = $offerHeader;

        return $this;
    }

    /**
     * Gets as offerDetail.
     *
     * @return \Pohoda\Offer\OfferDetailType
     */
    public function getOfferDetail()
    {
        return $this->offerDetail;
    }

    /**
     * Sets a new offerDetail.
     *
     * @return self
     */
    public function setOfferDetail(\Pohoda\Offer\OfferDetailType $offerDetail)
    {
        $this->offerDetail = $offerDetail;

        return $this;
    }

    /**
     * Gets as offerSummary.
     *
     * @return \Pohoda\Offer\OfferSummaryType
     */
    public function getOfferSummary()
    {
        return $this->offerSummary;
    }

    /**
     * Sets a new offerSummary.
     *
     * @return self
     */
    public function setOfferSummary(\Pohoda\Offer\OfferSummaryType $offerSummary)
    {
        $this->offerSummary = $offerSummary;

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
