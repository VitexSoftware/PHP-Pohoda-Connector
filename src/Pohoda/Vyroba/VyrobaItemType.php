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

namespace Pohoda\Vyroba;

/**
 * Class representing VyrobaItemType.
 *
 * XSD Type: vyrobaItemType
 */
class VyrobaItemType
{
    /**
     * Množství.
     */
    private float $quantity = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky.
     */
    private \Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Datum expirace.
     */
    private \DateTime $expirationDate = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @var \Pohoda\Vyroba\ProductionListItemType[]
     */
    private array $productionList = null;

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
     * Gets as stockItem.
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
     * Sets a new stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky.
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

    /**
     * Adds as productionListItem.
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @return self
     */
    public function addToProductionList(\Pohoda\Vyroba\ProductionListItemType $productionListItem)
    {
        $this->productionList[] = $productionListItem;

        return $this;
    }

    /**
     * isset productionList.
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductionList($index)
    {
        return isset($this->productionList[$index]);
    }

    /**
     * unset productionList.
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param int|string $index
     */
    public function unsetProductionList($index): void
    {
        unset($this->productionList[$index]);
    }

    /**
     * Gets as productionList.
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
     * Sets a new productionList.
     *
     * Položky výrobku (Výrobní list). Není-li element uveden, použije se definice výrobku v agendě Zásoby. Export elementu je podmíněn atributem "lst:productionList". Pouze POHODA E1.
     *
     * @param \Pohoda\Vyroba\ProductionListItemType[] $productionList
     *
     * @return self
     */
    public function setProductionList(?array $productionList = null)
    {
        $this->productionList = $productionList;

        return $this;
    }
}
