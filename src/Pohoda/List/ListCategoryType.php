<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCategoryType.
 *
 * XSD Type: listCategoryType
 */
class ListCategoryType extends ListVersionType
{
    /**
     * @var \Pohoda\Category\CategoryDetailType[]
     */
    private array $categoryDetail = [
    ];

    /**
     * Adds as categoryDetail.
     *
     * @return self
     */
    public function addToCategoryDetail(\Pohoda\Category\CategoryDetailType $categoryDetail)
    {
        $this->categoryDetail[] = $categoryDetail;

        return $this;
    }

    /**
     * isset categoryDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCategoryDetail($index)
    {
        return isset($this->categoryDetail[$index]);
    }

    /**
     * unset categoryDetail.
     *
     * @param int|string $index
     */
    public function unsetCategoryDetail($index): void
    {
        unset($this->categoryDetail[$index]);
    }

    /**
     * Gets as categoryDetail.
     *
     * @return \Pohoda\Category\CategoryDetailType[]
     */
    public function getCategoryDetail()
    {
        return $this->categoryDetail;
    }

    /**
     * Sets a new categoryDetail.
     *
     * @param \Pohoda\Category\CategoryDetailType[] $categoryDetail
     *
     * @return self
     */
    public function setCategoryDetail(?array $categoryDetail = null)
    {
        $this->categoryDetail = $categoryDetail;

        return $this;
    }
}
