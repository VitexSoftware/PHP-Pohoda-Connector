<?php

namespace Pohoda\List\ListRequestAgendasType;

/**
 * Class representing AgendasAType
 */
class AgendasAType
{
    /**
     * Výčet agend, pro které se vyexportují data.
     *
     * @var string[] $agenda
     */
    private $agenda = [
    ];

    /**
     * Adds as agenda
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @return self
     * @param string $agenda
     */
    public function addToAgenda($agenda)
    {
        $this->agenda[] = $agenda;
        return $this;
    }

    /**
     * isset agenda
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgenda($index)
    {
        return isset($this->agenda[$index]);
    }

    /**
     * unset agenda
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgenda($index)
    {
        unset($this->agenda[$index]);
    }

    /**
     * Gets as agenda
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
     * Sets a new agenda
     *
     * Výčet agend, pro které se vyexportují data.
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda(array $agenda = null)
    {
        $this->agenda = $agenda;
        return $this;
    }
}
