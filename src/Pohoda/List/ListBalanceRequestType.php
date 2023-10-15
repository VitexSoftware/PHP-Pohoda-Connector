<?php

namespace Pohoda\List;

/**
 * Class representing ListBalanceRequestType
 *
 *
 * XSD Type: listBalanceRequestType
 */
class ListBalanceRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $balanceVersion
     */
    private $balanceVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\List\RequestBalanceType $requestBalance
     */
    private $requestBalance = null;

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
     * Gets as balanceVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getBalanceVersion()
    {
        return $this->balanceVersion;
    }

    /**
     * Sets a new balanceVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $balanceVersion
     * @return self
     */
    public function setBalanceVersion($balanceVersion)
    {
        $this->balanceVersion = $balanceVersion;
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
     * Gets as requestBalance
     *
     * @return \Pohoda\List\RequestBalanceType
     */
    public function getRequestBalance()
    {
        return $this->requestBalance;
    }

    /**
     * Sets a new requestBalance
     *
     * @param \Pohoda\List\RequestBalanceType $requestBalance
     * @return self
     */
    public function setRequestBalance(\Pohoda\List\RequestBalanceType $requestBalance)
    {
        $this->requestBalance = $requestBalance;
        return $this;
    }
}

