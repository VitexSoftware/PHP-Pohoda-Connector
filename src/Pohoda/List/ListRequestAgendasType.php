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

/**
 * Class representing ListRequestAgendasType.
 *
 * XSD Type: listRequestAgendasType
 */
class ListRequestAgendasType extends ListRequestType
{
    /**
     * @var string[]
     */
    private array $agendas = null;

    /**
     * Adds as agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function addToAgendas($agenda)
    {
        $this->agendas[] = $agenda;

        return $this;
    }

    /**
     * isset agendas.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAgendas($index)
    {
        return isset($this->agendas[$index]);
    }

    /**
     * unset agendas.
     *
     * @param int|string $index
     */
    public function unsetAgendas($index): void
    {
        unset($this->agendas[$index]);
    }

    /**
     * Gets as agendas.
     *
     * @return string[]
     */
    public function getAgendas()
    {
        return $this->agendas;
    }

    /**
     * Sets a new agendas.
     *
     * @param string $agendas
     *
     * @return self
     */
    public function setAgendas(?array $agendas = null)
    {
        $this->agendas = $agendas;

        return $this;
    }
}
