<?php

namespace Pohoda\List;

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
     * @var \Pohoda\List\ItemContractType[] $itemContract
     */
    private $itemContract = [

    ];

    /**
     * Adds as itemContract
     *
     * @return self
     * @param \Pohoda\List\ItemContractType $itemContract
     */
    public function addToItemContract(\Pohoda\List\ItemContractType $itemContract)
    {
        $this->itemContract[] = $itemContract;
        return $this;
    }

    /**
     * isset itemContract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemContract($index)
    {
        return isset($this->itemContract[$index]);
    }

    /**
     * unset itemContract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemContract($index)
    {
        unset($this->itemContract[$index]);
    }

    /**
     * Gets as itemContract
     *
     * @return \Pohoda\List\ItemContractType[]
     */
    public function getItemContract()
    {
        return $this->itemContract;
    }

    /**
     * Sets a new itemContract
     *
     * @param \Pohoda\List\ItemContractType[] $itemContract
     * @return self
     */
    public function setItemContract(array $itemContract = null)
    {
        $this->itemContract = $itemContract;
        return $this;
    }
}
