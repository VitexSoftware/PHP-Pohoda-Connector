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

namespace Pohoda\Filter;

/**
 * Class representing FilterDocsDeleteType.
 *
 * XSD Type: filterDocsDeleteType
 */
class FilterDocsDeleteType
{
    private ?string $agenda = null;

    /**
     * Filtr podle ID záznamu.
     */
    private ?int $id = null;

    /**
     * Evidenční číslo dokladu.
     */
    private ?string $number = null;

    /**
     * Gets as agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as id.
     *
     * Filtr podle ID záznamu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * Filtr podle ID záznamu.
     *
     * @param int $id
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
     * Evidenční číslo dokladu.
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
     * Evidenční číslo dokladu.
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
