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
 * Class representing ImportResponseType.
 *
 * XSD Type: importResponseType
 */
class ImportResponseType
{
    private ?int $mKasaPackNum = null;
    private ?string $name = null;
    private ?string $deviceGuid = null;

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
}
