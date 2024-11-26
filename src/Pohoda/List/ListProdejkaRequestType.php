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
 * Class representing ListProdejkaRequestType.
 *
 * XSD Type: listProdejkaRequestType
 */
class ListProdejkaRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $prodejkaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestProdejkaType[]
     */
    private array $requestProdejka = [
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
     * Gets as prodejkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getProdejkaVersion()
    {
        return $this->prodejkaVersion;
    }

    /**
     * Sets a new prodejkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $prodejkaVersion
     *
     * @return self
     */
    public function setProdejkaVersion($prodejkaVersion)
    {
        $this->prodejkaVersion = $prodejkaVersion;

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
     * Adds as requestProdejka.
     *
     * @return self
     */
    public function addToRequestProdejka(\Pohoda\Filter\RequestProdejkaType $requestProdejka)
    {
        $this->requestProdejka[] = $requestProdejka;

        return $this;
    }

    /**
     * isset requestProdejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestProdejka($index)
    {
        return isset($this->requestProdejka[$index]);
    }

    /**
     * unset requestProdejka.
     *
     * @param int|string $index
     */
    public function unsetRequestProdejka($index): void
    {
        unset($this->requestProdejka[$index]);
    }

    /**
     * Gets as requestProdejka.
     *
     * @return \Pohoda\Filter\RequestProdejkaType[]
     */
    public function getRequestProdejka()
    {
        return $this->requestProdejka;
    }

    /**
     * Sets a new requestProdejka.
     *
     * @param \Pohoda\Filter\RequestProdejkaType[] $requestProdejka
     *
     * @return self
     */
    public function setRequestProdejka(array $requestProdejka)
    {
        $this->requestProdejka = $requestProdejka;

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
