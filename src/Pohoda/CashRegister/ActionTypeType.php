<?php

namespace Pohoda\CashRegister;

/**
 * Class representing ActionTypeType
 *
 *
 * XSD Type: actionTypeType
 */
class ActionTypeType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @var \Pohoda\Filter\RequestExtIdActionType $add
     */
    private $add = null;

    /**
     * Aktualizace dokladu.
     *
     * @var \Pohoda\Filter\RequestExtIdActionType $update
     */
    private $update = null;

    /**
     * Odstranění dokladu.
     *
     * @var \Pohoda\Filter\RequestExtIdType $delete
     */
    private $delete = null;

    /**
     * Gets as add
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
     * Sets a new add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @param \Pohoda\Filter\RequestExtIdActionType $add
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestExtIdActionType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
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
     * Sets a new update
     *
     * Aktualizace dokladu.
     *
     * @param \Pohoda\Filter\RequestExtIdActionType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestExtIdActionType $update = null)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as delete
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
     * Sets a new delete
     *
     * Odstranění dokladu.
     *
     * @param \Pohoda\Filter\RequestExtIdType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestExtIdType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}

