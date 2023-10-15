<?php

namespace Pohoda\Documentresponse;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: itemType
 */
class ItemType
{
    /**
     * @var string $actionType
     */
    private $actionType = null;

    /**
     * @var string $extId
     */
    private $extId = null;

    /**
     * Vytvořené položky.
     *
     * @var string[] $producedItem
     */
    private $producedItem = null;

    /**
     * Gets as actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as extId
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param string $extId
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Adds as id
     *
     * Vytvořené položky.
     *
     * @return self
     * @param string $id
     */
    public function addToProducedItem($id)
    {
        $this->producedItem[] = $id;
        return $this;
    }

    /**
     * isset producedItem
     *
     * Vytvořené položky.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducedItem($index)
    {
        return isset($this->producedItem[$index]);
    }

    /**
     * unset producedItem
     *
     * Vytvořené položky.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducedItem($index)
    {
        unset($this->producedItem[$index]);
    }

    /**
     * Gets as producedItem
     *
     * Vytvořené položky.
     *
     * @return string[]
     */
    public function getProducedItem()
    {
        return $this->producedItem;
    }

    /**
     * Sets a new producedItem
     *
     * Vytvořené položky.
     *
     * @param string[] $producedItem
     * @return self
     */
    public function setProducedItem(array $producedItem)
    {
        $this->producedItem = $producedItem;
        return $this;
    }
}
