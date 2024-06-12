<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListBalanceType
 *
 *
 * XSD Type: listBalanceType
 */
class ListBalanceType extends ListVersionType
{
    /**
     * @var \Pohoda\Balance\BalanceType[] $balance
     */
    private $balance = [
    ];

    /**
     * Adds as balance
     *
     * @return self
     * @param \Pohoda\Balance\BalanceType $balance
     */
    public function addToBalance(\Pohoda\Balance\BalanceType $balance)
    {
        $this->balance[] = $balance;
        return $this;
    }

    /**
     * isset balance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBalance($index)
    {
        return isset($this->balance[$index]);
    }

    /**
     * unset balance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBalance($index)
    {
        unset($this->balance[$index]);
    }

    /**
     * Gets as balance
     *
     * @return \Pohoda\Balance\BalanceType[]
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * @param \Pohoda\Balance\BalanceType[] $balance
     * @return self
     */
    public function setBalance(array $balance = null)
    {
        $this->balance = $balance;
        return $this;
    }
}
