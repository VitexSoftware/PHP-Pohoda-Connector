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
 * Class representing FilterMovementType.
 *
 * XSD Type: filterMovementType
 */
class FilterMovementType
{
    /**
     * Filtr podle ID záznamu.
     */
    private ?int $id = null;

    /**
     * Filtr podle skladové zásoby.
     */
    private ?\Pohoda\Type\StockItemMovementType $stockItem = null;

    /**
     * Datum od.
     */
    private ?\DateTime $dateFrom = null;

    /**
     * Datum do.
     */
    private ?\DateTime $dateTill = null;

    /**
     * Typ agendy.
     */
    private ?string $agenda = null;

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
     * Gets as stockItem.
     *
     * Filtr podle skladové zásoby.
     *
     * @return \Pohoda\Type\StockItemMovementType
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
    public function setStockItem(?\Pohoda\Type\StockItemMovementType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as dateFrom.
     *
     * Datum od.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom.
     *
     * Datum od.
     *
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTill.
     *
     * Datum do.
     *
     * @return \DateTime
     */
    public function getDateTill()
    {
        return $this->dateTill;
    }

    /**
     * Sets a new dateTill.
     *
     * Datum do.
     *
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * Typ agendy.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * Typ agendy.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }
}
