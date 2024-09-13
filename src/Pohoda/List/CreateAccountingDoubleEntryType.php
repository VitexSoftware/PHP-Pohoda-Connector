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

/**
 * Class representing CreateAccountingDoubleEntryType.
 *
 * XSD Type: createAccountingDoubleEntryType
 */
class CreateAccountingDoubleEntryType
{
    private string $version = null;

    /**
     * @var \Pohoda\List\CreateAccountingType[]
     */
    private array $createAccounting = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as createAccounting.
     *
     * @return self
     */
    public function addToCreateAccounting(\Pohoda\List\CreateAccountingType $createAccounting)
    {
        $this->createAccounting[] = $createAccounting;

        return $this;
    }

    /**
     * isset createAccounting.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCreateAccounting($index)
    {
        return isset($this->createAccounting[$index]);
    }

    /**
     * unset createAccounting.
     *
     * @param int|string $index
     */
    public function unsetCreateAccounting($index): void
    {
        unset($this->createAccounting[$index]);
    }

    /**
     * Gets as createAccounting.
     *
     * @return \Pohoda\List\CreateAccountingType[]
     */
    public function getCreateAccounting()
    {
        return $this->createAccounting;
    }

    /**
     * Sets a new createAccounting.
     *
     * @param \Pohoda\List\CreateAccountingType[] $createAccounting
     *
     * @return self
     */
    public function setCreateAccounting(array $createAccounting)
    {
        $this->createAccounting = $createAccounting;

        return $this;
    }
}
