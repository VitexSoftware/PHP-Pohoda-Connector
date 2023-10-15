<?php

namespace Pohoda\Type;

/**
 * Class representing NumberADType
 *
 *
 * XSD Type: numberADType
 */
class NumberADType
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
     * @var \Pohoda\Type\NumberADType\NumberRequestedAType $numberRequested
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
     * @return \Pohoda\Type\NumberADType\NumberRequestedAType
     */
    public function getNumberRequested()
    {
        return $this->numberRequested;
    }

    /**
     * Sets a new numberRequested
     *
     * @param \Pohoda\Type\NumberADType\NumberRequestedAType $numberRequested
     * @return self
     */
    public function setNumberRequested(?\Pohoda\Type\NumberADType\NumberRequestedAType $numberRequested = null)
    {
        $this->numberRequested = $numberRequested;
        return $this;
    }
}
