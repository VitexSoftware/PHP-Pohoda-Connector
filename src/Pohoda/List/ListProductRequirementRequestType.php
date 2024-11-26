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
 * Class representing ListProductRequirementRequestType.
 *
 * XSD Type: listProductRequirementRequestType
 */
class ListProductRequirementRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $productRequirementVersion = null;

    /**
     * @var \Pohoda\Filter\RequestProductRequirementType[]
     */
    private array $requestProductRequirement = [
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
     * Gets as productRequirementVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getProductRequirementVersion()
    {
        return $this->productRequirementVersion;
    }

    /**
     * Sets a new productRequirementVersion.
     *
     * Požadovaná verze.
     *
     * @param string $productRequirementVersion
     *
     * @return self
     */
    public function setProductRequirementVersion($productRequirementVersion)
    {
        $this->productRequirementVersion = $productRequirementVersion;

        return $this;
    }

    /**
     * Adds as requestProductRequirement.
     *
     * @return self
     */
    public function addToRequestProductRequirement(\Pohoda\Filter\RequestProductRequirementType $requestProductRequirement)
    {
        $this->requestProductRequirement[] = $requestProductRequirement;

        return $this;
    }

    /**
     * isset requestProductRequirement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestProductRequirement($index)
    {
        return isset($this->requestProductRequirement[$index]);
    }

    /**
     * unset requestProductRequirement.
     *
     * @param int|string $index
     */
    public function unsetRequestProductRequirement($index): void
    {
        unset($this->requestProductRequirement[$index]);
    }

    /**
     * Gets as requestProductRequirement.
     *
     * @return \Pohoda\Filter\RequestProductRequirementType[]
     */
    public function getRequestProductRequirement()
    {
        return $this->requestProductRequirement;
    }

    /**
     * Sets a new requestProductRequirement.
     *
     * @param \Pohoda\Filter\RequestProductRequirementType[] $requestProductRequirement
     *
     * @return self
     */
    public function setRequestProductRequirement(array $requestProductRequirement)
    {
        $this->requestProductRequirement = $requestProductRequirement;

        return $this;
    }
}
