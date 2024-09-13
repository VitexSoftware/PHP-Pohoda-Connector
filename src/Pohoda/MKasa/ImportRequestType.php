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
 * Class representing ImportRequestType.
 *
 * XSD Type: importRequestType
 */
class ImportRequestType
{
    private int $mKasaPackNum = null;
    private string $name = null;
    private string $deviceGuid = null;

    /**
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Pokud se Guid liší a element je false, vrací se chyba.
     */
    private string $overwriteDeviceGuid = null;

    /**
     * Gets as mKasaPackNum.
     *
     * @return int
     */
    public function getMKasaPackNum()
    {
        return $this->mKasaPackNum;
    }

    /**
     * Sets a new mKasaPackNum.
     *
     * @param int $mKasaPackNum
     *
     * @return self
     */
    public function setMKasaPackNum($mKasaPackNum)
    {
        $this->mKasaPackNum = $mKasaPackNum;

        return $this;
    }

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as deviceGuid.
     *
     * @return string
     */
    public function getDeviceGuid()
    {
        return $this->deviceGuid;
    }

    /**
     * Sets a new deviceGuid.
     *
     * @param string $deviceGuid
     *
     * @return self
     */
    public function setDeviceGuid($deviceGuid)
    {
        $this->deviceGuid = $deviceGuid;

        return $this;
    }

    /**
     * Gets as overwriteDeviceGuid.
     *
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Pokud se Guid liší a element je false, vrací se chyba.
     *
     * @return string
     */
    public function getOverwriteDeviceGuid()
    {
        return $this->overwriteDeviceGuid;
    }

    /**
     * Sets a new overwriteDeviceGuid.
     *
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Pokud se Guid liší a element je false, vrací se chyba.
     *
     * @param string $overwriteDeviceGuid
     *
     * @return self
     */
    public function setOverwriteDeviceGuid($overwriteDeviceGuid)
    {
        $this->overwriteDeviceGuid = $overwriteDeviceGuid;

        return $this;
    }
}
