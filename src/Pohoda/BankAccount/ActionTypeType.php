<?php

namespace Pohoda\BankAccount;

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
}
