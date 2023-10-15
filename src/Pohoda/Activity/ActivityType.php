<?php

namespace Pohoda\Activity;

/**
 * Class representing ActivityType
 *
 *
 * XSD Type: activityType
 */
class ActivityType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Activity\ActivityHeaderType $activityHeader
     */
    private $activityHeader = null;

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
     * Gets as activityHeader
     *
     * @return \Pohoda\Activity\ActivityHeaderType
     */
    public function getActivityHeader()
    {
        return $this->activityHeader;
    }

    /**
     * Sets a new activityHeader
     *
     * @param \Pohoda\Activity\ActivityHeaderType $activityHeader
     * @return self
     */
    public function setActivityHeader(?\Pohoda\Activity\ActivityHeaderType $activityHeader = null)
    {
        $this->activityHeader = $activityHeader;
        return $this;
    }
}
