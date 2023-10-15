<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCashRegisterType
 *
 *
 * XSD Type: listCashRegisterType
 */
class ListCashRegisterType extends ListVersionType
{
    /**
     * @var \Pohoda\CashRegister\CashRegisterType[] $cashRegister
     */
    private $cashRegister = [

    ];

    /**
     * Adds as cashRegister
     *
     * @return self
     * @param \Pohoda\CashRegister\CashRegisterType $cashRegister
     */
    public function addToCashRegister(\Pohoda\CashRegister\CashRegisterType $cashRegister)
    {
        $this->cashRegister[] = $cashRegister;
        return $this;
    }

    /**
     * isset cashRegister
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCashRegister($index)
    {
        return isset($this->cashRegister[$index]);
    }

    /**
     * unset cashRegister
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCashRegister($index)
    {
        unset($this->cashRegister[$index]);
    }

    /**
     * Gets as cashRegister
     *
     * @return \Pohoda\CashRegister\CashRegisterType[]
     */
    public function getCashRegister()
    {
        return $this->cashRegister;
    }

    /**
     * Sets a new cashRegister
     *
     * @param \Pohoda\CashRegister\CashRegisterType[] $cashRegister
     * @return self
     */
    public function setCashRegister(array $cashRegister = null)
    {
        $this->cashRegister = $cashRegister;
        return $this;
    }
}
