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

namespace Pohoda\Accountingunit;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountingUnitType.
 *
 * XSD Type: listAccountingUnitType
 */
class ListAccountingUnitType extends ListVersionType
{
    /**
     * @var \Pohoda\Accountingunit\ItemAccountingUnitType[]
     */
    private array $itemAccountingUnit = [
    ];

    /**
     * Adds as itemAccountingUnit.
     *
     * @return self
     */
    public function addToItemAccountingUnit(\Pohoda\Accountingunit\ItemAccountingUnitType $itemAccountingUnit)
    {
        $this->itemAccountingUnit[] = $itemAccountingUnit;

        return $this;
    }

    /**
     * isset itemAccountingUnit.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemAccountingUnit($index)
    {
        return isset($this->itemAccountingUnit[$index]);
    }

    /**
     * unset itemAccountingUnit.
     *
     * @param int|string $index
     */
    public function unsetItemAccountingUnit($index): void
    {
        unset($this->itemAccountingUnit[$index]);
    }

    /**
     * Gets as itemAccountingUnit.
     *
     * @return \Pohoda\Accountingunit\ItemAccountingUnitType[]
     */
    public function getItemAccountingUnit()
    {
        return $this->itemAccountingUnit;
    }

    /**
     * Sets a new itemAccountingUnit.
     *
     * @param \Pohoda\Accountingunit\ItemAccountingUnitType[] $itemAccountingUnit
     *
     * @return self
     */
    public function setItemAccountingUnit(?array $itemAccountingUnit = null)
    {
        $this->itemAccountingUnit = $itemAccountingUnit;

        return $this;
    }
}
