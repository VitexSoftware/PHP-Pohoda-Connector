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

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing LinkedDocumentType.
 *
 * XSD Type: linkedDocumentType
 */
class LinkedDocumentType
{
    /**
     * ID prodejky.
     */
    private ?string $id = null;

    /**
     * Číslo prodejky.
     */
    private ?string $number = null;

    /**
     * Gets as id.
     *
     * ID prodejky.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID prodejky.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Číslo prodejky.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Číslo prodejky.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
