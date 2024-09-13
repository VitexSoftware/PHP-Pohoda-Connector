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

namespace Pohoda\ListActivity;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListActivityType.
 *
 * XSD Type: listActivityType
 */
class ListActivityType extends ListVersionType
{
    /**
     * @var \Pohoda\Activity\ActivityType[]
     */
    private array $activity = [
    ];

    /**
     * Adds as activity.
     *
     * @return self
     */
    public function addToActivity(\Pohoda\Activity\ActivityType $activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * isset activity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity.
     *
     * @param int|string $index
     */
    public function unsetActivity($index): void
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity.
     *
     * @return \Pohoda\Activity\ActivityType[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity.
     *
     * @param \Pohoda\Activity\ActivityType[] $activity
     *
     * @return self
     */
    public function setActivity(?array $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }
}
