<?php

namespace Pohoda\Category;

/**
 * Class representing SubCategoriesType
 *
 *
 * XSD Type: subCategoriesType
 */
class SubCategoriesType
{
    /**
     * @var \Pohoda\Category\CategoryType[] $category
     */
    private $category = [
    ];

    /**
     * Adds as category
     *
     * @return self
     * @param \Pohoda\Category\CategoryType $category
     */
    public function addToCategory(\Pohoda\Category\CategoryType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * @return \Pohoda\Category\CategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param \Pohoda\Category\CategoryType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }
}
