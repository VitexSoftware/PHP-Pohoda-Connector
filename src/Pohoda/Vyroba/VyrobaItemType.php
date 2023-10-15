<?php

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaItemType
 *
 *
 * XSD Type: vyrobaItemType
 */
class VyrobaItemType
{
    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Datum expirace.
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @var \Pohoda\Vyroba\ProductionListItemType[] $productionList
     */
    private $productionList = null;

    /**
     * Gets as quantity
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
     * Sets a new quantity
     *
     * Množství.
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky.
     *
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as expirationDate
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
     * Sets a new expirationDate
     *
     * Datum expirace.
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as note
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
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as productionListItem
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @return self
     * @param \Pohoda\Vyroba\ProductionListItemType $productionListItem
     */
    public function addToProductionList(\Pohoda\Vyroba\ProductionListItemType $productionListItem)
    {
        $this->productionList[] = $productionListItem;
        return $this;
    }

    /**
     * isset productionList
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionList($index)
    {
        return isset($this->productionList[$index]);
    }

    /**
     * unset productionList
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionList($index)
    {
        unset($this->productionList[$index]);
    }

    /**
     * Gets as productionList
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @return \Pohoda\Vyroba\ProductionListItemType[]
     */
    public function getProductionList()
    {
        return $this->productionList;
    }

    /**
     * Sets a new productionList
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param \Pohoda\Vyroba\ProductionListItemType[] $productionList
     * @return self
     */
    public function setProductionList(array $productionList = null)
    {
        $this->productionList = $productionList;
        return $this;
    }
}

