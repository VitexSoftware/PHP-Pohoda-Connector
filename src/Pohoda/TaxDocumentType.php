<?php

namespace Pohoda;

/**
 * Class representing TaxDocumentType
 *
 *
 * XSD Type: taxDocumentType
 */
class TaxDocumentType
{
    /**
     * @var string $number
     */
    private $number = null;

    /**
     * Gets as number
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
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
