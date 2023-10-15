<?php

namespace Pohoda\Bank;

/**
 * Class representing BankDetailType
 *
 *
 * XSD Type: bankDetailType
 */
class BankDetailType
{
    /**
     * @var \Pohoda\Bank\BankItemType[] $bankItem
     */
    private $bankItem = [

    ];

    /**
     * Adds as bankItem
     *
     * @return self
     * @param \Pohoda\Bank\BankItemType $bankItem
     */
    public function addToBankItem(\Pohoda\Bank\BankItemType $bankItem)
    {
        $this->bankItem[] = $bankItem;
        return $this;
    }

    /**
     * isset bankItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankItem($index)
    {
        return isset($this->bankItem[$index]);
    }

    /**
     * unset bankItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankItem($index)
    {
        unset($this->bankItem[$index]);
    }

    /**
     * Gets as bankItem
     *
     * @return \Pohoda\Bank\BankItemType[]
     */
    public function getBankItem()
    {
        return $this->bankItem;
    }

    /**
     * Sets a new bankItem
     *
     * @param \Pohoda\Bank\BankItemType[] $bankItem
     * @return self
     */
    public function setBankItem(array $bankItem)
    {
        $this->bankItem = $bankItem;
        return $this;
    }
}
