<?php

namespace Pohoda\List;

/**
 * Class representing ListPrijemkaRequestType
 *
 *
 * XSD Type: listPrijemkaRequestType
 */
class ListPrijemkaRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze výdejky.
     *
     * @var string $prijemkaVersion
     */
    private $prijemkaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestPrijemkaType[] $requestPrijemka
     */
    private $requestPrijemka = [

    ];

    /**
     * Omezení exportu dat dokladů.
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
     * Gets as prijemkaVersion
     *
     * Požadovaná verze výdejky.
     *
     * @return string
     */
    public function getPrijemkaVersion()
    {
        return $this->prijemkaVersion;
    }

    /**
     * Sets a new prijemkaVersion
     *
     * Požadovaná verze výdejky.
     *
     * @param string $prijemkaVersion
     * @return self
     */
    public function setPrijemkaVersion($prijemkaVersion)
    {
        $this->prijemkaVersion = $prijemkaVersion;
        return $this;
    }

    /**
     * Gets as extSystem
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
     * Sets a new extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;
        return $this;
    }

    /**
     * Adds as requestPrijemka
     *
     * @return self
     * @param \Pohoda\Filter\RequestPrijemkaType $requestPrijemka
     */
    public function addToRequestPrijemka(\Pohoda\Filter\RequestPrijemkaType $requestPrijemka)
    {
        $this->requestPrijemka[] = $requestPrijemka;
        return $this;
    }

    /**
     * isset requestPrijemka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestPrijemka($index)
    {
        return isset($this->requestPrijemka[$index]);
    }

    /**
     * unset requestPrijemka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestPrijemka($index)
    {
        unset($this->requestPrijemka[$index]);
    }

    /**
     * Gets as requestPrijemka
     *
     * @return \Pohoda\Filter\RequestPrijemkaType[]
     */
    public function getRequestPrijemka()
    {
        return $this->requestPrijemka;
    }

    /**
     * Sets a new requestPrijemka
     *
     * @param \Pohoda\Filter\RequestPrijemkaType[] $requestPrijemka
     * @return self
     */
    public function setRequestPrijemka(array $requestPrijemka)
    {
        $this->requestPrijemka = $requestPrijemka;
        return $this;
    }

    /**
     * Adds as restrictionData
     *
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
