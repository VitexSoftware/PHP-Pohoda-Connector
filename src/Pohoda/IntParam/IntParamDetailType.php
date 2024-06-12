<?php

namespace Pohoda\IntParam;

/**
 * Class representing IntParamDetailType
 *
 *
 * XSD Type: intParamDetailType
 */
class IntParamDetailType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\IntParam\IntParamType[] $intParam
     */
    private $intParam = [
    ];

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
     * Adds as intParam
     *
     * @return self
     * @param \Pohoda\IntParam\IntParamType $intParam
     */
    public function addToIntParam(\Pohoda\IntParam\IntParamType $intParam)
    {
        $this->intParam[] = $intParam;
        return $this;
    }

    /**
     * isset intParam
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntParam($index)
    {
        return isset($this->intParam[$index]);
    }

    /**
     * unset intParam
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntParam($index)
    {
        unset($this->intParam[$index]);
    }

    /**
     * Gets as intParam
     *
     * @return \Pohoda\IntParam\IntParamType[]
     */
    public function getIntParam()
    {
        return $this->intParam;
    }

    /**
     * Sets a new intParam
     *
     * @param \Pohoda\IntParam\IntParamType[] $intParam
     * @return self
     */
    public function setIntParam(array $intParam = null)
    {
        $this->intParam = $intParam;
        return $this;
    }
}
