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

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceGroupsType.
 *
 * Skupiny Odběratelů Akční ceny zásob.
 * XSD Type: actionPriceGroupsType
 */
class ActionPriceGroupsType
{
    /**
     * @var \Pohoda\ActionPrice\GroupType[]
     */
    private array $group = [
    ];

    /**
     * Adds as group.
     *
     * @return self
     */
    public function addToGroup(\Pohoda\ActionPrice\GroupType $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * isset group.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group.
     *
     * @param int|string $index
     */
    public function unsetGroup($index): void
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group.
     *
     * @return \Pohoda\ActionPrice\GroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group.
     *
     * @param \Pohoda\ActionPrice\GroupType[] $group
     *
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;

        return $this;
    }
}
