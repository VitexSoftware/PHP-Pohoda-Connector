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
 * Class representing ListBankType.
 *
 * XSD Type: listBankType
 */
class ListBankType extends ListVersionType
{
    /**
     * @var \Pohoda\Bank\BankType[]
     */
    private array $bank = [
    ];

    /**
     * Adds as bank.
     *
     * @return self
     */
    public function addToBank(\Pohoda\Bank\BankType $bank)
    {
        $this->bank[] = $bank;

        return $this;
    }

    /**
     * isset bank.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBank($index)
    {
        return isset($this->bank[$index]);
    }

    /**
     * unset bank.
     *
     * @param int|string $index
     */
    public function unsetBank($index): void
    {
        unset($this->bank[$index]);
    }

    /**
     * Gets as bank.
     *
     * @return \Pohoda\Bank\BankType[]
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets a new bank.
     *
     * @param \Pohoda\Bank\BankType[] $bank
     *
     * @return self
     */
    public function setBank(?array $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }
}
