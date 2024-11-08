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

namespace Pohoda\Establishment;

/**
 * Class representing EstablishmentType.
 *
 * XSD Type: establishmentType
 */
class EstablishmentType
{
    private ?string $version = null;
    private ?\Pohoda\Establishment\EstablishmentHeaderType $establishmentHeader = null;

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
     * Gets as establishmentHeader.
     *
     * @return \Pohoda\Establishment\EstablishmentHeaderType
     */
    public function getEstablishmentHeader()
    {
        return $this->establishmentHeader;
    }

    /**
     * Sets a new establishmentHeader.
     *
     * @return self
     */
    public function setEstablishmentHeader(?\Pohoda\Establishment\EstablishmentHeaderType $establishmentHeader = null)
    {
        $this->establishmentHeader = $establishmentHeader;

        return $this;
    }
}
