<?php

namespace Pohoda\List;

/**
 * Class representing ItemNumericSeriesType
 *
 *
 * XSD Type: itemNumericSeriesType
 */
class ItemNumericSeriesType extends ItemType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * @var int $year
     */
    private $year = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as agenda
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * @param int $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}

