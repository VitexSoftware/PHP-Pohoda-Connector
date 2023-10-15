<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestExtIdActionType
 *
 *
 * XSD Type: requestExtIdActionType
 */
class RequestExtIdActionType extends RequestExtIdType
{
    /**
     * Pokud je hodnota nastavená na 'true', pak se v případě nalezení stejného záznamu v programu POHODA, provede jeho aktualizace. Pokud je hodnota nastavena na 'false', tak se v případě výskytu stejného záznamu nic neprovede.
     *
     * @var string $update
     */
    private $update = null;

    /**
     * Pokud je hodnota nastavená na 'true', pak se v případě nenalezení stejného záznamu v programu POHODA, provede jeho import. Pokud je hodnota nastavena na 'false', tak se v případě nenalezení stejného záznamu nic neprovede.
     *
     * @var string $add
     */
    private $add = null;

    /**
     * Gets as update
     *
     * Pokud je hodnota nastavená na 'true', pak se v případě nalezení stejného záznamu v programu POHODA, provede jeho aktualizace. Pokud je hodnota nastavena na 'false', tak se v případě výskytu stejného záznamu nic neprovede.
     *
     * @return string
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Sets a new update
     *
     * Pokud je hodnota nastavená na 'true', pak se v případě nalezení stejného záznamu v programu POHODA, provede jeho aktualizace. Pokud je hodnota nastavena na 'false', tak se v případě výskytu stejného záznamu nic neprovede.
     *
     * @param string $update
     * @return self
     */
    public function setUpdate($update)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * Gets as add
     *
     * Pokud je hodnota nastavená na 'true', pak se v případě nenalezení stejného záznamu v programu POHODA, provede jeho import. Pokud je hodnota nastavena na 'false', tak se v případě nenalezení stejného záznamu nic neprovede.
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
     * Pokud je hodnota nastavená na 'true', pak se v případě nenalezení stejného záznamu v programu POHODA, provede jeho import. Pokud je hodnota nastavena na 'false', tak se v případě nenalezení stejného záznamu nic neprovede.
     *
     * @param string $add
     * @return self
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }
}
