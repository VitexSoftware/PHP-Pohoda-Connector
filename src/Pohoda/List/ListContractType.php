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
 * Class representing ListContractType.
 *
 * XSD Type: listContractType
 */
class ListContractType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemContractType[]
     */
    private array $itemContract = [
    ];

    /**
     * Adds as itemContract.
     *
     * @return self
     */
    public function addToItemContract(\Pohoda\List\ItemContractType $itemContract)
    {
        $this->itemContract[] = $itemContract;

        return $this;
    }

    /**
     * isset itemContract.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemContract($index)
    {
        return isset($this->itemContract[$index]);
    }

    /**
     * unset itemContract.
     *
     * @param int|string $index
     */
    public function unsetItemContract($index): void
    {
        unset($this->itemContract[$index]);
    }

    /**
     * Gets as itemContract.
     *
     * @return \Pohoda\List\ItemContractType[]
     */
    public function getItemContract()
    {
        return $this->itemContract;
    }

    /**
     * Sets a new itemContract.
     *
     * @param \Pohoda\List\ItemContractType[] $itemContract
     *
     * @return self
     */
    public function setItemContract(?array $itemContract = null)
    {
        $this->itemContract = $itemContract;

        return $this;
    }
}
