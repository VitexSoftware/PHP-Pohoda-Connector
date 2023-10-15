<?php

namespace Pohoda\ListActivity;

/**
 * Class representing ListRequestActivityType
 *
 *
 * XSD Type: listRequestActivityType
 */
class ListRequestActivityType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze activity dokumentu.
     *
     * @var string $activityVersion
     */
    private $activityVersion = null;

    /**
     * @var \Pohoda\ListActivity\RequestActivityType[] $requestActivity
     */
    private $requestActivity = [
        
    ];

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
     * Gets as activityVersion
     *
     * Požadovaná verze activity dokumentu.
     *
     * @return string
     */
    public function getActivityVersion()
    {
        return $this->activityVersion;
    }

    /**
     * Sets a new activityVersion
     *
     * Požadovaná verze activity dokumentu.
     *
     * @param string $activityVersion
     * @return self
     */
    public function setActivityVersion($activityVersion)
    {
        $this->activityVersion = $activityVersion;
        return $this;
    }

    /**
     * Adds as requestActivity
     *
     * @return self
     * @param \Pohoda\ListActivity\RequestActivityType $requestActivity
     */
    public function addToRequestActivity(\Pohoda\ListActivity\RequestActivityType $requestActivity)
    {
        $this->requestActivity[] = $requestActivity;
        return $this;
    }

    /**
     * isset requestActivity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestActivity($index)
    {
        return isset($this->requestActivity[$index]);
    }

    /**
     * unset requestActivity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestActivity($index)
    {
        unset($this->requestActivity[$index]);
    }

    /**
     * Gets as requestActivity
     *
     * @return \Pohoda\ListActivity\RequestActivityType[]
     */
    public function getRequestActivity()
    {
        return $this->requestActivity;
    }

    /**
     * Sets a new requestActivity
     *
     * @param \Pohoda\ListActivity\RequestActivityType[] $requestActivity
     * @return self
     */
    public function setRequestActivity(array $requestActivity)
    {
        $this->requestActivity = $requestActivity;
        return $this;
    }
}

