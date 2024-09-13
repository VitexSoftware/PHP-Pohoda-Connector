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

namespace Pohoda\Stock;

/**
 * Class representing CategoriesType.
 *
 * XSD Type: categoriesType
 */
class CategoriesType
{
    /**
     * @var int[]
     */
    private array $idCategory = [
    ];

    /**
     * Adds as idCategory.
     *
     * @param int $idCategory
     *
     * @return self
     */
    public function addToIdCategory($idCategory)
    {
        $this->idCategory[] = $idCategory;

        return $this;
    }

    /**
     * isset idCategory.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIdCategory($index)
    {
        return isset($this->idCategory[$index]);
    }

    /**
     * unset idCategory.
     *
     * @param int|string $index
     */
    public function unsetIdCategory($index): void
    {
        unset($this->idCategory[$index]);
    }

    /**
     * Gets as idCategory.
     *
     * @return int[]
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Sets a new idCategory.
     *
     * @param int[] $idCategory
     *
     * @return self
     */
    public function setIdCategory(?array $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }
}
