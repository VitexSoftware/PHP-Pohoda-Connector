<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestStockType
 *
 *
 * XSD Type: requestStockType
 */
class RequestStockType
{
    /**
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @var \Pohoda\Filter\FilterStocksType $filter
     */
    private $filter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @var string $userFilterName
     */
    private $userFilterName = null;

    /**
     * Gets as filter
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return \Pohoda\Filter\FilterStocksType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @param \Pohoda\Filter\FilterStocksType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterStocksType $filter = null)
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

