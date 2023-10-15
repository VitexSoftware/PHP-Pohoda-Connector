<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestCategoryActionType
 *
 *
 * XSD Type: requestCategoryActionType
 */
class RequestCategoryActionType
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
     * Seznam polí, podle kterých se budou filtrovat doklady.
     *
     * @var \Pohoda\Filter\FilterIDType $filter
     */
    private $filter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @var string $userFilterName
     */
    private $userFilterName = null;

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

    /**
     * Gets as filter
     *
     * Seznam polí, podle kterých se budou filtrovat doklady.
     *
     * @return \Pohoda\Filter\FilterIDType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Seznam polí, podle kterých se budou filtrovat doklady.
     *
     * @param \Pohoda\Filter\FilterIDType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterIDType $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Gets as userFilterName
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @return string
     */
    public function getUserFilterName()
    {
        return $this->userFilterName;
    }

    /**
     * Sets a new userFilterName
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @param string $userFilterName
     * @return self
     */
    public function setUserFilterName($userFilterName)
    {
        $this->userFilterName = $userFilterName;
        return $this;
    }
}

