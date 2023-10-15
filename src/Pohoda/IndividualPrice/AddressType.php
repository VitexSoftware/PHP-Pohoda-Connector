<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: address
 */
class AddressType
{
    /**
     * Odkaz na ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Gets as id
     *
     * Odkaz na ID záznamu.
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
     * Odkaz na ID záznamu.
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
     * Gets as extId
     *
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }
}
