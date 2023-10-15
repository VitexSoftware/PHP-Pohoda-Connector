<?php

namespace Pohoda\Storage;

/**
 * Class representing ItemStorageType
 *
 * Položky členění skladů.
 * XSD Type: itemStorageType
 */
class ItemStorageType
{
    /**
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".(Pouze pro export)
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * ID skladu do kterého členění patří. Pokud je uveden atribut "idStore", znamená to, že se jedná o první úroveň členění, tedy o sklad. V ostastních případech se jedná o větvení členění.
     *
     * @var int $idStore
     */
    private $idStore = null;

    /**
     * Název členění.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Nabízet dynamickými záložkami.
     *
     * @var string $offerTo
     */
    private $offerTo = null;

    /**
     * @var \Pohoda\Storage\SubStoragesType $subStorages
     */
    private $subStorages = null;

    /**
     * Gets as id
     *
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".(Pouze pro export)
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
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".(Pouze pro export)
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
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
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
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
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
     * Gets as idStore
     *
     * ID skladu do kterého členění patří. Pokud je uveden atribut "idStore", znamená to, že se jedná o první úroveň členění, tedy o sklad. V ostastních případech se jedná o větvení členění.
     *
     * @return int
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * Sets a new idStore
     *
     * ID skladu do kterého členění patří. Pokud je uveden atribut "idStore", znamená to, že se jedná o první úroveň členění, tedy o sklad. V ostastních případech se jedná o větvení členění.
     *
     * @param int $idStore
     * @return self
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název členění.
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
     * Název členění.
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

    /**
     * Gets as offerTo
     *
     * Nabízet dynamickými záložkami.
     *
     * @return string
     */
    public function getOfferTo()
    {
        return $this->offerTo;
    }

    /**
     * Sets a new offerTo
     *
     * Nabízet dynamickými záložkami.
     *
     * @param string $offerTo
     * @return self
     */
    public function setOfferTo($offerTo)
    {
        $this->offerTo = $offerTo;
        return $this;
    }

    /**
     * Gets as subStorages
     *
     * @return \Pohoda\Storage\SubStoragesType
     */
    public function getSubStorages()
    {
        return $this->subStorages;
    }

    /**
     * Sets a new subStorages
     *
     * @param \Pohoda\Storage\SubStoragesType $subStorages
     * @return self
     */
    public function setSubStorages(?\Pohoda\Storage\SubStoragesType $subStorages = null)
    {
        $this->subStorages = $subStorages;
        return $this;
    }
}
