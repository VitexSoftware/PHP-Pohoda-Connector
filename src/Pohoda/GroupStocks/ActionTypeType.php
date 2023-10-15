<?php

namespace Pohoda\GroupStocks;

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
     * @var \Pohoda\Filter\RequestGroupStocksActionType $add
     */
    private $add = null;

    /**
     * Aktualizace záznamu.
     *
     * @var \Pohoda\Filter\RequestGroupStocksActionType $update
     */
    private $update = null;

    /**
     * Odstranění záznamu.
     *
     * @var \Pohoda\Filter\RequestGroupStocksType $delete
     */
    private $delete = null;

    /**
     * Gets as add
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
     * Sets a new add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @param \Pohoda\Filter\RequestGroupStocksActionType $add
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestGroupStocksActionType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
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
     * Sets a new update
     *
     * Aktualizace záznamu.
     *
     * @param \Pohoda\Filter\RequestGroupStocksActionType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestGroupStocksActionType $update = null)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as delete
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
     * Sets a new delete
     *
     * Odstranění záznamu.
     *
     * @param \Pohoda\Filter\RequestGroupStocksType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestGroupStocksType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}

