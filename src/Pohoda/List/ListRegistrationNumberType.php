<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListRegistrationNumberType
 *
 *
 * XSD Type: listRegistrationNumberType
 */
class ListRegistrationNumberType extends ListVersionType
{
    /**
     * @var \Pohoda\RegistrationNumber\RegistrationNumberType[] $registrationNumber
     */
    private $registrationNumber = [
    ];

    /**
     * Adds as registrationNumber
     *
     * @return self
     * @param \Pohoda\RegistrationNumber\RegistrationNumberType $registrationNumber
     */
    public function addToRegistrationNumber(\Pohoda\RegistrationNumber\RegistrationNumberType $registrationNumber)
    {
        $this->registrationNumber[] = $registrationNumber;
        return $this;
    }

    /**
     * isset registrationNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationNumber($index)
    {
        return isset($this->registrationNumber[$index]);
    }

    /**
     * unset registrationNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationNumber($index)
    {
        unset($this->registrationNumber[$index]);
    }

    /**
     * Gets as registrationNumber
     *
     * @return \Pohoda\RegistrationNumber\RegistrationNumberType[]
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Sets a new registrationNumber
     *
     * @param \Pohoda\RegistrationNumber\RegistrationNumberType[] $registrationNumber
     * @return self
     */
    public function setRegistrationNumber(array $registrationNumber = null)
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }
}
