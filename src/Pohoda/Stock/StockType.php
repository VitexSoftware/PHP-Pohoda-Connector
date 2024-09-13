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

namespace Pohoda\Stock;

/**
 * Class representing StockType.
 *
 * XSD Type: stockType
 */
class StockType
{
    private string $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private \Pohoda\Stock\ActionTypeType $actionType = null;
    private \Pohoda\Stock\StockHeaderType $stockHeader = null;

    /**
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @var \Pohoda\Stock\StockItemType[]
     */
    private array $stockDetail = null;

    /**
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @var \Pohoda\Stock\AttachItemType[]
     */
    private array $stockAttach = null;

    /**
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @var \Pohoda\Stock\SerialNumberItemType[]
     */
    private array $stockSerialNumber = null;

    /**
     * Slevy.
     *
     * @var \Pohoda\Type\StockPriceType[]
     */
    private array $stockPriceItem = null;

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
     * Gets as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Stock\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Stock\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as stockHeader.
     *
     * @return \Pohoda\Stock\StockHeaderType
     */
    public function getStockHeader()
    {
        return $this->stockHeader;
    }

    /**
     * Sets a new stockHeader.
     *
     * @return self
     */
    public function setStockHeader(?\Pohoda\Stock\StockHeaderType $stockHeader = null)
    {
        $this->stockHeader = $stockHeader;

        return $this;
    }

    /**
     * Adds as stockItem.
     *
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @return self
     */
    public function addToStockDetail(\Pohoda\Stock\StockItemType $stockItem)
    {
        $this->stockDetail[] = $stockItem;

        return $this;
    }

    /**
     * isset stockDetail.
     *
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockDetail($index)
    {
        return isset($this->stockDetail[$index]);
    }

    /**
     * unset stockDetail.
     *
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @param int|string $index
     */
    public function unsetStockDetail($index): void
    {
        unset($this->stockDetail[$index]);
    }

    /**
     * Gets as stockDetail.
     *
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @return \Pohoda\Stock\StockItemType[]
     */
    public function getStockDetail()
    {
        return $this->stockDetail;
    }

    /**
     * Sets a new stockDetail.
     *
     * Položky zásob u typů karta, služba, textová nebo výrobek (jen pro export).
     *
     * @param \Pohoda\Stock\StockItemType[] $stockDetail
     *
     * @return self
     */
    public function setStockDetail(?array $stockDetail = null)
    {
        $this->stockDetail = $stockDetail;

        return $this;
    }

    /**
     * Adds as attachItem.
     *
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @return self
     */
    public function addToStockAttach(\Pohoda\Stock\AttachItemType $attachItem)
    {
        $this->stockAttach[] = $attachItem;

        return $this;
    }

    /**
     * isset stockAttach.
     *
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockAttach($index)
    {
        return isset($this->stockAttach[$index]);
    }

    /**
     * unset stockAttach.
     *
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @param int|string $index
     */
    public function unsetStockAttach($index): void
    {
        unset($this->stockAttach[$index]);
    }

    /**
     * Gets as stockAttach.
     *
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @return \Pohoda\Stock\AttachItemType[]
     */
    public function getStockAttach()
    {
        return $this->stockAttach;
    }

    /**
     * Sets a new stockAttach.
     *
     * Svázané zásoby. Jako svázanou zásobu nelze vložit skladovou zásobu typu Komplet a Souprava (jen pro export).
     *
     * @param \Pohoda\Stock\AttachItemType[] $stockAttach
     *
     * @return self
     */
    public function setStockAttach(?array $stockAttach = null)
    {
        $this->stockAttach = $stockAttach;

        return $this;
    }

    /**
     * Adds as serialNumberItem.
     *
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @return self
     */
    public function addToStockSerialNumber(\Pohoda\Stock\SerialNumberItemType $serialNumberItem)
    {
        $this->stockSerialNumber[] = $serialNumberItem;

        return $this;
    }

    /**
     * isset stockSerialNumber.
     *
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockSerialNumber($index)
    {
        return isset($this->stockSerialNumber[$index]);
    }

    /**
     * unset stockSerialNumber.
     *
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @param int|string $index
     */
    public function unsetStockSerialNumber($index): void
    {
        unset($this->stockSerialNumber[$index]);
    }

    /**
     * Gets as stockSerialNumber.
     *
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @return \Pohoda\Stock\SerialNumberItemType[]
     */
    public function getStockSerialNumber()
    {
        return $this->stockSerialNumber;
    }

    /**
     * Sets a new stockSerialNumber.
     *
     * Výrobní čísla nebo šarže zásoby (jen pro export).
     *
     * @param \Pohoda\Stock\SerialNumberItemType[] $stockSerialNumber
     *
     * @return self
     */
    public function setStockSerialNumber(?array $stockSerialNumber = null)
    {
        $this->stockSerialNumber = $stockSerialNumber;

        return $this;
    }

    /**
     * Adds as stockPrice.
     *
     * Slevy.
     *
     * @return self
     */
    public function addToStockPriceItem(\Pohoda\Type\StockPriceType $stockPrice)
    {
        $this->stockPriceItem[] = $stockPrice;

        return $this;
    }

    /**
     * isset stockPriceItem.
     *
     * Slevy.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockPriceItem($index)
    {
        return isset($this->stockPriceItem[$index]);
    }

    /**
     * unset stockPriceItem.
     *
     * Slevy.
     *
     * @param int|string $index
     */
    public function unsetStockPriceItem($index): void
    {
        unset($this->stockPriceItem[$index]);
    }

    /**
     * Gets as stockPriceItem.
     *
     * Slevy.
     *
     * @return \Pohoda\Type\StockPriceType[]
     */
    public function getStockPriceItem()
    {
        return $this->stockPriceItem;
    }

    /**
     * Sets a new stockPriceItem.
     *
     * Slevy.
     *
     * @param \Pohoda\Type\StockPriceType[] $stockPriceItem
     *
     * @return self
     */
    public function setStockPriceItem(?array $stockPriceItem = null)
    {
        $this->stockPriceItem = $stockPriceItem;

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
