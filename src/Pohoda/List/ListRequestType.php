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

namespace Pohoda\List;

/**
 * Class representing ListRequestType.
 *
 * XSD Type: listRequestType
 */
class ListRequestType
{
    /**
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
     */
    private ?string $version = null;

    /**
     * Gets as version.
     *
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
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
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
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
}
