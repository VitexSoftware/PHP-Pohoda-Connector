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

namespace Pohoda\RecyclingContrib;

/**
 * Class representing RecyclingContribHeaderType.
 *
 * XSD Type: recyclingContribHeaderType
 */
class RecyclingContribHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     */
    private ?int $id = null;

    /**
     * Zkratka recyklačního příspěvku.
     */
    private ?string $code = null;

    /**
     * Název recyklačního příspěvku.
     */
    private ?string $name = null;

    /**
     * Text recyklačního příspěvku, který se bude tisknout na daňových dokladech.
     */
    private ?string $text = null;

    /**
     * Částka recyklačního příspěvku.
     */
    private ?float $amount = null;

    /**
     * M. j. recyklačního příspěvku.
     */
    private ?string $unit = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as id.
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Gets as code.
     *
     * Zkratka recyklačního příspěvku.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code.
     *
     * Zkratka recyklačního příspěvku.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název recyklačního příspěvku.
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
     * Název recyklačního příspěvku.
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
     * Gets as text.
     *
     * Text recyklačního příspěvku, který se bude tisknout na daňových dokladech.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text.
     *
     * Text recyklačního příspěvku, který se bude tisknout na daňových dokladech.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as amount.
     *
     * Částka recyklačního příspěvku.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount.
     *
     * Částka recyklačního příspěvku.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as unit.
     *
     * M. j. recyklačního příspěvku.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit.
     *
     * M. j. recyklačního příspěvku.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

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
