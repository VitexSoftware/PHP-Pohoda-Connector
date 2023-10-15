<?php

namespace Pohoda\Type;

/**
 * Class representing StockPriceType
 *
 *
 * XSD Type: stockPriceType
 */
class StockPriceType
{
    /**
     * Odkaz na ID v SKzCn.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název ceny. IDS v SKzCn.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Cena zásoby.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * Gets as id
     *
     * Odkaz na ID v SKzCn.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Odkaz na ID v SKzCn.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ids
     *
     * Název ceny. IDS v SKzCn.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * Název ceny. IDS v SKzCn.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as price
     *
     * Cena zásoby.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Cena zásoby.
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

