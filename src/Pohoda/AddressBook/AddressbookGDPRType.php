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

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookGDPRType.
 *
 * XSD Type: addressbookGDPRType
 */
class AddressbookGDPRType
{
    /**
     * Omezení zpracování.
     */
    private ?string $restrictProcessing = null;

    /**
     * Datum posledního prodejního dokladu (jen pro export).
     */
    private ?\DateTime $dateSale = null;

    /**
     * Datum posledního předprodejního dokladu (jen pro export).
     */
    private ?\DateTime $datePreSale = null;

    /**
     * Datum posledního poprodejního dokladu (jen pro export).
     */
    private ?\DateTime $dateAfterSale = null;

    /**
     * Právní důvody zpracování dat GDPR.
     *
     * @var \Pohoda\AddressBook\GDPRItemType[]
     */
    private ?array $gDPRItems = null;

    /**
     * Gets as restrictProcessing.
     *
     * Omezení zpracování.
     *
     * @return string
     */
    public function getRestrictProcessing()
    {
        return $this->restrictProcessing;
    }

    /**
     * Sets a new restrictProcessing.
     *
     * Omezení zpracování.
     *
     * @param string $restrictProcessing
     *
     * @return self
     */
    public function setRestrictProcessing($restrictProcessing)
    {
        $this->restrictProcessing = $restrictProcessing;

        return $this;
    }

    /**
     * Gets as dateSale.
     *
     * Datum posledního prodejního dokladu (jen pro export).
     *
     * @return \DateTime
     */
    public function getDateSale()
    {
        return $this->dateSale;
    }

    /**
     * Sets a new dateSale.
     *
     * Datum posledního prodejního dokladu (jen pro export).
     *
     * @return self
     */
    public function setDateSale(?\DateTime $dateSale = null)
    {
        $this->dateSale = $dateSale;

        return $this;
    }

    /**
     * Gets as datePreSale.
     *
     * Datum posledního předprodejního dokladu (jen pro export).
     *
     * @return \DateTime
     */
    public function getDatePreSale()
    {
        return $this->datePreSale;
    }

    /**
     * Sets a new datePreSale.
     *
     * Datum posledního předprodejního dokladu (jen pro export).
     *
     * @return self
     */
    public function setDatePreSale(?\DateTime $datePreSale = null)
    {
        $this->datePreSale = $datePreSale;

        return $this;
    }

    /**
     * Gets as dateAfterSale.
     *
     * Datum posledního poprodejního dokladu (jen pro export).
     *
     * @return \DateTime
     */
    public function getDateAfterSale()
    {
        return $this->dateAfterSale;
    }

    /**
     * Sets a new dateAfterSale.
     *
     * Datum posledního poprodejního dokladu (jen pro export).
     *
     * @return self
     */
    public function setDateAfterSale(?\DateTime $dateAfterSale = null)
    {
        $this->dateAfterSale = $dateAfterSale;

        return $this;
    }

    /**
     * Adds as gDPRItem.
     *
     * Právní důvody zpracování dat GDPR.
     *
     * @return self
     */
    public function addToGDPRItems(\Pohoda\AddressBook\GDPRItemType $gDPRItem)
    {
        $this->gDPRItems[] = $gDPRItem;

        return $this;
    }

    /**
     * isset gDPRItems.
     *
     * Právní důvody zpracování dat GDPR.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPRItems($index)
    {
        return isset($this->gDPRItems[$index]);
    }

    /**
     * unset gDPRItems.
     *
     * Právní důvody zpracování dat GDPR.
     *
     * @param int|string $index
     */
    public function unsetGDPRItems($index): void
    {
        unset($this->gDPRItems[$index]);
    }

    /**
     * Gets as gDPRItems.
     *
     * Právní důvody zpracování dat GDPR.
     *
     * @return \Pohoda\AddressBook\GDPRItemType[]
     */
    public function getGDPRItems()
    {
        return $this->gDPRItems;
    }

    /**
     * Sets a new gDPRItems.
     *
     * Právní důvody zpracování dat GDPR.
     *
     * @param \Pohoda\AddressBook\GDPRItemType[] $gDPRItems
     *
     * @return self
     */
    public function setGDPRItems(?array $gDPRItems = null)
    {
        $this->gDPRItems = $gDPRItems;

        return $this;
    }
}
