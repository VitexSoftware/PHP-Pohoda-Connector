<?php

namespace Pohoda\ListContract;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListContractType
 *
 *
 * XSD Type: listContractType
 */
class ListContractType extends ListVersionType
{
    /**
     * @var \Pohoda\Contract\ContractType[] $contract
     */
    private $contract = [

    ];

    /**
     * Adds as contract
     *
     * @return self
     * @param \Pohoda\Contract\ContractType $contract
     */
    public function addToContract(\Pohoda\Contract\ContractType $contract)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * isset contract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContract($index)
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract
     *
     * @return \Pohoda\Contract\ContractType[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \Pohoda\Contract\ContractType[] $contract
     * @return self
     */
    public function setContract(array $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }
}
