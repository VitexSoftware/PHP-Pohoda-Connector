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
 * Class representing RequestAddressBookType.
 *
 * XSD Type: requestAddressBookType
 */
class RequestAddressBookType
{
    /**
     * Seznam polí podle kterých se budou filtrovat adresy.
     */
    private ?\Pohoda\Filter\FilterAdbsType $filter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     */
    private ?string $userFilterName = null;

    /**
     * Gets as filter.
     *
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @return \Pohoda\Filter\FilterAdbsType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterAdbsType $filter = null)
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
