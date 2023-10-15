<?php

namespace Pohoda\Type;

/**
 * Class representing ActionTypeItemAddDeleteType
 *
 *
 * XSD Type: actionTypeItemAddDelete
 */
class ActionTypeItemAddDeleteType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @var string $add
     */
    private $add = null;

    /**
     * Odstranění záznamu.
     *
     * @var \Pohoda\Filter\RequestItemType $delete
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
     * Odstranění záznamu.
     *
     * @return \Pohoda\Filter\RequestItemType
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
     * @param \Pohoda\Filter\RequestItemType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestItemType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}
