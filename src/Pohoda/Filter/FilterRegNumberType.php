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

namespace Pohoda\Filter;

/**
 * Class representing FilterRegNumberType.
 *
 * XSD Type: filterRegNumberType
 */
class FilterRegNumberType
{
    /**
     * Filtr podle ID záznamu.
     */
    private ?int $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Filtr podle evidenčního čísla.
     */
    private ?string $regNumber = null;

    /**
     * Filtr podle skladové zásoby.
     */
    private ?\Pohoda\Type\StockItemRegNumberType $stockItem = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.
     */
    private ?\DateTime $lastChanges = null;

    /**
     * Gets as id.
     *
     * Filtr podle ID záznamu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * Filtr podle ID záznamu.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as regNumber.
     *
     * Filtr podle evidenčního čísla.
     *
     * @return string
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Sets a new regNumber.
     *
     * Filtr podle evidenčního čísla.
     *
     * @param string $regNumber
     *
     * @return self
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Filtr podle skladové zásoby.
     *
     * @return \Pohoda\Type\StockItemRegNumberType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Filtr podle skladové zásoby.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemRegNumberType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as lastChanges.
     *
     * Vyexportuje záznamy změněné od zadaného data.
     *
     * @return \DateTime
     */
    public function getLastChanges()
    {
        return $this->lastChanges;
    }

    /**
     * Sets a new lastChanges.
     *
     * Vyexportuje záznamy změněné od zadaného data.
     *
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;

        return $this;
    }
}
