<?php

namespace Pohoda\List;

/**
 * Class representing ListUserCodeRequestType
 *
 *
 * XSD Type: listUserCodeRequestType
 */
class ListUserCodeRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $listVersion
     */
    private $listVersion = null;

    /**
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @var \Pohoda\List\RequestUserCodeType[] $requestUserCode
     */
    private $requestUserCode = [

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
     * Gets as listVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getListVersion()
    {
        return $this->listVersion;
    }

    /**
     * Sets a new listVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $listVersion
     * @return self
     */
    public function setListVersion($listVersion)
    {
        $this->listVersion = $listVersion;
        return $this;
    }

    /**
     * Adds as requestUserCode
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @return self
     * @param \Pohoda\List\RequestUserCodeType $requestUserCode
     */
    public function addToRequestUserCode(\Pohoda\List\RequestUserCodeType $requestUserCode)
    {
        $this->requestUserCode[] = $requestUserCode;
        return $this;
    }

    /**
     * isset requestUserCode
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestUserCode($index)
    {
        return isset($this->requestUserCode[$index]);
    }

    /**
     * unset requestUserCode
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestUserCode($index)
    {
        unset($this->requestUserCode[$index]);
    }

    /**
     * Gets as requestUserCode
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @return \Pohoda\List\RequestUserCodeType[]
     */
    public function getRequestUserCode()
    {
        return $this->requestUserCode;
    }

    /**
     * Sets a new requestUserCode
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param \Pohoda\List\RequestUserCodeType[] $requestUserCode
     * @return self
     */
    public function setRequestUserCode(array $requestUserCode = null)
    {
        $this->requestUserCode = $requestUserCode;
        return $this;
    }
}
