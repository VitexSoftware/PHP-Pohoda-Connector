<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestMovementType
 *
 *
 * XSD Type: requestMovementType
 */
class RequestMovementType
{
    /**
     * Seznam polí, podle kterých se budou filtrovat záznamy.
     *
     * @var \Pohoda\Filter\FilterMovementType $filter
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
     * Seznam polí, podle kterých se budou filtrovat záznamy.
     *
     * @return \Pohoda\Filter\FilterMovementType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Seznam polí, podle kterých se budou filtrovat záznamy.
     *
     * @param \Pohoda\Filter\FilterMovementType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterMovementType $filter = null)
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

