<?php

namespace Pohoda\Filter;

/**
 * Class representing RecordPrintType
 *
 *
 * XSD Type: recordPrintType
 */
class RecordPrintType
{
    /**
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @var \Pohoda\Filter\FilterIDType $filter
     */
    private $filter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
     *
     * @var string $userFilterName
     */
    private $userFilterName = null;

    /**
     * Gets as agenda
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as filter
     *
     * Seznam polí podle kterých se bude filtrovat.
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
     * Seznam polí podle kterých se bude filtrovat.
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
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
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
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
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
