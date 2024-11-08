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

namespace Pohoda\Activity;

/**
 * Class representing ActivityType.
 *
 * XSD Type: activityType
 */
class ActivityType
{
    private ?string $version = null;
    private ?\Pohoda\Activity\ActivityHeaderType $activityHeader = null;

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
     * Gets as activityHeader.
     *
     * @return \Pohoda\Activity\ActivityHeaderType
     */
    public function getActivityHeader()
    {
        return $this->activityHeader;
    }

    /**
     * Sets a new activityHeader.
     *
     * @return self
     */
    public function setActivityHeader(?\Pohoda\Activity\ActivityHeaderType $activityHeader = null)
    {
        $this->activityHeader = $activityHeader;

        return $this;
    }
}
