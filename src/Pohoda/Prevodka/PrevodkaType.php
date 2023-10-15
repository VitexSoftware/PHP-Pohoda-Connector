<?php

namespace Pohoda\Prevodka;

/**
 * Class representing PrevodkaType
 *
 *
 * XSD Type: prevodkaType
 */
class PrevodkaType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky
     *
     * @var \Pohoda\Type\LinksType $links
     */
    private $links = null;

    /**
     * @var \Pohoda\Prevodka\PrevodkaHeaderType $prevodkaHeader
     */
    private $prevodkaHeader = null;

    /**
     * @var \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaDetail
     */
    private $prevodkaDetail = null;

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
     * Gets as links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky
     *
     * @param \Pohoda\Type\LinksType $links
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as prevodkaHeader
     *
     * @return \Pohoda\Prevodka\PrevodkaHeaderType
     */
    public function getPrevodkaHeader()
    {
        return $this->prevodkaHeader;
    }

    /**
     * Sets a new prevodkaHeader
     *
     * @param \Pohoda\Prevodka\PrevodkaHeaderType $prevodkaHeader
     * @return self
     */
    public function setPrevodkaHeader(?\Pohoda\Prevodka\PrevodkaHeaderType $prevodkaHeader = null)
    {
        $this->prevodkaHeader = $prevodkaHeader;
        return $this;
    }

    /**
     * Adds as prevodkaItem
     *
     * @return self
     * @param \Pohoda\Prevodka\PrevodkaItemType $prevodkaItem
     */
    public function addToPrevodkaDetail(\Pohoda\Prevodka\PrevodkaItemType $prevodkaItem)
    {
        $this->prevodkaDetail[] = $prevodkaItem;
        return $this;
    }

    /**
     * isset prevodkaDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrevodkaDetail($index)
    {
        return isset($this->prevodkaDetail[$index]);
    }

    /**
     * unset prevodkaDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrevodkaDetail($index)
    {
        unset($this->prevodkaDetail[$index]);
    }

    /**
     * Gets as prevodkaDetail
     *
     * @return \Pohoda\Prevodka\PrevodkaItemType[]
     */
    public function getPrevodkaDetail()
    {
        return $this->prevodkaDetail;
    }

    /**
     * Sets a new prevodkaDetail
     *
     * @param \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaDetail
     * @return self
     */
    public function setPrevodkaDetail(array $prevodkaDetail = null)
    {
        $this->prevodkaDetail = $prevodkaDetail;
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
