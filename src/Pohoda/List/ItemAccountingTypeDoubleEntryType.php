<?php

namespace Pohoda\List;

/**
 * Class representing ItemAccountingTypeDoubleEntryType
 *
 *
 * XSD Type: itemAccountingTypeDoubleEntry
 */
class ItemAccountingTypeDoubleEntryType extends CreateAccountingType
{
    /**
     * @var int $id
     */
    private $id = null;

    /**
     * Gets as id
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
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
