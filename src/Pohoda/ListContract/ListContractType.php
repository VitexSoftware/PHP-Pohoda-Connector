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

namespace Pohoda\ListContract;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListContractType.
 *
 * XSD Type: listContractType
 */
class ListContractType extends ListVersionType
{
    /**
     * @var \Pohoda\Contract\ContractType[]
     */
    private array $contract = [
    ];

    /**
     * Adds as contract.
     *
     * @return self
     */
    public function addToContract(\Pohoda\Contract\ContractType $contract)
    {
        $this->contract[] = $contract;

        return $this;
    }

    /**
     * isset contract.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract.
     *
     * @param int|string $index
     */
    public function unsetContract($index): void
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract.
     *
     * @return \Pohoda\Contract\ContractType[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract.
     *
     * @param \Pohoda\Contract\ContractType[] $contract
     *
     * @return self
     */
    public function setContract(?array $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }
}
