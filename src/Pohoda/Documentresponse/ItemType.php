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

namespace Pohoda\Documentresponse;

/**
 * Class representing ItemType.
 *
 * XSD Type: itemType
 */
class ItemType
{
    private string $actionType = null;
    private string $extId = null;

    /**
     * Vytvořené položky.
     *
     * @var string[]
     */
    private array $producedItem = null;

    /**
     * Gets as actionType.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * @param string $actionType
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Adds as id.
     *
     * Vytvořené položky.
     *
     * @param string $id
     *
     * @return self
     */
    public function addToProducedItem($id)
    {
        $this->producedItem[] = $id;

        return $this;
    }

    /**
     * isset producedItem.
     *
     * Vytvořené položky.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProducedItem($index)
    {
        return isset($this->producedItem[$index]);
    }

    /**
     * unset producedItem.
     *
     * Vytvořené položky.
     *
     * @param int|string $index
     */
    public function unsetProducedItem($index): void
    {
        unset($this->producedItem[$index]);
    }

    /**
     * Gets as producedItem.
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
     * Sets a new producedItem.
     *
     * Vytvořené položky.
     *
     * @param string[] $producedItem
     *
     * @return self
     */
    public function setProducedItem(array $producedItem)
    {
        $this->producedItem = $producedItem;

        return $this;
    }
}
