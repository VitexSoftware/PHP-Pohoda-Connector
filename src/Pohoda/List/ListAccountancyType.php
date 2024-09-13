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
 * Class representing ListAccountancyType.
 *
 * XSD Type: listAccountancyType
 */
class ListAccountancyType extends ListVersionType
{
    /**
     * @var \Pohoda\Accountancy\AccountancyType[]
     */
    private array $accountancy = [
    ];

    /**
     * Adds as accountancy.
     *
     * @return self
     */
    public function addToAccountancy(\Pohoda\Accountancy\AccountancyType $accountancy)
    {
        $this->accountancy[] = $accountancy;

        return $this;
    }

    /**
     * isset accountancy.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountancy($index)
    {
        return isset($this->accountancy[$index]);
    }

    /**
     * unset accountancy.
     *
     * @param int|string $index
     */
    public function unsetAccountancy($index): void
    {
        unset($this->accountancy[$index]);
    }

    /**
     * Gets as accountancy.
     *
     * @return \Pohoda\Accountancy\AccountancyType[]
     */
    public function getAccountancy()
    {
        return $this->accountancy;
    }

    /**
     * Sets a new accountancy.
     *
     * @param \Pohoda\Accountancy\AccountancyType[] $accountancy
     *
     * @return self
     */
    public function setAccountancy(?array $accountancy = null)
    {
        $this->accountancy = $accountancy;

        return $this;
    }
}
