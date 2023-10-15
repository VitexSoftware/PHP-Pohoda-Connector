<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterIDType
 *
 *
 * XSD Type: filterIDType
 */
class FilterIDType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Gets as id
     *
     * Filtr podle ID záznamu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Filtr podle ID záznamu.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
