<?php

namespace Pohoda\List;

/**
 * Class representing ListCategoryRequestType
 *
 *
 * XSD Type: listCategoryRequestType
 */
class ListCategoryRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze pro export.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * @var \Pohoda\List\RequestCategoryType $requestCategory
     */
    private $requestCategory = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as categoryVersion
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
     * Sets a new categoryVersion
     *
     * Požadovaná verze pro export.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    /**
     * Gets as requestCategory
     *
     * @return \Pohoda\List\RequestCategoryType
     */
    public function getRequestCategory()
    {
        return $this->requestCategory;
    }

    /**
     * Sets a new requestCategory
     *
     * @param \Pohoda\List\RequestCategoryType $requestCategory
     * @return self
     */
    public function setRequestCategory(?\Pohoda\List\RequestCategoryType $requestCategory = null)
    {
        $this->requestCategory = $requestCategory;
        return $this;
    }
}
