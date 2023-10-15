<?php

namespace Pohoda\Order;

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
     * @var string $add
     */
    private $add = null;

    /**
     * odstranění dokladu.
     *
     * @var \Pohoda\Filter\DeleteOrderType $delete
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
     * Gets as delete
     *
     * odstranění dokladu.
     *
     * @return \Pohoda\Filter\DeleteOrderType
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
     * @param \Pohoda\Filter\DeleteOrderType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\DeleteOrderType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}

