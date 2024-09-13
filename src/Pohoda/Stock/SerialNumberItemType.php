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

namespace Pohoda\Stock;

/**
 * Class representing SerialNumberItemType.
 *
 * XSD Type: serialNumberItemType
 */
class SerialNumberItemType
{
    /**
     * ID výrobní číslo nebo šarže.
     */
    private int $id = null;

    /**
     * Výrobní číslo nebo šarže. Tento element je vyžadován při vytvoření dokladu.
     */
    private string $serialNumber = null;

    /**
     * Stav zásoby.
     */
    private float $count = null;

    /**
     * Datum expirace skladové zásoby uvedené šarže.
     */
    private \DateTime $expiration = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Gets as id.
     *
     * ID výrobní číslo nebo šarže.
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
     * ID výrobní číslo nebo šarže.
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
     * Gets as serialNumber.
     *
     * Výrobní číslo nebo šarže. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber.
     *
     * Výrobní číslo nebo šarže. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Gets as count.
     *
     * Stav zásoby.
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count.
     *
     * Stav zásoby.
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Gets as expiration.
     *
     * Datum expirace skladové zásoby uvedené šarže.
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Sets a new expiration.
     *
     * Datum expirace skladové zásoby uvedené šarže.
     *
     * @return self
     */
    public function setExpiration(?\DateTime $expiration = null)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Poznámka.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }
}
