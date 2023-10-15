<?php

namespace Pohoda\Type;

/**
 * Class representing NumberType
 *
 *
 * XSD Type: numberType
 */
class NumberType
{
    /**
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Prefix číselné řady.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Číslo dokladu, bez vazby na číselnou řadu.
     *
     * @var \Pohoda\Type\NumberType\NumberRequestedAType $numberRequested
     */
    private $numberRequested = null;

    /**
     * Gets as id
     *
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ids
     *
     * Prefix číselné řady.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * Prefix číselné řady.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as numberRequested
     *
     * Číslo dokladu, bez vazby na číselnou řadu.
     *
     * @return \Pohoda\Type\NumberType\NumberRequestedAType
     */
    public function getNumberRequested()
    {
        return $this->numberRequested;
    }

    /**
     * Sets a new numberRequested
     *
     * Číslo dokladu, bez vazby na číselnou řadu.
     *
     * @param \Pohoda\Type\NumberType\NumberRequestedAType $numberRequested
     * @return self
     */
    public function setNumberRequested(?\Pohoda\Type\NumberType\NumberRequestedAType $numberRequested = null)
    {
        $this->numberRequested = $numberRequested;
        return $this;
    }
}

