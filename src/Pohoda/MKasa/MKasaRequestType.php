<?php

namespace Pohoda\MKasa;

/**
 * Class representing MKasaRequestType
 *
 *
 * XSD Type: mKasaRequestType
 */
class MKasaRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\MKasa\ExportRequestType $export
     */
    private $export = null;

    /**
     * @var \Pohoda\MKasa\ImportRequestType $import
     */
    private $import = null;

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
     * Gets as export
     *
     * @return \Pohoda\MKasa\ExportRequestType
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Sets a new export
     *
     * @param \Pohoda\MKasa\ExportRequestType $export
     * @return self
     */
    public function setExport(?\Pohoda\MKasa\ExportRequestType $export = null)
    {
        $this->export = $export;
        return $this;
    }

    /**
     * Gets as import
     *
     * @return \Pohoda\MKasa\ImportRequestType
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Sets a new import
     *
     * @param \Pohoda\MKasa\ImportRequestType $import
     * @return self
     */
    public function setImport(?\Pohoda\MKasa\ImportRequestType $import = null)
    {
        $this->import = $import;
        return $this;
    }
}
