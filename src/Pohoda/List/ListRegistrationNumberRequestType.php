<?php

namespace Pohoda\List;

/**
 * Class representing ListRegistrationNumberRequestType
 *
 *
 * XSD Type: listRegistrationNumberRequestType
 */
class ListRegistrationNumberRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $registrationNumberVersion
     */
    private $registrationNumberVersion = null;

    /**
     * @var \Pohoda\Filter\RequestRegistrationNumberType[] $requestRegistrationNumber
     */
    private $requestRegistrationNumber = [
    ];

    /**
     * Omezení exportu dat.
     *
     * @var \Pohoda\List\RestrictionDocParamType[] $restrictionData
     */
    private $restrictionData = [
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
     * Gets as registrationNumberVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getRegistrationNumberVersion()
    {
        return $this->registrationNumberVersion;
    }

    /**
     * Sets a new registrationNumberVersion
     *
     * Požadovaná verze.
     *
     * @param string $registrationNumberVersion
     * @return self
     */
    public function setRegistrationNumberVersion($registrationNumberVersion)
    {
        $this->registrationNumberVersion = $registrationNumberVersion;
        return $this;
    }

    /**
     * Adds as requestRegistrationNumber
     *
     * @return self
     * @param \Pohoda\Filter\RequestRegistrationNumberType $requestRegistrationNumber
     */
    public function addToRequestRegistrationNumber(\Pohoda\Filter\RequestRegistrationNumberType $requestRegistrationNumber)
    {
        $this->requestRegistrationNumber[] = $requestRegistrationNumber;
        return $this;
    }

    /**
     * isset requestRegistrationNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestRegistrationNumber($index)
    {
        return isset($this->requestRegistrationNumber[$index]);
    }

    /**
     * unset requestRegistrationNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestRegistrationNumber($index)
    {
        unset($this->requestRegistrationNumber[$index]);
    }

    /**
     * Gets as requestRegistrationNumber
     *
     * @return \Pohoda\Filter\RequestRegistrationNumberType[]
     */
    public function getRequestRegistrationNumber()
    {
        return $this->requestRegistrationNumber;
    }

    /**
     * Sets a new requestRegistrationNumber
     *
     * @param \Pohoda\Filter\RequestRegistrationNumberType[] $requestRegistrationNumber
     * @return self
     */
    public function setRequestRegistrationNumber(array $requestRegistrationNumber)
    {
        $this->requestRegistrationNumber = $requestRegistrationNumber;
        return $this;
    }

    /**
     * Adds as restrictionData
     *
     * Omezení exportu dat.
     *
     * @return self
     * @param \Pohoda\List\RestrictionDocParamType $restrictionData
     */
    public function addToRestrictionData(\Pohoda\List\RestrictionDocParamType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;
        return $this;
    }

    /**
     * isset restrictionData
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictionData($index)
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData
     *
     * Omezení exportu dat.
     *
     * @return \Pohoda\List\RestrictionDocParamType[]
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData
     *
     * Omezení exportu dat.
     *
     * @param \Pohoda\List\RestrictionDocParamType[] $restrictionData
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;
        return $this;
    }
}
