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
 * Class representing ListBankAccountRequestType.
 *
 * XSD Type: listBankAccountRequestType
 */
class ListBankAccountRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $bankAccountVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestBankAccountType[]
     */
    private array $requestBankAccount = [
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
     * Gets as bankAccountVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getBankAccountVersion()
    {
        return $this->bankAccountVersion;
    }

    /**
     * Sets a new bankAccountVersion.
     *
     * Požadovaná verze.
     *
     * @param string $bankAccountVersion
     *
     * @return self
     */
    public function setBankAccountVersion($bankAccountVersion)
    {
        $this->bankAccountVersion = $bankAccountVersion;

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
     * Adds as requestBankAccount.
     *
     * @return self
     */
    public function addToRequestBankAccount(\Pohoda\Filter\RequestBankAccountType $requestBankAccount)
    {
        $this->requestBankAccount[] = $requestBankAccount;

        return $this;
    }

    /**
     * isset requestBankAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestBankAccount($index)
    {
        return isset($this->requestBankAccount[$index]);
    }

    /**
     * unset requestBankAccount.
     *
     * @param int|string $index
     */
    public function unsetRequestBankAccount($index): void
    {
        unset($this->requestBankAccount[$index]);
    }

    /**
     * Gets as requestBankAccount.
     *
     * @return \Pohoda\Filter\RequestBankAccountType[]
     */
    public function getRequestBankAccount()
    {
        return $this->requestBankAccount;
    }

    /**
     * Sets a new requestBankAccount.
     *
     * @param \Pohoda\Filter\RequestBankAccountType[] $requestBankAccount
     *
     * @return self
     */
    public function setRequestBankAccount(array $requestBankAccount)
    {
        $this->requestBankAccount = $requestBankAccount;

        return $this;
    }
}
