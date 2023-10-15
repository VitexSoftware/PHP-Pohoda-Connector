<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing StockType
 *
 *
 * XSD Type: stockType
 */
class StockType
{
    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Kód zásoby.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as id
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
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as extId
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as code
     *
     * Kód zásoby.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Kód zásoby.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}
