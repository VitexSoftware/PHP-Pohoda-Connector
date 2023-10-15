<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCategoryType
 *
 *
 * XSD Type: listCategoryType
 */
class ListCategoryType extends ListVersionType
{
    /**
     * @var \Pohoda\Category\CategoryDetailType[] $categoryDetail
     */
    private $categoryDetail = [

    ];

    /**
     * Adds as categoryDetail
     *
     * @return self
     * @param \Pohoda\Category\CategoryDetailType $categoryDetail
     */
    public function addToCategoryDetail(\Pohoda\Category\CategoryDetailType $categoryDetail)
    {
        $this->categoryDetail[] = $categoryDetail;
        return $this;
    }

    /**
     * isset categoryDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryDetail($index)
    {
        return isset($this->categoryDetail[$index]);
    }

    /**
     * unset categoryDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryDetail($index)
    {
        unset($this->categoryDetail[$index]);
    }

    /**
     * Gets as categoryDetail
     *
     * @return \Pohoda\Category\CategoryDetailType[]
     */
    public function getCategoryDetail()
    {
        return $this->categoryDetail;
    }

    /**
     * Sets a new categoryDetail
     *
     * @param \Pohoda\Category\CategoryDetailType[] $categoryDetail
     * @return self
     */
    public function setCategoryDetail(array $categoryDetail = null)
    {
        $this->categoryDetail = $categoryDetail;
        return $this;
    }
}
