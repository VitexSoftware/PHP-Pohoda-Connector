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
 * Class representing ListAccountingSingleEntryType.
 *
 * XSD Type: listAccountingSingleEntryType
 */
class ListAccountingSingleEntryType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemAccountingTypeSingleEntryType[]
     */
    private array $itemAccounting = [
    ];

    /**
     * Adds as itemAccounting.
     *
     * @return self
     */
    public function addToItemAccounting(\Pohoda\List\ItemAccountingTypeSingleEntryType $itemAccounting)
    {
        $this->itemAccounting[] = $itemAccounting;

        return $this;
    }

    /**
     * isset itemAccounting.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemAccounting($index)
    {
        return isset($this->itemAccounting[$index]);
    }

    /**
     * unset itemAccounting.
     *
     * @param int|string $index
     */
    public function unsetItemAccounting($index): void
    {
        unset($this->itemAccounting[$index]);
    }

    /**
     * Gets as itemAccounting.
     *
     * @return \Pohoda\List\ItemAccountingTypeSingleEntryType[]
     */
    public function getItemAccounting()
    {
        return $this->itemAccounting;
    }

    /**
     * Sets a new itemAccounting.
     *
     * @param \Pohoda\List\ItemAccountingTypeSingleEntryType[] $itemAccounting
     *
     * @return self
     */
    public function setItemAccounting(?array $itemAccounting = null)
    {
        $this->itemAccounting = $itemAccounting;

        return $this;
    }
}
