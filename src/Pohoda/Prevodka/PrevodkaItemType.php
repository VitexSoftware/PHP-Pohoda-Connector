<?php

namespace Pohoda\Prevodka;

/**
 * Class representing PrevodkaItemType
 *
 *
 * XSD Type: prevodkaItemType
 */
class PrevodkaItemType
{
    /**
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadanách parametrů u dokladu.
     *
     * @var \Pohoda\Type\LinkItemType $link
     */
    private $link = null;

    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Volitelné parametry.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as link
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadanách parametrů u dokladu.
     *
     * @return \Pohoda\Type\LinkItemType
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadanách parametrů u dokladu.
     *
     * @param \Pohoda\Type\LinkItemType $link
     * @return self
     */
    public function setLink(?\Pohoda\Type\LinkItemType $link = null)
    {
        $this->link = $link;
        return $this;
    }

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
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
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
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
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
     * Adds as parameter
     *
     * Volitelné parametry.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * Volitelné parametry.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Volitelné parametry.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
