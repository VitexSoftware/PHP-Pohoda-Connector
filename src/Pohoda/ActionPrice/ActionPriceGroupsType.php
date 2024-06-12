<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceGroupsType
 *
 * Skupiny Odběratelů Akční ceny zásob.
 * XSD Type: actionPriceGroupsType
 */
class ActionPriceGroupsType
{
    /**
     * @var \Pohoda\ActionPrice\GroupType[] $group
     */
    private $group = [
    ];

    /**
     * Adds as group
     *
     * @return self
     * @param \Pohoda\ActionPrice\GroupType $group
     */
    public function addToGroup(\Pohoda\ActionPrice\GroupType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * @return \Pohoda\ActionPrice\GroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \Pohoda\ActionPrice\GroupType[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }
}
