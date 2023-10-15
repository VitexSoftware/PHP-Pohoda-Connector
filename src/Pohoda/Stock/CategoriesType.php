<?php

namespace Pohoda\Stock;

/**
 * Class representing CategoriesType
 *
 *
 * XSD Type: categoriesType
 */
class CategoriesType
{
    /**
     * @var int[] $idCategory
     */
    private $idCategory = [

    ];

    /**
     * Adds as idCategory
     *
     * @return self
     * @param int $idCategory
     */
    public function addToIdCategory($idCategory)
    {
        $this->idCategory[] = $idCategory;
        return $this;
    }

    /**
     * isset idCategory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdCategory($index)
    {
        return isset($this->idCategory[$index]);
    }

    /**
     * unset idCategory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdCategory($index)
    {
        unset($this->idCategory[$index]);
    }

    /**
     * Gets as idCategory
     *
     * @return int[]
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Sets a new idCategory
     *
     * @param int[] $idCategory
     * @return self
     */
    public function setIdCategory(array $idCategory = null)
    {
        $this->idCategory = $idCategory;
        return $this;
    }
}
