<?php

namespace Pohoda\Vydejka;

/**
 * Class representing VydejkaType
 *
 *
 * XSD Type: vydejkaType
 */
class VydejkaType
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
     *  - Vydané faktury
     *
     * @var \Pohoda\Type\LinksType $links
     */
    private $links = null;

    /**
     * @var \Pohoda\Vydejka\VydejkaHeaderType $vydejkaHeader
     */
    private $vydejkaHeader = null;

    /**
     * @var \Pohoda\Vydejka\VydejkaDetailType $vydejkaDetail
     */
    private $vydejkaDetail = null;

    /**
     * @var \Pohoda\Vydejka\VydejkaSummaryType $vydejkaSummary
     */
    private $vydejkaSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType $linkedDocuments
     */
    private $linkedDocuments = null;

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
     *  - Vydané faktury
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
     *  - Vydané faktury
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
     * Gets as vydejkaHeader
     *
     * @return \Pohoda\Vydejka\VydejkaHeaderType
     */
    public function getVydejkaHeader()
    {
        return $this->vydejkaHeader;
    }

    /**
     * Sets a new vydejkaHeader
     *
     * @param \Pohoda\Vydejka\VydejkaHeaderType $vydejkaHeader
     * @return self
     */
    public function setVydejkaHeader(?\Pohoda\Vydejka\VydejkaHeaderType $vydejkaHeader = null)
    {
        $this->vydejkaHeader = $vydejkaHeader;
        return $this;
    }

    /**
     * Gets as vydejkaDetail
     *
     * @return \Pohoda\Vydejka\VydejkaDetailType
     */
    public function getVydejkaDetail()
    {
        return $this->vydejkaDetail;
    }

    /**
     * Sets a new vydejkaDetail
     *
     * @param \Pohoda\Vydejka\VydejkaDetailType $vydejkaDetail
     * @return self
     */
    public function setVydejkaDetail(?\Pohoda\Vydejka\VydejkaDetailType $vydejkaDetail = null)
    {
        $this->vydejkaDetail = $vydejkaDetail;
        return $this;
    }

    /**
     * Gets as vydejkaSummary
     *
     * @return \Pohoda\Vydejka\VydejkaSummaryType
     */
    public function getVydejkaSummary()
    {
        return $this->vydejkaSummary;
    }

    /**
     * Sets a new vydejkaSummary
     *
     * @param \Pohoda\Vydejka\VydejkaSummaryType $vydejkaSummary
     * @return self
     */
    public function setVydejkaSummary(?\Pohoda\Vydejka\VydejkaSummaryType $vydejkaSummary = null)
    {
        $this->vydejkaSummary = $vydejkaSummary;
        return $this;
    }

    /**
     * Gets as linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinkedDocuments()
    {
        return $this->linkedDocuments;
    }

    /**
     * Sets a new linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @param \Pohoda\Type\LinksType $linkedDocuments
     * @return self
     */
    public function setLinkedDocuments(?\Pohoda\Type\LinksType $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;
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

