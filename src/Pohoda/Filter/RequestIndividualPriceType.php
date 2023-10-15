<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestIndividualPriceType
 *
 *
 * XSD Type: requestIndividualPriceType
 */
class RequestIndividualPriceType
{
    /**
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @var \Pohoda\Filter\FilterIndividualPriceType $filter
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
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @return \Pohoda\Filter\FilterIndividualPriceType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @param \Pohoda\Filter\FilterIndividualPriceType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterIndividualPriceType $filter = null)
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

