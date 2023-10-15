<?php

namespace Pohoda\Print;

/**
 * Class representing PrintType
 *
 *
 * XSD Type: printType
 */
class PrintType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\Filter\RecordPrintType $record
     */
    private $record = null;

    /**
     * Parametry tisku.
     *
     * @var \Pohoda\Print\PrinterSettingsType[] $printerSettings
     */
    private $printerSettings = [
        
    ];

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
     * Gets as record
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
     * Sets a new record
     *
     * Výběr záznamu.
     *
     * @param \Pohoda\Filter\RecordPrintType $record
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordPrintType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Adds as printerSettings
     *
     * Parametry tisku.
     *
     * @return self
     * @param \Pohoda\Print\PrinterSettingsType $printerSettings
     */
    public function addToPrinterSettings(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->printerSettings[] = $printerSettings;
        return $this;
    }

    /**
     * isset printerSettings
     *
     * Parametry tisku.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrinterSettings($index)
    {
        return isset($this->printerSettings[$index]);
    }

    /**
     * unset printerSettings
     *
     * Parametry tisku.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrinterSettings($index)
    {
        unset($this->printerSettings[$index]);
    }

    /**
     * Gets as printerSettings
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
     * Sets a new printerSettings
     *
     * Parametry tisku.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $printerSettings
     * @return self
     */
    public function setPrinterSettings(array $printerSettings)
    {
        $this->printerSettings = $printerSettings;
        return $this;
    }
}

