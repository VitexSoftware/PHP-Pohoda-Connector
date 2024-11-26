<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\RegistrationNumber;

/**
 * Class representing RegistrationNumberType.
 *
 * XSD Type: registrationNumberType
 */
class RegistrationNumberType
{
    private ?string $version = null;
    private ?\Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as registrationNumberHeader.
     *
     * @return \Pohoda\RegistrationNumber\RegistrationNumberHeaderType
     */
    public function getRegistrationNumberHeader()
    {
        return $this->registrationNumberHeader;
    }

    /**
     * Sets a new registrationNumberHeader.
     *
     * @return self
     */
    public function setRegistrationNumberHeader(?\Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader = null)
    {
        $this->registrationNumberHeader = $registrationNumberHeader;

        return $this;
    }
}
