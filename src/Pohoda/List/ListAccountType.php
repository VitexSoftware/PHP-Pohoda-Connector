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
 * Class representing ListAccountType.
 *
 * XSD Type: listAccountType
 */
class ListAccountType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemAccountType[]
     */
    private array $itemAccount = [
    ];

    /**
     * Adds as itemAccount.
     *
     * @return self
     */
    public function addToItemAccount(\Pohoda\List\ItemAccountType $itemAccount)
    {
        $this->itemAccount[] = $itemAccount;

        return $this;
    }

    /**
     * isset itemAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemAccount($index)
    {
        return isset($this->itemAccount[$index]);
    }

    /**
     * unset itemAccount.
     *
     * @param int|string $index
     */
    public function unsetItemAccount($index): void
    {
        unset($this->itemAccount[$index]);
    }

    /**
     * Gets as itemAccount.
     *
     * @return \Pohoda\List\ItemAccountType[]
     */
    public function getItemAccount()
    {
        return $this->itemAccount;
    }

    /**
     * Sets a new itemAccount.
     *
     * @param \Pohoda\List\ItemAccountType[] $itemAccount
     *
     * @return self
     */
    public function setItemAccount(?array $itemAccount = null)
    {
        $this->itemAccount = $itemAccount;

        return $this;
    }
}
