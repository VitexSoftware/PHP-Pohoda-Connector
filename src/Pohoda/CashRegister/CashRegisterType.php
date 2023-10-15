<?php

namespace Pohoda\CashRegister;

/**
 * Class representing CashRegisterType
 *
 *
 * XSD Type: cashRegisterType
 */
class CashRegisterType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\CashRegister\ActionTypeType $actionType
     */
    private $actionType = null;

    /**
     * @var \Pohoda\CashRegister\CashRegisterHeaderType $cashRegisterHeader
     */
    private $cashRegisterHeader = null;

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
     * Gets as actionType
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
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\CashRegister\ActionTypeType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\CashRegister\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as cashRegisterHeader
     *
     * @return \Pohoda\CashRegister\CashRegisterHeaderType
     */
    public function getCashRegisterHeader()
    {
        return $this->cashRegisterHeader;
    }

    /**
     * Sets a new cashRegisterHeader
     *
     * @param \Pohoda\CashRegister\CashRegisterHeaderType $cashRegisterHeader
     * @return self
     */
    public function setCashRegisterHeader(?\Pohoda\CashRegister\CashRegisterHeaderType $cashRegisterHeader = null)
    {
        $this->cashRegisterHeader = $cashRegisterHeader;
        return $this;
    }
}
