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
 * Class representing ListVyrobaRequestType.
 *
 * XSD Type: listVyrobaRequestType
 */
class ListVyrobaRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $vyrobaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestVyrobaType[]
     */
    private array $requestVyroba = [
    ];

    /**
     * Omezení exportu dat dokladů.
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
     * Gets as vyrobaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getVyrobaVersion()
    {
        return $this->vyrobaVersion;
    }

    /**
     * Sets a new vyrobaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $vyrobaVersion
     *
     * @return self
     */
    public function setVyrobaVersion($vyrobaVersion)
    {
        $this->vyrobaVersion = $vyrobaVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Adds as requestVyroba.
     *
     * @return self
     */
    public function addToRequestVyroba(\Pohoda\Filter\RequestVyrobaType $requestVyroba)
    {
        $this->requestVyroba[] = $requestVyroba;

        return $this;
    }

    /**
     * isset requestVyroba.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestVyroba($index)
    {
        return isset($this->requestVyroba[$index]);
    }

    /**
     * unset requestVyroba.
     *
     * @param int|string $index
     */
    public function unsetRequestVyroba($index): void
    {
        unset($this->requestVyroba[$index]);
    }

    /**
     * Gets as requestVyroba.
     *
     * @return \Pohoda\Filter\RequestVyrobaType[]
     */
    public function getRequestVyroba()
    {
        return $this->requestVyroba;
    }

    /**
     * Sets a new requestVyroba.
     *
     * @param \Pohoda\Filter\RequestVyrobaType[] $requestVyroba
     *
     * @return self
     */
    public function setRequestVyroba(array $requestVyroba)
    {
        $this->requestVyroba = $requestVyroba;

        return $this;
    }

    /**
     * Adds as restrictionData.
     *
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
