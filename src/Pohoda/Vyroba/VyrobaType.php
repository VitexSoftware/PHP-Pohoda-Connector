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

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaType.
 *
 * XSD Type: vyrobaType
 */
class VyrobaType
{
    private ?string $version = null;
    private ?\Pohoda\Vyroba\VyrobaHeaderType $vyrobaHeader = null;

    /**
     * @var \Pohoda\Vyroba\VyrobaItemType[]
     */
    private ?array $vyrobaDetail = null;

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
     * Gets as vyrobaHeader.
     *
     * @return \Pohoda\Vyroba\VyrobaHeaderType
     */
    public function getVyrobaHeader()
    {
        return $this->vyrobaHeader;
    }

    /**
     * Sets a new vyrobaHeader.
     *
     * @return self
     */
    public function setVyrobaHeader(?\Pohoda\Vyroba\VyrobaHeaderType $vyrobaHeader = null)
    {
        $this->vyrobaHeader = $vyrobaHeader;

        return $this;
    }

    /**
     * Adds as vyrobaItem.
     *
     * @return self
     */
    public function addToVyrobaDetail(\Pohoda\Vyroba\VyrobaItemType $vyrobaItem)
    {
        $this->vyrobaDetail[] = $vyrobaItem;

        return $this;
    }

    /**
     * isset vyrobaDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVyrobaDetail($index)
    {
        return isset($this->vyrobaDetail[$index]);
    }

    /**
     * unset vyrobaDetail.
     *
     * @param int|string $index
     */
    public function unsetVyrobaDetail($index): void
    {
        unset($this->vyrobaDetail[$index]);
    }

    /**
     * Gets as vyrobaDetail.
     *
     * @return \Pohoda\Vyroba\VyrobaItemType[]
     */
    public function getVyrobaDetail()
    {
        return $this->vyrobaDetail;
    }

    /**
     * Sets a new vyrobaDetail.
     *
     * @param \Pohoda\Vyroba\VyrobaItemType[] $vyrobaDetail
     *
     * @return self
     */
    public function setVyrobaDetail(?array $vyrobaDetail = null)
    {
        $this->vyrobaDetail = $vyrobaDetail;

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
