<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterGroupStockType
 *
 *
 * XSD Type: filterGroupStockType
 */
class FilterGroupStockType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Filtr dle kódu skupiny zásoby.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Filtr dle pole "Název" skupiny zásoby.
     *
     * @var string $name
     */
    private $name = null;

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

    /**
     * Gets as code
     *
     * Filtr dle kódu skupiny zásoby.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Filtr dle kódu skupiny zásoby.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * Filtr dle pole "Název" skupiny zásoby.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Filtr dle pole "Název" skupiny zásoby.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
