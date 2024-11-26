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

namespace Pohoda\CashRegister;

/**
 * Class representing CashRegisterType.
 *
 * XSD Type: cashRegisterType
 */
class CashRegisterType
{
    private ?string $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private ?\Pohoda\CashRegister\ActionTypeType $actionType = null;
    private ?\Pohoda\CashRegister\CashRegisterHeaderType $cashRegisterHeader = null;

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
     * @return \Pohoda\CashRegister\ActionTypeType
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
    public function setActionType(?\Pohoda\CashRegister\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as cashRegisterHeader.
     *
     * @return \Pohoda\CashRegister\CashRegisterHeaderType
     */
    public function getCashRegisterHeader()
    {
        return $this->cashRegisterHeader;
    }

    /**
     * Sets a new cashRegisterHeader.
     *
     * @return self
     */
    public function setCashRegisterHeader(?\Pohoda\CashRegister\CashRegisterHeaderType $cashRegisterHeader = null)
    {
        $this->cashRegisterHeader = $cashRegisterHeader;

        return $this;
    }
}
