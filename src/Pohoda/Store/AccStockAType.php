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

namespace Pohoda\Store;

/**
 * Class representing AccStockAType.
 *
 * XSD Type: accStockAType
 */
class AccStockAType
{
    /**
     * Materiál.
     */
    private string $material = null;

    /**
     * Zboží.
     */
    private string $goods = null;

    /**
     * Nedokončená výroba.
     */
    private string $workInProgress = null;

    /**
     * Polotovary.
     */
    private string $semiproducts = null;

    /**
     * Výrobky.
     */
    private string $products = null;

    /**
     * Zvířata.
     */
    private string $animals = null;

    /**
     * Materiál vl. výroby.
     */
    private string $materialOfOwnProduction = null;

    /**
     * Gets as material.
     *
     * Materiál.
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Sets a new material.
     *
     * Materiál.
     *
     * @param string $material
     *
     * @return self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Gets as goods.
     *
     * Zboží.
     *
     * @return string
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * Sets a new goods.
     *
     * Zboží.
     *
     * @param string $goods
     *
     * @return self
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Gets as workInProgress.
     *
     * Nedokončená výroba.
     *
     * @return string
     */
    public function getWorkInProgress()
    {
        return $this->workInProgress;
    }

    /**
     * Sets a new workInProgress.
     *
     * Nedokončená výroba.
     *
     * @param string $workInProgress
     *
     * @return self
     */
    public function setWorkInProgress($workInProgress)
    {
        $this->workInProgress = $workInProgress;

        return $this;
    }

    /**
     * Gets as semiproducts.
     *
     * Polotovary.
     *
     * @return string
     */
    public function getSemiproducts()
    {
        return $this->semiproducts;
    }

    /**
     * Sets a new semiproducts.
     *
     * Polotovary.
     *
     * @param string $semiproducts
     *
     * @return self
     */
    public function setSemiproducts($semiproducts)
    {
        $this->semiproducts = $semiproducts;

        return $this;
    }

    /**
     * Gets as products.
     *
     * Výrobky.
     *
     * @return string
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products.
     *
     * Výrobky.
     *
     * @param string $products
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Gets as animals.
     *
     * Zvířata.
     *
     * @return string
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Sets a new animals.
     *
     * Zvířata.
     *
     * @param string $animals
     *
     * @return self
     */
    public function setAnimals($animals)
    {
        $this->animals = $animals;

        return $this;
    }

    /**
     * Gets as materialOfOwnProduction.
     *
     * Materiál vl. výroby.
     *
     * @return string
     */
    public function getMaterialOfOwnProduction()
    {
        return $this->materialOfOwnProduction;
    }

    /**
     * Sets a new materialOfOwnProduction.
     *
     * Materiál vl. výroby.
     *
     * @param string $materialOfOwnProduction
     *
     * @return self
     */
    public function setMaterialOfOwnProduction($materialOfOwnProduction)
    {
        $this->materialOfOwnProduction = $materialOfOwnProduction;

        return $this;
    }
}
