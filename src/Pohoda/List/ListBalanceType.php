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
 * Class representing ListBalanceType.
 *
 * XSD Type: listBalanceType
 */
class ListBalanceType extends ListVersionType
{
    /**
     * @var \Pohoda\Balance\BalanceType[]
     */
    private array $balance = [
    ];

    /**
     * Adds as balance.
     *
     * @return self
     */
    public function addToBalance(\Pohoda\Balance\BalanceType $balance)
    {
        $this->balance[] = $balance;

        return $this;
    }

    /**
     * isset balance.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBalance($index)
    {
        return isset($this->balance[$index]);
    }

    /**
     * unset balance.
     *
     * @param int|string $index
     */
    public function unsetBalance($index): void
    {
        unset($this->balance[$index]);
    }

    /**
     * Gets as balance.
     *
     * @return \Pohoda\Balance\BalanceType[]
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance.
     *
     * @param \Pohoda\Balance\BalanceType[] $balance
     *
     * @return self
     */
    public function setBalance(?array $balance = null)
    {
        $this->balance = $balance;

        return $this;
    }
}
