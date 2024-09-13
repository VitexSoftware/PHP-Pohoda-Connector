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
 * Class representing ListUserCodePackType.
 *
 * XSD Type: listUserCodePackType
 */
class ListUserCodePackType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ListUserCodeType[]
     */
    private array $listUserCode = [
    ];

    /**
     * Adds as listUserCode.
     *
     * @return self
     */
    public function addToListUserCode(\Pohoda\List\ListUserCodeType $listUserCode)
    {
        $this->listUserCode[] = $listUserCode;

        return $this;
    }

    /**
     * isset listUserCode.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserCode($index)
    {
        return isset($this->listUserCode[$index]);
    }

    /**
     * unset listUserCode.
     *
     * @param int|string $index
     */
    public function unsetListUserCode($index): void
    {
        unset($this->listUserCode[$index]);
    }

    /**
     * Gets as listUserCode.
     *
     * @return \Pohoda\List\ListUserCodeType[]
     */
    public function getListUserCode()
    {
        return $this->listUserCode;
    }

    /**
     * Sets a new listUserCode.
     *
     * @param \Pohoda\List\ListUserCodeType[] $listUserCode
     *
     * @return self
     */
    public function setListUserCode(?array $listUserCode = null)
    {
        $this->listUserCode = $listUserCode;

        return $this;
    }
}
