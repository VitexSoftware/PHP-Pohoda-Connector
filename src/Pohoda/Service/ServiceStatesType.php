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

namespace Pohoda\Service;

/**
 * Class representing ServiceStatesType.
 *
 * XSD Type: serviceStatesType
 */
class ServiceStatesType
{
    /**
     * @var \Pohoda\Service\StateType[]
     */
    private array $state = [
    ];

    /**
     * Adds as state.
     *
     * @return self
     */
    public function addToState(\Pohoda\Service\StateType $state)
    {
        $this->state[] = $state;

        return $this;
    }

    /**
     * isset state.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetState($index)
    {
        return isset($this->state[$index]);
    }

    /**
     * unset state.
     *
     * @param int|string $index
     */
    public function unsetState($index): void
    {
        unset($this->state[$index]);
    }

    /**
     * Gets as state.
     *
     * @return \Pohoda\Service\StateType[]
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param \Pohoda\Service\StateType[] $state
     *
     * @return self
     */
    public function setState(array $state)
    {
        $this->state = $state;

        return $this;
    }
}
