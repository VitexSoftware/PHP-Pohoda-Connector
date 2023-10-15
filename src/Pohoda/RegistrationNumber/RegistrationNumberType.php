<?php

namespace Pohoda\RegistrationNumber;

/**
 * Class representing RegistrationNumberType
 *
 *
 * XSD Type: registrationNumberType
 */
class RegistrationNumberType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader
     */
    private $registrationNumberHeader = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as registrationNumberHeader
     *
     * @return \Pohoda\RegistrationNumber\RegistrationNumberHeaderType
     */
    public function getRegistrationNumberHeader()
    {
        return $this->registrationNumberHeader;
    }

    /**
     * Sets a new registrationNumberHeader
     *
     * @param \Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader
     * @return self
     */
    public function setRegistrationNumberHeader(?\Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader = null)
    {
        $this->registrationNumberHeader = $registrationNumberHeader;
        return $this;
    }
}
