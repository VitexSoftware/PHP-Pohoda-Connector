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

namespace Pohoda\Voucher;

/**
 * Class representing VoucherType.
 *
 * XSD Type: voucherType
 */
class VoucherType
{
    private ?string $version = null;

    /**
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v voucherHeader (ostatní elementy budou ignorovány).
     */
    private ?\Pohoda\Type\CancelDocumentType $cancelDocument = null;
    private ?\Pohoda\Voucher\VoucherHeaderType $voucherHeader = null;
    private ?\Pohoda\Voucher\VoucherDetailType $voucherDetail = null;
    private ?\Pohoda\Voucher\VoucherSummaryType $voucherSummary = null;
    private ?\Pohoda\Type\EETType $eET = null;

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
     * Gets as cancelDocument.
     *
     * Pomocí tohoto bloku bude vytvořen storno doklad. V programu POHODA bude vyhledán doklad, který má být stornován, pokud bude nalezen, bude k němu vytvořen stornující doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v voucherHeader (ostatní elementy budou ignorovány).
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
     *  Vložený doklad lze upravit pomocí jednotlivých elementů v voucherHeader (ostatní elementy budou ignorovány).
     *
     * @return self
     */
    public function setCancelDocument(?\Pohoda\Type\CancelDocumentType $cancelDocument = null)
    {
        $this->cancelDocument = $cancelDocument;

        return $this;
    }

    /**
     * Gets as voucherHeader.
     *
     * @return \Pohoda\Voucher\VoucherHeaderType
     */
    public function getVoucherHeader()
    {
        return $this->voucherHeader;
    }

    /**
     * Sets a new voucherHeader.
     *
     * @return self
     */
    public function setVoucherHeader(?\Pohoda\Voucher\VoucherHeaderType $voucherHeader = null)
    {
        $this->voucherHeader = $voucherHeader;

        return $this;
    }

    /**
     * Gets as voucherDetail.
     *
     * @return \Pohoda\Voucher\VoucherDetailType
     */
    public function getVoucherDetail()
    {
        return $this->voucherDetail;
    }

    /**
     * Sets a new voucherDetail.
     *
     * @return self
     */
    public function setVoucherDetail(?\Pohoda\Voucher\VoucherDetailType $voucherDetail = null)
    {
        $this->voucherDetail = $voucherDetail;

        return $this;
    }

    /**
     * Gets as voucherSummary.
     *
     * @return \Pohoda\Voucher\VoucherSummaryType
     */
    public function getVoucherSummary()
    {
        return $this->voucherSummary;
    }

    /**
     * Sets a new voucherSummary.
     *
     * @return self
     */
    public function setVoucherSummary(?\Pohoda\Voucher\VoucherSummaryType $voucherSummary = null)
    {
        $this->voucherSummary = $voucherSummary;

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
