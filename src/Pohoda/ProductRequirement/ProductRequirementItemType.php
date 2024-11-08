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

namespace Pohoda\ProductRequirement;

/**
 * Class representing ProductRequirementItemType.
 *
 * XSD Type: productRequirementItemType
 */
class ProductRequirementItemType
{
    /**
     * Množství.
     */
    private ?float $quantity = null;

    /**
     * Přeneseno (Vyrobeno). Pouze pro export.
     */
    private ?float $produced = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     */
    private ?\Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Datum expirace.
     */
    private ?\DateTime $expirationDate = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as quantity.
     *
     * Množství.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity.
     *
     * Množství.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as produced.
     *
     * Přeneseno (Vyrobeno). Pouze pro export.
     *
     * @return float
     */
    public function getProduced()
    {
        return $this->produced;
    }

    /**
     * Sets a new produced.
     *
     * Přeneseno (Vyrobeno). Pouze pro export.
     *
     * @param float $produced
     *
     * @return self
     */
    public function setProduced($produced)
    {
        $this->produced = $produced;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as expirationDate.
     *
     * Datum expirace.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate.
     *
     * Datum expirace.
     *
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Poznámka.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }
}
