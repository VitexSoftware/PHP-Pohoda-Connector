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

namespace Pohoda\Stock;

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
    private ?\Pohoda\Filter\RequestStockActionType $add = null;

    /**
     * Aktualizace dokladu.
     */
    private ?\Pohoda\Filter\RequestStockActionType $update = null;

    /**
     * odstranění dokladu.
     */
    private ?\Pohoda\Filter\RequestStockType $delete = null;

    /**
     * Gets as add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestStockActionType
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
    public function setAdd(?\Pohoda\Filter\RequestStockActionType $add = null)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as update.
     *
     * Aktualizace dokladu.
     *
     * @return \Pohoda\Filter\RequestStockActionType
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Sets a new update.
     *
     * Aktualizace dokladu.
     *
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestStockActionType $update = null)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Gets as delete.
     *
     * odstranění dokladu.
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
     * odstranění dokladu.
     *
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestStockType $delete = null)
    {
        $this->delete = $delete;

        return $this;
    }
}
