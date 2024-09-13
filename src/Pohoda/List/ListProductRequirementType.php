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
 * Class representing ListProductRequirementType.
 *
 * XSD Type: listProductRequirementType
 */
class ListProductRequirementType extends ListVersionType
{
    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementType[]
     */
    private array $productRequirement = [
    ];

    /**
     * Adds as productRequirement.
     *
     * @return self
     */
    public function addToProductRequirement(\Pohoda\ProductRequirement\ProductRequirementType $productRequirement)
    {
        $this->productRequirement[] = $productRequirement;

        return $this;
    }

    /**
     * isset productRequirement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductRequirement($index)
    {
        return isset($this->productRequirement[$index]);
    }

    /**
     * unset productRequirement.
     *
     * @param int|string $index
     */
    public function unsetProductRequirement($index): void
    {
        unset($this->productRequirement[$index]);
    }

    /**
     * Gets as productRequirement.
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementType[]
     */
    public function getProductRequirement()
    {
        return $this->productRequirement;
    }

    /**
     * Sets a new productRequirement.
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementType[] $productRequirement
     *
     * @return self
     */
    public function setProductRequirement(?array $productRequirement = null)
    {
        $this->productRequirement = $productRequirement;

        return $this;
    }
}
