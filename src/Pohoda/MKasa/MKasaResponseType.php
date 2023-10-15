<?php

namespace Pohoda\MKasa;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing MKasaResponseType
 *
 *
 * XSD Type: mKasaResponseType
 */
class MKasaResponseType extends ListVersionType
{
    /**
     * @var \Pohoda\MKasa\ConfigurationType $configuration
     */
    private $configuration = null;

    /**
     * @var \Pohoda\MKasa\ImportResponseType $importResponse
     */
    private $importResponse = null;

    /**
     * Gets as configuration
     *
     * @return \Pohoda\MKasa\ConfigurationType
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets a new configuration
     *
     * @param \Pohoda\MKasa\ConfigurationType $configuration
     * @return self
     */
    public function setConfiguration(?\Pohoda\MKasa\ConfigurationType $configuration = null)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Gets as importResponse
     *
     * @return \Pohoda\MKasa\ImportResponseType
     */
    public function getImportResponse()
    {
        return $this->importResponse;
    }

    /**
     * Sets a new importResponse
     *
     * @param \Pohoda\MKasa\ImportResponseType $importResponse
     * @return self
     */
    public function setImportResponse(?\Pohoda\MKasa\ImportResponseType $importResponse = null)
    {
        $this->importResponse = $importResponse;
        return $this;
    }
}

