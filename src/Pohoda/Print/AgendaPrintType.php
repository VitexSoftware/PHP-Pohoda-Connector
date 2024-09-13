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
 * Class representing AgendaPrintType.
 *
 * XSD Type: agendaPrintType
 */
class AgendaPrintType
{
    /**
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private array $printerSettings = [
    ];

    /**
     * Adds as printerSettings.
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
     * @param int|string $index
     */
    public function unsetPrinterSettings($index): void
    {
        unset($this->printerSettings[$index]);
    }

    /**
     * Gets as printerSettings.
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
     * @param \Pohoda\Print\PrinterSettingsType[] $printerSettings
     *
     * @return self
     */
    public function setPrinterSettings(?array $printerSettings = null)
    {
        $this->printerSettings = $printerSettings;

        return $this;
    }
}
