<?php

namespace Pohoda\List;

/**
 * Class representing ListRequestAgendasType
 *
 *
 * XSD Type: listRequestAgendasType
 */
class ListRequestAgendasType extends ListRequestType
{
    /**
     * @var string[] $agendas
     */
    private $agendas = null;

    /**
     * Adds as agenda
     *
     * @return self
     * @param string $agenda
     */
    public function addToAgendas($agenda)
    {
        $this->agendas[] = $agenda;
        return $this;
    }

    /**
     * isset agendas
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgendas($index)
    {
        return isset($this->agendas[$index]);
    }

    /**
     * unset agendas
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgendas($index)
    {
        unset($this->agendas[$index]);
    }

    /**
     * Gets as agendas
     *
     * @return string[]
     */
    public function getAgendas()
    {
        return $this->agendas;
    }

    /**
     * Sets a new agendas
     *
     * @param string $agendas
     * @return self
     */
    public function setAgendas(array $agendas = null)
    {
        $this->agendas = $agendas;
        return $this;
    }
}

