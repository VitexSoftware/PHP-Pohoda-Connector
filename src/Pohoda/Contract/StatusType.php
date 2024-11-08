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

namespace Pohoda\Contract;

use Pohoda\Type\RefTypeLongType;

/**
 * Class representing StatusType.
 *
 * XSD Type: statusType
 */
class StatusType extends RefTypeLongType
{
    /**
     * Uzamknout a dále nepoužívat (pouze export).
     */
    private ?string $unused = null;

    /**
     * Vyřízeno (pouze export).
     */
    private ?string $executed = null;

    /**
     * Gets as unused.
     *
     * Uzamknout a dále nepoužívat (pouze export).
     *
     * @return string
     */
    public function getUnused()
    {
        return $this->unused;
    }

    /**
     * Sets a new unused.
     *
     * Uzamknout a dále nepoužívat (pouze export).
     *
     * @param string $unused
     *
     * @return self
     */
    public function setUnused($unused)
    {
        $this->unused = $unused;

        return $this;
    }

    /**
     * Gets as executed.
     *
     * Vyřízeno (pouze export).
     *
     * @return string
     */
    public function getExecuted()
    {
        return $this->executed;
    }

    /**
     * Sets a new executed.
     *
     * Vyřízeno (pouze export).
     *
     * @param string $executed
     *
     * @return self
     */
    public function setExecuted($executed)
    {
        $this->executed = $executed;

        return $this;
    }
}
