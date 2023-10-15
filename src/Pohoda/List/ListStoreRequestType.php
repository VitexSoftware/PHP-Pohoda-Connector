<?php

namespace Pohoda\List;

/**
 * Class representing ListStoreRequestType
 *
 *
 * XSD Type: listStoreRequestType
 */
class ListStoreRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze skladů.
     *
     * @var string $storeVersion
     */
    private $storeVersion = null;

    /**
     * @var \Pohoda\Filter\RequestStoreType $requestStore
     */
    private $requestStore = null;

    /**
     * @var \Pohoda\List\RestrictionDataStoreType $restrictionData
     */
    private $restrictionData = null;

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
     * Gets as storeVersion
     *
     * Požadovaná verze skladů.
     *
     * @return string
     */
    public function getStoreVersion()
    {
        return $this->storeVersion;
    }

    /**
     * Sets a new storeVersion
     *
     * Požadovaná verze skladů.
     *
     * @param string $storeVersion
     * @return self
     */
    public function setStoreVersion($storeVersion)
    {
        $this->storeVersion = $storeVersion;
        return $this;
    }

    /**
     * Gets as requestStore
     *
     * @return \Pohoda\Filter\RequestStoreType
     */
    public function getRequestStore()
    {
        return $this->requestStore;
    }

    /**
     * Sets a new requestStore
     *
     * @param \Pohoda\Filter\RequestStoreType $requestStore
     * @return self
     */
    public function setRequestStore(?\Pohoda\Filter\RequestStoreType $requestStore = null)
    {
        $this->requestStore = $requestStore;
        return $this;
    }

    /**
     * Gets as restrictionData
     *
     * @return \Pohoda\List\RestrictionDataStoreType
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData
     *
     * @param \Pohoda\List\RestrictionDataStoreType $restrictionData
     * @return self
     */
    public function setRestrictionData(?\Pohoda\List\RestrictionDataStoreType $restrictionData = null)
    {
        $this->restrictionData = $restrictionData;
        return $this;
    }
}

