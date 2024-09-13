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
 * Class representing ItemUserCodeType.
 *
 * XSD Type: itemUserCodeType
 */
class ItemUserCodeType extends ItemType
{
    private string $name = null;
    private int $constant = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as constant.
     *
     * @return int
     */
    public function getConstant()
    {
        return $this->constant;
    }

    /**
     * Sets a new constant.
     *
     * @param int $constant
     *
     * @return self
     */
    public function setConstant($constant)
    {
        $this->constant = $constant;

        return $this;
    }
}
