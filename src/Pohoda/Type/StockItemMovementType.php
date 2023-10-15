<?php

namespace Pohoda\Type;

/**
 * Class representing StockItemMovementType
 *
 * Údaje skladové zásoby pohybů.
 * XSD Type: stockItemMovementType
 */
class StockItemMovementType
{
    /**
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @var \Pohoda\Type\RefTypeStorageType $storage
     */
    private $storage = null;

    /**
     * Filtr podle skladové zásoby.
     *
     * @var \Pohoda\Type\StockItemMovementType\StockItemAType $stockItem
     */
    private $stockItem = null;

    /**
     * Gets as storage
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @param \Pohoda\Type\RefTypeStorageType $storage
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Filtr podle skladové zásoby.
     *
     * @return \Pohoda\Type\StockItemMovementType\StockItemAType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Filtr podle skladové zásoby.
     *
     * @param \Pohoda\Type\StockItemMovementType\StockItemAType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemMovementType\StockItemAType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }
}
