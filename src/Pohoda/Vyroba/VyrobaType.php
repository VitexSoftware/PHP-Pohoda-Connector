<?php

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaType
 *
 *
 * XSD Type: vyrobaType
 */
class VyrobaType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Vyroba\VyrobaHeaderType $vyrobaHeader
     */
    private $vyrobaHeader = null;

    /**
     * @var \Pohoda\Vyroba\VyrobaItemType[] $vyrobaDetail
     */
    private $vyrobaDetail = null;

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
     * Gets as vyrobaHeader
     *
     * @return \Pohoda\Vyroba\VyrobaHeaderType
     */
    public function getVyrobaHeader()
    {
        return $this->vyrobaHeader;
    }

    /**
     * Sets a new vyrobaHeader
     *
     * @param \Pohoda\Vyroba\VyrobaHeaderType $vyrobaHeader
     * @return self
     */
    public function setVyrobaHeader(?\Pohoda\Vyroba\VyrobaHeaderType $vyrobaHeader = null)
    {
        $this->vyrobaHeader = $vyrobaHeader;
        return $this;
    }

    /**
     * Adds as vyrobaItem
     *
     * @return self
     * @param \Pohoda\Vyroba\VyrobaItemType $vyrobaItem
     */
    public function addToVyrobaDetail(\Pohoda\Vyroba\VyrobaItemType $vyrobaItem)
    {
        $this->vyrobaDetail[] = $vyrobaItem;
        return $this;
    }

    /**
     * isset vyrobaDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVyrobaDetail($index)
    {
        return isset($this->vyrobaDetail[$index]);
    }

    /**
     * unset vyrobaDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVyrobaDetail($index)
    {
        unset($this->vyrobaDetail[$index]);
    }

    /**
     * Gets as vyrobaDetail
     *
     * @return \Pohoda\Vyroba\VyrobaItemType[]
     */
    public function getVyrobaDetail()
    {
        return $this->vyrobaDetail;
    }

    /**
     * Sets a new vyrobaDetail
     *
     * @param \Pohoda\Vyroba\VyrobaItemType[] $vyrobaDetail
     * @return self
     */
    public function setVyrobaDetail(array $vyrobaDetail = null)
    {
        $this->vyrobaDetail = $vyrobaDetail;
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
    public function setPrint(array $print = null)
    {
        $this->print = $print;
        return $this;
    }
}
