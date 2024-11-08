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

namespace Pohoda\Centre;

/**
 * Class representing CentreType.
 *
 * XSD Type: centreType
 */
class CentreType
{
    private ?string $version = null;
    private ?\Pohoda\Centre\CentreHeaderType $centreHeader = null;

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
     * Gets as centreHeader.
     *
     * @return \Pohoda\Centre\CentreHeaderType
     */
    public function getCentreHeader()
    {
        return $this->centreHeader;
    }

    /**
     * Sets a new centreHeader.
     *
     * @return self
     */
    public function setCentreHeader(?\Pohoda\Centre\CentreHeaderType $centreHeader = null)
    {
        $this->centreHeader = $centreHeader;

        return $this;
    }
}
