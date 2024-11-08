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

namespace Pohoda\ListStock;

/**
 * Class representing RestrictionDataType.
 *
 * XSD Type: restrictionDataType
 */
class RestrictionDataType
{
    /**
     * Exportovat záznamy ze záložky Související soubory.
     */
    private ?string $relatedFiles = null;

    /**
     * Exportovat záznamy ze záložky Související odkazy.
     */
    private ?string $relatedLinks = null;

    /**
     * Exportovat záznamy ze záložky Obrázky.
     */
    private ?string $pictures = null;

    /**
     * Exportovat záznamy ze záložky Kategorie.
     */
    private ?string $categories = null;

    /**
     * Exportovat záznamy ze záložky související zboží.
     */
    private ?string $relatedStocks = null;

    /**
     * Exportovat záznamy ze záložky Alternativní zboží.
     */
    private ?string $alternativeStocks = null;

    /**
     * Exportovat záznamy ze záložky Parametry.
     */
    private ?string $intParameters = null;

    /**
     * Exportovat položky zásoby.
     */
    private ?string $stockItem = null;

    /**
     * Exportovat svázané zásoby.
     */
    private ?string $stockAttach = null;

    /**
     * Exportovat evidenční čísla.
     */
    private ?string $stockSerialNumber = null;

    /**
     * Exportovat prodejní ceny.
     */
    private ?string $stockPriceItem = null;

    /**
     * Exportovat volitelné parametry.
     */
    private ?string $stockParameters = null;

    /**
     * Gets as relatedFiles.
     *
     * Exportovat záznamy ze záložky Související soubory.
     *
     * @return string
     */
    public function getRelatedFiles()
    {
        return $this->relatedFiles;
    }

    /**
     * Sets a new relatedFiles.
     *
     * Exportovat záznamy ze záložky Související soubory.
     *
     * @param string $relatedFiles
     *
     * @return self
     */
    public function setRelatedFiles($relatedFiles)
    {
        $this->relatedFiles = $relatedFiles;

        return $this;
    }

    /**
     * Gets as relatedLinks.
     *
     * Exportovat záznamy ze záložky Související odkazy.
     *
     * @return string
     */
    public function getRelatedLinks()
    {
        return $this->relatedLinks;
    }

    /**
     * Sets a new relatedLinks.
     *
     * Exportovat záznamy ze záložky Související odkazy.
     *
     * @param string $relatedLinks
     *
     * @return self
     */
    public function setRelatedLinks($relatedLinks)
    {
        $this->relatedLinks = $relatedLinks;

        return $this;
    }

    /**
     * Gets as pictures.
     *
     * Exportovat záznamy ze záložky Obrázky.
     *
     * @return string
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets a new pictures.
     *
     * Exportovat záznamy ze záložky Obrázky.
     *
     * @param string $pictures
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Gets as categories.
     *
     * Exportovat záznamy ze záložky Kategorie
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories.
     *
     * Exportovat záznamy ze záložky Kategorie
     *
     * @param string $categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Gets as relatedStocks.
     *
     * Exportovat záznamy ze záložky související zboží.
     *
     * @return string
     */
    public function getRelatedStocks()
    {
        return $this->relatedStocks;
    }

    /**
     * Sets a new relatedStocks.
     *
     * Exportovat záznamy ze záložky související zboží.
     *
     * @param string $relatedStocks
     *
     * @return self
     */
    public function setRelatedStocks($relatedStocks)
    {
        $this->relatedStocks = $relatedStocks;

        return $this;
    }

    /**
     * Gets as alternativeStocks.
     *
     * Exportovat záznamy ze záložky Alternativní zboží.
     *
     * @return string
     */
    public function getAlternativeStocks()
    {
        return $this->alternativeStocks;
    }

    /**
     * Sets a new alternativeStocks.
     *
     * Exportovat záznamy ze záložky Alternativní zboží.
     *
     * @param string $alternativeStocks
     *
     * @return self
     */
    public function setAlternativeStocks($alternativeStocks)
    {
        $this->alternativeStocks = $alternativeStocks;

        return $this;
    }

    /**
     * Gets as intParameters.
     *
     * Exportovat záznamy ze záložky Parametry.
     *
     * @return string
     */
    public function getIntParameters()
    {
        return $this->intParameters;
    }

    /**
     * Sets a new intParameters.
     *
     * Exportovat záznamy ze záložky Parametry.
     *
     * @param string $intParameters
     *
     * @return self
     */
    public function setIntParameters($intParameters)
    {
        $this->intParameters = $intParameters;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Exportovat položky zásoby.
     *
     * @return string
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Exportovat položky zásoby.
     *
     * @param string $stockItem
     *
     * @return self
     */
    public function setStockItem($stockItem)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as stockAttach.
     *
     * Exportovat svázané zásoby.
     *
     * @return string
     */
    public function getStockAttach()
    {
        return $this->stockAttach;
    }

    /**
     * Sets a new stockAttach.
     *
     * Exportovat svázané zásoby.
     *
     * @param string $stockAttach
     *
     * @return self
     */
    public function setStockAttach($stockAttach)
    {
        $this->stockAttach = $stockAttach;

        return $this;
    }

    /**
     * Gets as stockSerialNumber.
     *
     * Exportovat evidenční čísla.
     *
     * @return string
     */
    public function getStockSerialNumber()
    {
        return $this->stockSerialNumber;
    }

    /**
     * Sets a new stockSerialNumber.
     *
     * Exportovat evidenční čísla.
     *
     * @param string $stockSerialNumber
     *
     * @return self
     */
    public function setStockSerialNumber($stockSerialNumber)
    {
        $this->stockSerialNumber = $stockSerialNumber;

        return $this;
    }

    /**
     * Gets as stockPriceItem.
     *
     * Exportovat prodejní ceny.
     *
     * @return string
     */
    public function getStockPriceItem()
    {
        return $this->stockPriceItem;
    }

    /**
     * Sets a new stockPriceItem.
     *
     * Exportovat prodejní ceny.
     *
     * @param string $stockPriceItem
     *
     * @return self
     */
    public function setStockPriceItem($stockPriceItem)
    {
        $this->stockPriceItem = $stockPriceItem;

        return $this;
    }

    /**
     * Gets as stockParameters.
     *
     * Exportovat volitelné parametry.
     *
     * @return string
     */
    public function getStockParameters()
    {
        return $this->stockParameters;
    }

    /**
     * Sets a new stockParameters.
     *
     * Exportovat volitelné parametry.
     *
     * @param string $stockParameters
     *
     * @return self
     */
    public function setStockParameters($stockParameters)
    {
        $this->stockParameters = $stockParameters;

        return $this;
    }
}
