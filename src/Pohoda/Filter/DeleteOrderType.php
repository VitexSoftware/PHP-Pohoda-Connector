<?php

namespace Pohoda\Filter;

/**
 * Class representing DeleteOrderType
 *
 *
 * XSD Type: deleteOrderType
 */
class DeleteOrderType
{
    /**
     * Filtr pro výběr dokladu ke smazání.
     *
     * @var \Pohoda\Filter\FilterDocsDeleteType $filter
     */
    private $filter = null;

    /**
     * Gets as filter
     *
     * Filtr pro výběr dokladu ke smazání.
     *
     * @return \Pohoda\Filter\FilterDocsDeleteType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * Filtr pro výběr dokladu ke smazání.
     *
     * @param \Pohoda\Filter\FilterDocsDeleteType $filter
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterDocsDeleteType $filter = null)
    {
        $this->filter = $filter;
        return $this;
    }
}

