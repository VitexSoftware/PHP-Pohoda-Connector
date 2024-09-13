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
 * Class representing ItemCashType.
 *
 * XSD Type: itemCashType
 */
class ItemCashType extends ItemType
{
    private string $codeCurrency = null;
    private string $name = null;

    /**
     * Gets as codeCurrency.
     *
     * @return string
     */
    public function getCodeCurrency()
    {
        return $this->codeCurrency;
    }

    /**
     * Sets a new codeCurrency.
     *
     * @param string $codeCurrency
     *
     * @return self
     */
    public function setCodeCurrency($codeCurrency)
    {
        $this->codeCurrency = $codeCurrency;

        return $this;
    }

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
}
