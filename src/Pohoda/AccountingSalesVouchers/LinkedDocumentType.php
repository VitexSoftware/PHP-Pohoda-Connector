<?php

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing LinkedDocumentType
 *
 *
 * XSD Type: linkedDocumentType
 */
class LinkedDocumentType
{
    /**
     * ID prodejky.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * Číslo prodejky.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Gets as id
     *
     * ID prodejky.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID prodejky.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as number
     *
     * Číslo prodejky.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Číslo prodejky.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}

