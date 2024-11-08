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

namespace Pohoda\GroupStocks;

/**
 * Class representing ActionTypeType.
 *
 * XSD Type: actionTypeType
 */
class ActionTypeType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     */
    private ?\Pohoda\Filter\RequestGroupStocksActionType $add = null;

    /**
     * Aktualizace záznamu.
     */
    private ?\Pohoda\Filter\RequestGroupStocksActionType $update = null;

    /**
     * Odstranění záznamu.
     */
    private ?\Pohoda\Filter\RequestGroupStocksType $delete = null;

    /**
     * Gets as add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestGroupStocksActionType
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
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestGroupStocksActionType $add = null)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as update.
     *
     * Aktualizace záznamu.
     *
     * @return \Pohoda\Filter\RequestGroupStocksActionType
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
    public function setUpdate(?\Pohoda\Filter\RequestGroupStocksActionType $update = null)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Gets as delete.
     *
     * Odstranění záznamu.
     *
     * @return \Pohoda\Filter\RequestGroupStocksType
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
    public function setDelete(?\Pohoda\Filter\RequestGroupStocksType $delete = null)
    {
        $this->delete = $delete;

        return $this;
    }
}
