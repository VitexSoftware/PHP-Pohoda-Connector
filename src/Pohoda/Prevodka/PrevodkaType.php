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

namespace Pohoda\Prevodka;

/**
 * Class representing PrevodkaType.
 *
 * XSD Type: prevodkaType
 */
class PrevodkaType
{
    private ?string $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky.
     */
    private ?\Pohoda\Type\LinksType $links = null;
    private ?\Pohoda\Prevodka\PrevodkaHeaderType $prevodkaHeader = null;

    /**
     * @var \Pohoda\Prevodka\PrevodkaItemType[]
     */
    private ?array $prevodkaDetail = null;

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
     * Gets as links.
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
     * Sets a new links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Přijaté objednávky
     *
     * @return self
     */
    public function setLinks(?\Pohoda\Type\LinksType $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Gets as prevodkaHeader.
     *
     * @return \Pohoda\Prevodka\PrevodkaHeaderType
     */
    public function getPrevodkaHeader()
    {
        return $this->prevodkaHeader;
    }

    /**
     * Sets a new prevodkaHeader.
     *
     * @return self
     */
    public function setPrevodkaHeader(?\Pohoda\Prevodka\PrevodkaHeaderType $prevodkaHeader = null)
    {
        $this->prevodkaHeader = $prevodkaHeader;

        return $this;
    }

    /**
     * Adds as prevodkaItem.
     *
     * @return self
     */
    public function addToPrevodkaDetail(\Pohoda\Prevodka\PrevodkaItemType $prevodkaItem)
    {
        $this->prevodkaDetail[] = $prevodkaItem;

        return $this;
    }

    /**
     * isset prevodkaDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrevodkaDetail($index)
    {
        return isset($this->prevodkaDetail[$index]);
    }

    /**
     * unset prevodkaDetail.
     *
     * @param int|string $index
     */
    public function unsetPrevodkaDetail($index): void
    {
        unset($this->prevodkaDetail[$index]);
    }

    /**
     * Gets as prevodkaDetail.
     *
     * @return \Pohoda\Prevodka\PrevodkaItemType[]
     */
    public function getPrevodkaDetail()
    {
        return $this->prevodkaDetail;
    }

    /**
     * Sets a new prevodkaDetail.
     *
     * @param \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaDetail
     *
     * @return self
     */
    public function setPrevodkaDetail(?array $prevodkaDetail = null)
    {
        $this->prevodkaDetail = $prevodkaDetail;

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
