<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListBankType
 *
 *
 * XSD Type: listBankType
 */
class ListBankType extends ListVersionType
{
    /**
     * @var \Pohoda\Bank\BankType[] $bank
     */
    private $bank = [
    ];

    /**
     * Adds as bank
     *
     * @return self
     * @param \Pohoda\Bank\BankType $bank
     */
    public function addToBank(\Pohoda\Bank\BankType $bank)
    {
        $this->bank[] = $bank;
        return $this;
    }

    /**
     * isset bank
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBank($index)
    {
        return isset($this->bank[$index]);
    }

    /**
     * unset bank
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBank($index)
    {
        unset($this->bank[$index]);
    }

    /**
     * Gets as bank
     *
     * @return \Pohoda\Bank\BankType[]
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets a new bank
     *
     * @param \Pohoda\Bank\BankType[] $bank
     * @return self
     */
    public function setBank(array $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }
}
