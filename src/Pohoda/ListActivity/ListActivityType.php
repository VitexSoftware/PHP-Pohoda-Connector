<?php

namespace Pohoda\ListActivity;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListActivityType
 *
 *
 * XSD Type: listActivityType
 */
class ListActivityType extends ListVersionType
{
    /**
     * @var \Pohoda\Activity\ActivityType[] $activity
     */
    private $activity = [
        
    ];

    /**
     * Adds as activity
     *
     * @return self
     * @param \Pohoda\Activity\ActivityType $activity
     */
    public function addToActivity(\Pohoda\Activity\ActivityType $activity)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * isset activity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivity($index)
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity
     *
     * @return \Pohoda\Activity\ActivityType[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * @param \Pohoda\Activity\ActivityType[] $activity
     * @return self
     */
    public function setActivity(array $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }
}

