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

namespace Pohoda\BankAccount;

/**
 * Class representing BankAccountType.
 *
 * XSD Type: bankAccountType
 */
class BankAccountType
{
    private string $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private \Pohoda\BankAccount\ActionTypeType $actionType = null;
    private \Pohoda\BankAccount\BankAccountHeaderType $bankAccountHeader = null;

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
     * Gets as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\BankAccount\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\BankAccount\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as bankAccountHeader.
     *
     * @return \Pohoda\BankAccount\BankAccountHeaderType
     */
    public function getBankAccountHeader()
    {
        return $this->bankAccountHeader;
    }

    /**
     * Sets a new bankAccountHeader.
     *
     * @return self
     */
    public function setBankAccountHeader(?\Pohoda\BankAccount\BankAccountHeaderType $bankAccountHeader = null)
    {
        $this->bankAccountHeader = $bankAccountHeader;

        return $this;
    }
}
