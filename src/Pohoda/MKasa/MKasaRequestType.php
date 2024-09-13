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

/**
 * Class representing MKasaRequestType.
 *
 * XSD Type: mKasaRequestType
 */
class MKasaRequestType
{
    private string $version = null;
    private \Pohoda\MKasa\ExportRequestType $export = null;
    private \Pohoda\MKasa\ImportRequestType $import = null;

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
     * Gets as export.
     *
     * @return \Pohoda\MKasa\ExportRequestType
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Sets a new export.
     *
     * @return self
     */
    public function setExport(?\Pohoda\MKasa\ExportRequestType $export = null)
    {
        $this->export = $export;

        return $this;
    }

    /**
     * Gets as import.
     *
     * @return \Pohoda\MKasa\ImportRequestType
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Sets a new import.
     *
     * @return self
     */
    public function setImport(?\Pohoda\MKasa\ImportRequestType $import = null)
    {
        $this->import = $import;

        return $this;
    }
}
