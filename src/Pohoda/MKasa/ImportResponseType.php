<?php

namespace Pohoda\MKasa;

/**
 * Class representing ImportResponseType
 *
 *
 * XSD Type: importResponseType
 */
class ImportResponseType
{
    /**
     * @var int $mKasaPackNum
     */
    private $mKasaPackNum = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $deviceGuid
     */
    private $deviceGuid = null;

    /**
     * Gets as mKasaPackNum
     *
     * @return int
     */
    public function getMKasaPackNum()
    {
        return $this->mKasaPackNum;
    }

    /**
     * Sets a new mKasaPackNum
     *
     * @param int $mKasaPackNum
     * @return self
     */
    public function setMKasaPackNum($mKasaPackNum)
    {
        $this->mKasaPackNum = $mKasaPackNum;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as deviceGuid
     *
     * @return string
     */
    public function getDeviceGuid()
    {
        return $this->deviceGuid;
    }

    /**
     * Sets a new deviceGuid
     *
     * @param string $deviceGuid
     * @return self
     */
    public function setDeviceGuid($deviceGuid)
    {
        $this->deviceGuid = $deviceGuid;
        return $this;
    }
}

