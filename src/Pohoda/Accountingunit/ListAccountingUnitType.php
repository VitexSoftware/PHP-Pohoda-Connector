<?php

namespace Pohoda\Accountingunit;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingUnitType
 *
 *
 * XSD Type: listAccountingUnitType
 */
class ListAccountingUnitType extends ListVersionType
{
    /**
     * @var \Pohoda\Accountingunit\ItemAccountingUnitType[] $itemAccountingUnit
     */
    private $itemAccountingUnit = [
        
    ];

    /**
     * Adds as itemAccountingUnit
     *
     * @return self
     * @param \Pohoda\Accountingunit\ItemAccountingUnitType $itemAccountingUnit
     */
    public function addToItemAccountingUnit(\Pohoda\Accountingunit\ItemAccountingUnitType $itemAccountingUnit)
    {
        $this->itemAccountingUnit[] = $itemAccountingUnit;
        return $this;
    }

    /**
     * isset itemAccountingUnit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemAccountingUnit($index)
    {
        return isset($this->itemAccountingUnit[$index]);
    }

    /**
     * unset itemAccountingUnit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemAccountingUnit($index)
    {
        unset($this->itemAccountingUnit[$index]);
    }

    /**
     * Gets as itemAccountingUnit
     *
     * @return \Pohoda\Accountingunit\ItemAccountingUnitType[]
     */
    public function getItemAccountingUnit()
    {
        return $this->itemAccountingUnit;
    }

    /**
     * Sets a new itemAccountingUnit
     *
     * @param \Pohoda\Accountingunit\ItemAccountingUnitType[] $itemAccountingUnit
     * @return self
     */
    public function setItemAccountingUnit(array $itemAccountingUnit = null)
    {
        $this->itemAccountingUnit = $itemAccountingUnit;
        return $this;
    }
}

