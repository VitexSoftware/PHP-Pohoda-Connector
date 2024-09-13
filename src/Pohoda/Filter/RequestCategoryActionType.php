<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Filter;

/**
 * Class representing RequestCategoryActionType.
 *
 * XSD Type: requestCategoryActionType
 */
class RequestCategoryActionType
{
    /**
     * Pokud je hodnota nastavená na 'true', pak se v případě nalezení stejného záznamu v programu POHODA, provede jeho aktualizace. Pokud je hodnota nastavena na 'false', tak se v případě výskytu stejného záznamu nic neprovede.
     */
    private string $update = null;

    /**
     * Pokud je hodnota nastavená na 'true', pak se v případě nenalezení stejného záznamu v programu POHODA, provede jeho import. Pokud je hodnota nastavena na 'false', tak se v případě nenalezení stejného záznamu nic neprovede.
     */
    private string $add = null;

    /**
     * Seznam polí, podle kterých se budou filtrovat doklady.
     */
    private \Pohoda\Filter\FilterIDType $filter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     */
    private string $userFilterName = null;

    /**
     * Gets as update.
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
     * Sets a new update.
     *
     * Pokud je hodnota nastavená na 'true', pak se v případě nalezení stejného záznamu v programu POHODA, provede jeho aktualizace. Pokud je hodnota nastavena na 'false', tak se v případě výskytu stejného záznamu nic neprovede.
     *
     * @param string $update
     *
     * @return self
     */
    public function setUpdate($update)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Gets as add.
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
     * Sets a new add.
     *
     * Pokud je hodnota nastavená na 'true', pak se v případě nenalezení stejného záznamu v programu POHODA, provede jeho import. Pokud je hodnota nastavena na 'false', tak se v případě nenalezení stejného záznamu nic neprovede.
     *
     * @param string $add
     *
     * @return self
     */
    public function setAdd($add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as filter.
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
     * Sets a new filter.
     *
     * Seznam polí, podle kterých se budou filtrovat doklady.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterIDType $filter = null)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Gets as userFilterName.
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
     * Sets a new userFilterName.
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @param string $userFilterName
     *
     * @return self
     */
    public function setUserFilterName($userFilterName)
    {
        $this->userFilterName = $userFilterName;

        return $this;
    }
}
