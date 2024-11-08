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

namespace Pohoda\ActionPrice;

/**
 * Class representing GroupType.
 *
 * XSD Type: groupType
 */
class GroupType
{
    /**
     * Název skupiny adres.
     */
    private ?string $name = null;

    /**
     * Popis skupiny adres.
     */
    private ?string $descripton = null;

    /**
     * Gets as name.
     *
     * Název skupiny adres.
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
     * Název skupiny adres.
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
     * Gets as descripton.
     *
     * Popis skupiny adres.
     *
     * @return string
     */
    public function getDescripton()
    {
        return $this->descripton;
    }

    /**
     * Sets a new descripton.
     *
     * Popis skupiny adres.
     *
     * @param string $descripton
     *
     * @return self
     */
    public function setDescripton($descripton)
    {
        $this->descripton = $descripton;

        return $this;
    }
}
