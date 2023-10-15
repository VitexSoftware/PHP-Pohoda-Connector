<?php

namespace Pohoda\RecyclingContrib;

/**
 * Class representing RecyclingContribHeaderType
 *
 *
 * XSD Type: recyclingContribHeaderType
 */
class RecyclingContribHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Zkratka recyklačního příspěvku.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Název recyklačního příspěvku.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Text recyklačního příspěvku, který se bude tisknout na daňových dokladech.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Částka recyklačního příspěvku.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * M. j. recyklačního příspěvku.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * ID záznamu (pouze pro export).
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as code
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
     * Sets a new code
     *
     * Zkratka recyklačního příspěvku.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
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
     * Sets a new name
     *
     * Název recyklačního příspěvku.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as text
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
     * Sets a new text
     *
     * Text recyklačního příspěvku, který se bude tisknout na daňových dokladech.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as amount
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
     * Sets a new amount
     *
     * Částka recyklačního příspěvku.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as unit
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
     * Sets a new unit
     *
     * M. j. recyklačního příspěvku.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as note
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
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
}
