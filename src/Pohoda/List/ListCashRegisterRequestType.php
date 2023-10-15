<?php

namespace Pohoda\List;

/**
 * Class representing ListCashRegisterRequestType
 *
 *
 * XSD Type: listCashRegisterRequestType
 */
class ListCashRegisterRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $cashRegisterVersion
     */
    private $cashRegisterVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestCashRegisterType[] $requestCashRegister
     */
    private $requestCashRegister = [

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
     * Gets as cashRegisterVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getCashRegisterVersion()
    {
        return $this->cashRegisterVersion;
    }

    /**
     * Sets a new cashRegisterVersion
     *
     * Požadovaná verze.
     *
     * @param string $cashRegisterVersion
     * @return self
     */
    public function setCashRegisterVersion($cashRegisterVersion)
    {
        $this->cashRegisterVersion = $cashRegisterVersion;
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
     * Adds as requestCashRegister
     *
     * @return self
     * @param \Pohoda\Filter\RequestCashRegisterType $requestCashRegister
     */
    public function addToRequestCashRegister(\Pohoda\Filter\RequestCashRegisterType $requestCashRegister)
    {
        $this->requestCashRegister[] = $requestCashRegister;
        return $this;
    }

    /**
     * isset requestCashRegister
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestCashRegister($index)
    {
        return isset($this->requestCashRegister[$index]);
    }

    /**
     * unset requestCashRegister
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestCashRegister($index)
    {
        unset($this->requestCashRegister[$index]);
    }

    /**
     * Gets as requestCashRegister
     *
     * @return \Pohoda\Filter\RequestCashRegisterType[]
     */
    public function getRequestCashRegister()
    {
        return $this->requestCashRegister;
    }

    /**
     * Sets a new requestCashRegister
     *
     * @param \Pohoda\Filter\RequestCashRegisterType[] $requestCashRegister
     * @return self
     */
    public function setRequestCashRegister(array $requestCashRegister)
    {
        $this->requestCashRegister = $requestCashRegister;
        return $this;
    }
}
