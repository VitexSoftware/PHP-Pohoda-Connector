<?php

namespace Pohoda\Stock;

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
     * @var \Pohoda\Filter\RequestStockActionType $add
     */
    private $add = null;

    /**
     * Aktualizace dokladu.
     *
     * @var \Pohoda\Filter\RequestStockActionType $update
     */
    private $update = null;

    /**
     * odstranění dokladu.
     *
     * @var \Pohoda\Filter\RequestStockType $delete
     */
    private $delete = null;

    /**
     * Gets as add
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
     * Sets a new add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @param \Pohoda\Filter\RequestStockActionType $add
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestStockActionType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
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
     * Sets a new update
     *
     * Aktualizace dokladu.
     *
     * @param \Pohoda\Filter\RequestStockActionType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestStockActionType $update = null)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as delete
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
     * Sets a new delete
     *
     * odstranění dokladu.
     *
     * @param \Pohoda\Filter\RequestStockType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestStockType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}

