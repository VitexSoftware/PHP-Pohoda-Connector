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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCashRegisterType.
 *
 * XSD Type: listCashRegisterType
 */
class ListCashRegisterType extends ListVersionType
{
    /**
     * @var \Pohoda\CashRegister\CashRegisterType[]
     */
    private array $cashRegister = [
    ];

    /**
     * Adds as cashRegister.
     *
     * @return self
     */
    public function addToCashRegister(\Pohoda\CashRegister\CashRegisterType $cashRegister)
    {
        $this->cashRegister[] = $cashRegister;

        return $this;
    }

    /**
     * isset cashRegister.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCashRegister($index)
    {
        return isset($this->cashRegister[$index]);
    }

    /**
     * unset cashRegister.
     *
     * @param int|string $index
     */
    public function unsetCashRegister($index): void
    {
        unset($this->cashRegister[$index]);
    }

    /**
     * Gets as cashRegister.
     *
     * @return \Pohoda\CashRegister\CashRegisterType[]
     */
    public function getCashRegister()
    {
        return $this->cashRegister;
    }

    /**
     * Sets a new cashRegister.
     *
     * @param \Pohoda\CashRegister\CashRegisterType[] $cashRegister
     *
     * @return self
     */
    public function setCashRegister(?array $cashRegister = null)
    {
        $this->cashRegister = $cashRegister;

        return $this;
    }
}
