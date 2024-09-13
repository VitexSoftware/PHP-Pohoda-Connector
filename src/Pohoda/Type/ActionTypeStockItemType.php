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
 * Class representing ActionTypeStockItemType.
 *
 * XSD Type: actionTypeStockItem
 */
class ActionTypeStockItemType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     */
    private string $add = null;

    /**
     * Aktualizace záznamu.
     */
    private \Pohoda\Filter\RequestStockType $update = null;

    /**
     * Odstranění záznamu.
     */
    private \Pohoda\Filter\RequestStockType $delete = null;

    /**
     * Gets as add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return string
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Sets a new add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @param string $add
     *
     * @return self
     */
    public function setAdd($add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as update.
     *
     * Aktualizace záznamu.
     *
     * @return \Pohoda\Filter\RequestStockType
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Sets a new update.
     *
     * Aktualizace záznamu.
     *
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestStockType $update = null)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Gets as delete.
     *
     * Odstranění záznamu.
     *
     * @return \Pohoda\Filter\RequestStockType
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete.
     *
     * Odstranění záznamu.
     *
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestStockType $delete = null)
    {
        $this->delete = $delete;

        return $this;
    }
}
