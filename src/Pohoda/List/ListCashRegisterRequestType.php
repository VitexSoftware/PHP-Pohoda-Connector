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
 * Class representing ListCashRegisterRequestType.
 *
 * XSD Type: listCashRegisterRequestType
 */
class ListCashRegisterRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $cashRegisterVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestCashRegisterType[]
     */
    private array $requestCashRegister = [
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
     * Gets as cashRegisterVersion.
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
     * Sets a new cashRegisterVersion.
     *
     * Požadovaná verze.
     *
     * @param string $cashRegisterVersion
     *
     * @return self
     */
    public function setCashRegisterVersion($cashRegisterVersion)
    {
        $this->cashRegisterVersion = $cashRegisterVersion;

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
     * Adds as requestCashRegister.
     *
     * @return self
     */
    public function addToRequestCashRegister(\Pohoda\Filter\RequestCashRegisterType $requestCashRegister)
    {
        $this->requestCashRegister[] = $requestCashRegister;

        return $this;
    }

    /**
     * isset requestCashRegister.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestCashRegister($index)
    {
        return isset($this->requestCashRegister[$index]);
    }

    /**
     * unset requestCashRegister.
     *
     * @param int|string $index
     */
    public function unsetRequestCashRegister($index): void
    {
        unset($this->requestCashRegister[$index]);
    }

    /**
     * Gets as requestCashRegister.
     *
     * @return \Pohoda\Filter\RequestCashRegisterType[]
     */
    public function getRequestCashRegister()
    {
        return $this->requestCashRegister;
    }

    /**
     * Sets a new requestCashRegister.
     *
     * @param \Pohoda\Filter\RequestCashRegisterType[] $requestCashRegister
     *
     * @return self
     */
    public function setRequestCashRegister(array $requestCashRegister)
    {
        $this->requestCashRegister = $requestCashRegister;

        return $this;
    }
}
