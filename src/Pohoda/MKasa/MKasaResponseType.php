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

namespace Pohoda\MKasa;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing MKasaResponseType.
 *
 * XSD Type: mKasaResponseType
 */
class MKasaResponseType extends ListVersionType
{
    private ?\Pohoda\MKasa\ConfigurationType $configuration = null;
    private ?\Pohoda\MKasa\ImportResponseType $importResponse = null;

    /**
     * Gets as configuration.
     *
     * @return \Pohoda\MKasa\ConfigurationType
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets a new configuration.
     *
     * @return self
     */
    public function setConfiguration(?\Pohoda\MKasa\ConfigurationType $configuration = null)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Gets as importResponse.
     *
     * @return \Pohoda\MKasa\ImportResponseType
     */
    public function getImportResponse()
    {
        return $this->importResponse;
    }

    /**
     * Sets a new importResponse.
     *
     * @return self
     */
    public function setImportResponse(?\Pohoda\MKasa\ImportResponseType $importResponse = null)
    {
        $this->importResponse = $importResponse;

        return $this;
    }
}
