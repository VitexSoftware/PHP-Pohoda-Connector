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

namespace Pohoda\CashRegister;

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
    private ?\Pohoda\Filter\RequestExtIdActionType $add = null;

    /**
     * Aktualizace dokladu.
     */
    private ?\Pohoda\Filter\RequestExtIdActionType $update = null;

    /**
     * Odstranění dokladu.
     */
    private ?\Pohoda\Filter\RequestExtIdType $delete = null;

    /**
     * Gets as add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestExtIdActionType
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
    public function setAdd(?\Pohoda\Filter\RequestExtIdActionType $add = null)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as update.
     *
     * Aktualizace dokladu.
     *
     * @return \Pohoda\Filter\RequestExtIdActionType
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
    public function setUpdate(?\Pohoda\Filter\RequestExtIdActionType $update = null)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Gets as delete.
     *
     * Odstranění dokladu.
     *
     * @return \Pohoda\Filter\RequestExtIdType
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete.
     *
     * Odstranění dokladu.
     *
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestExtIdType $delete = null)
    {
        $this->delete = $delete;

        return $this;
    }
}
