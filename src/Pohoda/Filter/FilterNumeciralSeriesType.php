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

namespace Pohoda\Filter;

/**
 * Class representing FilterNumeciralSeriesType.
 *
 * XSD Type: filterNumeciralSeriesType
 */
class FilterNumeciralSeriesType
{
    /**
     * Filtr podle ID záznamu.
     */
    private int $id = null;

    /**
     * Typ období účetní jednotky (běžné/přechodné).
     */
    private string $period = null;

    /**
     * Typ agendy.
     */
    private string $agenda = null;

    /**
     * Gets as id.
     *
     * Filtr podle ID záznamu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * Filtr podle ID záznamu.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as period.
     *
     * Typ období účetní jednotky (běžné/přechodné).
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period.
     *
     * Typ období účetní jednotky (běžné/přechodné).
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * Typ agendy.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * Typ agendy.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }
}
