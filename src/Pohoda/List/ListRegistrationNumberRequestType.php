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
 * Class representing ListRegistrationNumberRequestType.
 *
 * XSD Type: listRegistrationNumberRequestType
 */
class ListRegistrationNumberRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $registrationNumberVersion = null;

    /**
     * @var \Pohoda\Filter\RequestRegistrationNumberType[]
     */
    private array $requestRegistrationNumber = [
    ];

    /**
     * Omezení exportu dat.
     *
     * @var \Pohoda\List\RestrictionDocParamType[]
     */
    private array $restrictionData = [
    ];

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
     * Gets as registrationNumberVersion.
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
     * Sets a new registrationNumberVersion.
     *
     * Požadovaná verze.
     *
     * @param string $registrationNumberVersion
     *
     * @return self
     */
    public function setRegistrationNumberVersion($registrationNumberVersion)
    {
        $this->registrationNumberVersion = $registrationNumberVersion;

        return $this;
    }

    /**
     * Adds as requestRegistrationNumber.
     *
     * @return self
     */
    public function addToRequestRegistrationNumber(\Pohoda\Filter\RequestRegistrationNumberType $requestRegistrationNumber)
    {
        $this->requestRegistrationNumber[] = $requestRegistrationNumber;

        return $this;
    }

    /**
     * isset requestRegistrationNumber.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestRegistrationNumber($index)
    {
        return isset($this->requestRegistrationNumber[$index]);
    }

    /**
     * unset requestRegistrationNumber.
     *
     * @param int|string $index
     */
    public function unsetRequestRegistrationNumber($index): void
    {
        unset($this->requestRegistrationNumber[$index]);
    }

    /**
     * Gets as requestRegistrationNumber.
     *
     * @return \Pohoda\Filter\RequestRegistrationNumberType[]
     */
    public function getRequestRegistrationNumber()
    {
        return $this->requestRegistrationNumber;
    }

    /**
     * Sets a new requestRegistrationNumber.
     *
     * @param \Pohoda\Filter\RequestRegistrationNumberType[] $requestRegistrationNumber
     *
     * @return self
     */
    public function setRequestRegistrationNumber(array $requestRegistrationNumber)
    {
        $this->requestRegistrationNumber = $requestRegistrationNumber;

        return $this;
    }

    /**
     * Adds as restrictionData.
     *
     * Omezení exportu dat.
     *
     * @return self
     */
    public function addToRestrictionData(\Pohoda\List\RestrictionDocParamType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;

        return $this;
    }

    /**
     * isset restrictionData.
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData.
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     */
    public function unsetRestrictionData($index): void
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData.
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
     * Sets a new restrictionData.
     *
     * Omezení exportu dat.
     *
     * @param \Pohoda\List\RestrictionDocParamType[] $restrictionData
     *
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;

        return $this;
    }
}
