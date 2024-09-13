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

namespace Pohoda\Prijemka;

/**
 * Class representing PrijemkaType.
 *
 * XSD Type: prijemkaType
 */
class PrijemkaType
{
    private string $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané objednávky.
     */
    private \Pohoda\Type\LinksType $links = null;
    private \Pohoda\Prijemka\PrijemkaHeaderType $prijemkaHeader = null;
    private \Pohoda\Prijemka\PrijemkaDetailType $prijemkaDetail = null;
    private \Pohoda\Prijemka\PrijemkaSummaryType $prijemkaSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     */
    private \Pohoda\Type\LinksType $linkedDocuments = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private array $print = null;

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
     * Gets as links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané objednávky
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané objednávky
     *
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Gets as prijemkaHeader.
     *
     * @return \Pohoda\Prijemka\PrijemkaHeaderType
     */
    public function getPrijemkaHeader()
    {
        return $this->prijemkaHeader;
    }

    /**
     * Sets a new prijemkaHeader.
     *
     * @return self
     */
    public function setPrijemkaHeader(?\Pohoda\Prijemka\PrijemkaHeaderType $prijemkaHeader = null)
    {
        $this->prijemkaHeader = $prijemkaHeader;

        return $this;
    }

    /**
     * Gets as prijemkaDetail.
     *
     * @return \Pohoda\Prijemka\PrijemkaDetailType
     */
    public function getPrijemkaDetail()
    {
        return $this->prijemkaDetail;
    }

    /**
     * Sets a new prijemkaDetail.
     *
     * @return self
     */
    public function setPrijemkaDetail(?\Pohoda\Prijemka\PrijemkaDetailType $prijemkaDetail = null)
    {
        $this->prijemkaDetail = $prijemkaDetail;

        return $this;
    }

    /**
     * Gets as prijemkaSummary.
     *
     * @return \Pohoda\Prijemka\PrijemkaSummaryType
     */
    public function getPrijemkaSummary()
    {
        return $this->prijemkaSummary;
    }

    /**
     * Sets a new prijemkaSummary.
     *
     * @return self
     */
    public function setPrijemkaSummary(?\Pohoda\Prijemka\PrijemkaSummaryType $prijemkaSummary = null)
    {
        $this->prijemkaSummary = $prijemkaSummary;

        return $this;
    }

    /**
     * Gets as linkedDocuments.
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
     * Sets a new linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return self
     */
    public function setLinkedDocuments(?\Pohoda\Type\LinksType $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;

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
