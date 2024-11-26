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
 * Class representing ListIntDocRequestType.
 *
 * XSD Type: listIntDocRequestType
 */
class ListIntDocRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $intDocVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestIntDocType[]
     */
    private array $requestIntDoc = [
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
     * Gets as intDocVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getIntDocVersion()
    {
        return $this->intDocVersion;
    }

    /**
     * Sets a new intDocVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $intDocVersion
     *
     * @return self
     */
    public function setIntDocVersion($intDocVersion)
    {
        $this->intDocVersion = $intDocVersion;

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
     * Adds as requestIntDoc.
     *
     * @return self
     */
    public function addToRequestIntDoc(\Pohoda\Filter\RequestIntDocType $requestIntDoc)
    {
        $this->requestIntDoc[] = $requestIntDoc;

        return $this;
    }

    /**
     * isset requestIntDoc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestIntDoc($index)
    {
        return isset($this->requestIntDoc[$index]);
    }

    /**
     * unset requestIntDoc.
     *
     * @param int|string $index
     */
    public function unsetRequestIntDoc($index): void
    {
        unset($this->requestIntDoc[$index]);
    }

    /**
     * Gets as requestIntDoc.
     *
     * @return \Pohoda\Filter\RequestIntDocType[]
     */
    public function getRequestIntDoc()
    {
        return $this->requestIntDoc;
    }

    /**
     * Sets a new requestIntDoc.
     *
     * @param \Pohoda\Filter\RequestIntDocType[] $requestIntDoc
     *
     * @return self
     */
    public function setRequestIntDoc(array $requestIntDoc)
    {
        $this->requestIntDoc = $requestIntDoc;

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
