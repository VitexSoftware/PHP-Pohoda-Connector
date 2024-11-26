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

/**
 * Class representing RestrictionDataVyrobaType.
 *
 * XSD Type: restrictionDataVyrobaType
 */
class RestrictionDataVyrobaType
{
    /**
     * Položky výrobku (pouze E1).
     */
    private ?string $productionList = null;

    /**
     * Gets as productionList.
     *
     * Položky výrobku (pouze E1).
     *
     * @return string
     */
    public function getProductionList()
    {
        return $this->productionList;
    }

    /**
     * Sets a new productionList.
     *
     * Položky výrobku (pouze E1).
     *
     * @param string $productionList
     *
     * @return self
     */
    public function setProductionList($productionList)
    {
        $this->productionList = $productionList;

        return $this;
    }
}
