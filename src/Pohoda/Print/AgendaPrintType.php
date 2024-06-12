<?php

namespace Pohoda\Print;

/**
 * Class representing AgendaPrintType
 *
 *
 * XSD Type: agendaPrintType
 */
class AgendaPrintType
{
    /**
     * @var \Pohoda\Print\PrinterSettingsType[] $printerSettings
     */
    private $printerSettings = [
    ];

    /**
     * Adds as printerSettings
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
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrinterSettings()
    {
        return $this->printerSettings;
    }

    /**
     * Sets a new printerSettings
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $printerSettings
     * @return self
     */
    public function setPrinterSettings(array $printerSettings = null)
    {
        $this->printerSettings = $printerSettings;
        return $this;
    }
}
