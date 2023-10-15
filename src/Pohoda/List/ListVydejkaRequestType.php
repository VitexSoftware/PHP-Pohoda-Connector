<?php

namespace Pohoda\List;

/**
 * Class representing ListVydejkaRequestType
 *
 *
 * XSD Type: listVydejkaRequestType
 */
class ListVydejkaRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze výdejky.
     *
     * @var string $vydejkaVersion
     */
    private $vydejkaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestVydejkaType[] $requestVydejka
     */
    private $requestVydejka = [

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
     * Gets as vydejkaVersion
     *
     * Požadovaná verze výdejky.
     *
     * @return string
     */
    public function getVydejkaVersion()
    {
        return $this->vydejkaVersion;
    }

    /**
     * Sets a new vydejkaVersion
     *
     * Požadovaná verze výdejky.
     *
     * @param string $vydejkaVersion
     * @return self
     */
    public function setVydejkaVersion($vydejkaVersion)
    {
        $this->vydejkaVersion = $vydejkaVersion;
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
     * Adds as requestVydejka
     *
     * @return self
     * @param \Pohoda\Filter\RequestVydejkaType $requestVydejka
     */
    public function addToRequestVydejka(\Pohoda\Filter\RequestVydejkaType $requestVydejka)
    {
        $this->requestVydejka[] = $requestVydejka;
        return $this;
    }

    /**
     * isset requestVydejka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestVydejka($index)
    {
        return isset($this->requestVydejka[$index]);
    }

    /**
     * unset requestVydejka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestVydejka($index)
    {
        unset($this->requestVydejka[$index]);
    }

    /**
     * Gets as requestVydejka
     *
     * @return \Pohoda\Filter\RequestVydejkaType[]
     */
    public function getRequestVydejka()
    {
        return $this->requestVydejka;
    }

    /**
     * Sets a new requestVydejka
     *
     * @param \Pohoda\Filter\RequestVydejkaType[] $requestVydejka
     * @return self
     */
    public function setRequestVydejka(array $requestVydejka)
    {
        $this->requestVydejka = $requestVydejka;
        return $this;
    }
}
