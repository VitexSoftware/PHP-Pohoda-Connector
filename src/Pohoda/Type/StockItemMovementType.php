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

namespace Pohoda\Type;

/**
 * Class representing StockItemMovementType.
 *
 * Údaje skladové zásoby pohybů.
 * XSD Type: stockItemMovementType
 */
class StockItemMovementType
{
    /**
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     */
    private ?\Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Filtr podle skladové zásoby.
     */
    private ?\Pohoda\Type\StockItemMovementType\StockItemAType $stockItem = null;

    /**
     * Gets as storage.
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
     * Sets a new storage.
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as stockItem.
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
     * Sets a new stockItem.
     *
     * Filtr podle skladové zásoby.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemMovementType\StockItemAType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }
}
