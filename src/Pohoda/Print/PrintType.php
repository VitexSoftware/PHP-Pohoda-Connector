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

namespace Pohoda\Print;

/**
 * Class representing PrintType.
 *
 * XSD Type: printType
 */
class PrintType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\Filter\RecordPrintType $record = null;

    /**
     * Parametry tisku.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private array $printerSettings = [
    ];

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
     * Gets as record.
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\Filter\RecordPrintType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordPrintType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Adds as printerSettings.
     *
     * Parametry tisku.
     *
     * @return self
     */
    public function addToPrinterSettings(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->printerSettings[] = $printerSettings;

        return $this;
    }

    /**
     * isset printerSettings.
     *
     * Parametry tisku.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrinterSettings($index)
    {
        return isset($this->printerSettings[$index]);
    }

    /**
     * unset printerSettings.
     *
     * Parametry tisku.
     *
     * @param int|string $index
     */
    public function unsetPrinterSettings($index): void
    {
        unset($this->printerSettings[$index]);
    }

    /**
     * Gets as printerSettings.
     *
     * Parametry tisku.
     *
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrinterSettings()
    {
        return $this->printerSettings;
    }

    /**
     * Sets a new printerSettings.
     *
     * Parametry tisku.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $printerSettings
     *
     * @return self
     */
    public function setPrinterSettings(array $printerSettings)
    {
        $this->printerSettings = $printerSettings;

        return $this;
    }
}
