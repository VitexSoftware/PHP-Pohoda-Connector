<?php

namespace Pohoda\Filter;

/**
 * Class representing RequestExtIdType
 *
 *
 * XSD Type: requestExtIdType
 */
class RequestExtIdType
{
    /**
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @var \Pohoda\Filter\FilterExtIdType $filter
     */
    private $filter = null;

    /**
     * Gets as filter
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return \Pohoda\Filter\FilterExtIdType
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
     * @param \Pohoda\Filter\FilterExtIdType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterExtIdType $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }
}

