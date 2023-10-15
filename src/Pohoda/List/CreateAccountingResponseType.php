<?php

namespace Pohoda\List;

/**
 * Class representing CreateAccountingResponseType
 *
 *
 * XSD Type: createAccountingResponseType
 */
class CreateAccountingResponseType extends ItemAccountingTypeDoubleEntryType
{
    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as note
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
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
}

