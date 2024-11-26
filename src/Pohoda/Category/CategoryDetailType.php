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

namespace Pohoda\Category;

/**
 * Class representing CategoryDetailType.
 *
 * XSD Type: categoryDetailType
 */
class CategoryDetailType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Category\CategoryType[]
     */
    private array $category = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as category.
     *
     * @return self
     */
    public function addToCategory(\Pohoda\Category\CategoryType $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * isset category.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category.
     *
     * @param int|string $index
     */
    public function unsetCategory($index): void
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category.
     *
     * @return \Pohoda\Category\CategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category.
     *
     * @param \Pohoda\Category\CategoryType[] $category
     *
     * @return self
     */
    public function setCategory(?array $category = null)
    {
        $this->category = $category;

        return $this;
    }
}
