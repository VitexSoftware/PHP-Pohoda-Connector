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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListMovementType.
 *
 * XSD Type: listMovementType
 */
class ListMovementType extends ListVersionType
{
    /**
     * @var \Pohoda\Movement\MovementType[]
     */
    private array $movement = [
    ];

    /**
     * Adds as movement.
     *
     * @return self
     */
    public function addToMovement(\Pohoda\Movement\MovementType $movement)
    {
        $this->movement[] = $movement;

        return $this;
    }

    /**
     * isset movement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetMovement($index)
    {
        return isset($this->movement[$index]);
    }

    /**
     * unset movement.
     *
     * @param int|string $index
     */
    public function unsetMovement($index): void
    {
        unset($this->movement[$index]);
    }

    /**
     * Gets as movement.
     *
     * @return \Pohoda\Movement\MovementType[]
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * Sets a new movement.
     *
     * @param \Pohoda\Movement\MovementType[] $movement
     *
     * @return self
     */
    public function setMovement(?array $movement = null)
    {
        $this->movement = $movement;

        return $this;
    }
}
