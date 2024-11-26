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
 * Class representing ListCategoryRequestType.
 *
 * XSD Type: listCategoryRequestType
 */
class ListCategoryRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze pro export.
     */
    private ?string $categoryVersion = null;
    private ?\Pohoda\List\RequestCategoryType $requestCategory = null;

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
     * Gets as categoryVersion.
     *
     * Požadovaná verze pro export.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion.
     *
     * Požadovaná verze pro export.
     *
     * @param string $categoryVersion
     *
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;

        return $this;
    }

    /**
     * Gets as requestCategory.
     *
     * @return \Pohoda\List\RequestCategoryType
     */
    public function getRequestCategory()
    {
        return $this->requestCategory;
    }

    /**
     * Sets a new requestCategory.
     *
     * @return self
     */
    public function setRequestCategory(?\Pohoda\List\RequestCategoryType $requestCategory = null)
    {
        $this->requestCategory = $requestCategory;

        return $this;
    }
}
