<?php

namespace Pohoda\Type;

/**
 * Class representing ActionTypeStockItemType
 *
 *
 * XSD Type: actionTypeStockItem
 */
class ActionTypeStockItemType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @var string $add
     */
    private $add = null;

    /**
     * Aktualizace záznamu.
     *
     * @var \Pohoda\Filter\RequestStockType $update
     */
    private $update = null;

    /**
     * Odstranění záznamu.
     *
     * @var \Pohoda\Filter\RequestStockType $delete
     */
    private $delete = null;

    /**
     * Gets as add
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
     * Sets a new add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @param string $add
     * @return self
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
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
     * Sets a new update
     *
     * Aktualizace záznamu.
     *
     * @param \Pohoda\Filter\RequestStockType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestStockType $update = null)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as delete
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
     * Sets a new delete
     *
     * Odstranění záznamu.
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

