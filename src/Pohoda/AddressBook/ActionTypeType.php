<?php

namespace Pohoda\AddressBook;

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
     * @var \Pohoda\Filter\RequestAddressBookActionType $add
     */
    private $add = null;

    /**
     * Aktualizace dokladu.
     *
     * @var \Pohoda\Filter\RequestAddressBookActionType $update
     */
    private $update = null;

    /**
     * Odstranění dokladu.
     *
     * @var \Pohoda\Filter\RequestAddressBookType $delete
     */
    private $delete = null;

    /**
     * Gets as add
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestAddressBookActionType
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
     * @param \Pohoda\Filter\RequestAddressBookActionType $add
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestAddressBookActionType $add = null)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Gets as update
     *
     * Aktualizace dokladu.
     *
     * @return \Pohoda\Filter\RequestAddressBookActionType
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
     * @param \Pohoda\Filter\RequestAddressBookActionType $update
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestAddressBookActionType $update = null)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as delete
     *
     * Odstranění dokladu.
     *
     * @return \Pohoda\Filter\RequestAddressBookType
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
     * @param \Pohoda\Filter\RequestAddressBookType $delete
     * @return self
     */
    public function setDelete(?\Pohoda\Filter\RequestAddressBookType $delete = null)
    {
        $this->delete = $delete;
        return $this;
    }
}
