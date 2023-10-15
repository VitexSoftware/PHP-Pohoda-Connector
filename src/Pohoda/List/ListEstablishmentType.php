<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListEstablishmentType
 *
 *
 * XSD Type: listEstablishmentType
 */
class ListEstablishmentType extends ListVersionType
{
    /**
     * @var \Pohoda\Establishment\EstablishmentType[] $establishment
     */
    private $establishment = [
        
    ];

    /**
     * Adds as establishment
     *
     * @return self
     * @param \Pohoda\Establishment\EstablishmentType $establishment
     */
    public function addToEstablishment(\Pohoda\Establishment\EstablishmentType $establishment)
    {
        $this->establishment[] = $establishment;
        return $this;
    }

    /**
     * isset establishment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEstablishment($index)
    {
        return isset($this->establishment[$index]);
    }

    /**
     * unset establishment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEstablishment($index)
    {
        unset($this->establishment[$index]);
    }

    /**
     * Gets as establishment
     *
     * @return \Pohoda\Establishment\EstablishmentType[]
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment
     *
     * @param \Pohoda\Establishment\EstablishmentType[] $establishment
     * @return self
     */
    public function setEstablishment(array $establishment = null)
    {
        $this->establishment = $establishment;
        return $this;
    }
}

