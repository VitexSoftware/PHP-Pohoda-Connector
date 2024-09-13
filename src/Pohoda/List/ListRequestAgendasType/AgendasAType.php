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

namespace Pohoda\List\ListRequestAgendasType;

/**
 * Class representing AgendasAType.
 */
class AgendasAType
{
    /**
     * Výčet agend, pro které se vyexportují data.
     *
     * @var string[]
     */
    private array $agenda = [
    ];

    /**
     * Adds as agenda.
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function addToAgenda($agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * isset agenda.
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAgenda($index)
    {
        return isset($this->agenda[$index]);
    }

    /**
     * unset agenda.
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param int|string $index
     */
    public function unsetAgenda($index): void
    {
        unset($this->agenda[$index]);
    }

    /**
     * Gets as agenda.
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @return string[]
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda(?array $agenda = null)
    {
        $this->agenda = $agenda;

        return $this;
    }
}
