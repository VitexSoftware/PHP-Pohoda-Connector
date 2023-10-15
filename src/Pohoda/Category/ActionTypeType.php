<?php

namespace Pohoda\Category;

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
     * @var \Pohoda\Filter\RequestCategoryActionType $add
     */
    private $add = null;

    /**
     * Aktualizace dokladu.
     *
     * @var \Pohoda\Filter\RequestCategoryActionType $update
     */
    private $update = null;

    /**
     * Gets as add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestCategoryActionType
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
     * @param \Pohoda\Filter\RequestCategoryActionType $add
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestCategoryActionType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
     *
     * Aktualizace dokladu.
     *
     * @return \Pohoda\Filter\RequestCategoryActionType
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
     * @param \Pohoda\Filter\RequestCategoryActionType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestCategoryActionType $update = null)
    {
        $this->update = $update;
        return $this;
    }
}
