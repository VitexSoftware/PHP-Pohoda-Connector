<?php

namespace Pohoda\List;

/**
 * Class representing ItemStorageType
 *
 * Export - položky členění skladů.
 * XSD Type: itemStorageType
 */
class ItemStorageType
{
    /**
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Nabízet dynamickými záložkami.
     *
     * @var string $offerTo
     */
    private $offerTo = null;

    /**
     * Název skladu (první úroveň), název větve (další úrovně).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * "//lst:listStorage/lst:itemStorage" (první "itemStorage") je název skladu, následují názvy větví.
     *
     * @var int $idStore
     */
    private $idStore = null;

    /**
     * Příznak "Povolit stav zásob do mínusu" skladu, do kterého členění patří. Uveden pouze u první úrovně členění, tedy skladu.
     *
     * @var string $allowNegInvBalance
     */
    private $allowNegInvBalance = null;

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
     * @var \Pohoda\List\ItemStorageType[] $subStorages
     */
    private $subStorages = null;

    /**
     * Gets as id
     *
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".
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
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".
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
     * Gets as code
     *
     * Název skladu (první úroveň), název větve (další úrovně).
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
     * Název skladu (první úroveň), název větve (další úrovně).
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
     * "//lst:listStorage/lst:itemStorage" (první "itemStorage") je název skladu, následují názvy větví.
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
     * "//lst:listStorage/lst:itemStorage" (první "itemStorage") je název skladu, následují názvy větví.
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
     * Gets as allowNegInvBalance
     *
     * Příznak "Povolit stav zásob do mínusu" skladu, do kterého členění patří. Uveden pouze u první úrovně členění, tedy skladu.
     *
     * @return string
     */
    public function getAllowNegInvBalance()
    {
        return $this->allowNegInvBalance;
    }

    /**
     * Sets a new allowNegInvBalance
     *
     * Příznak "Povolit stav zásob do mínusu" skladu, do kterého členění patří. Uveden pouze u první úrovně členění, tedy skladu.
     *
     * @param string $allowNegInvBalance
     * @return self
     */
    public function setAllowNegInvBalance($allowNegInvBalance)
    {
        $this->allowNegInvBalance = $allowNegInvBalance;
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
     * Adds as itemStorage
     *
     * @return self
     * @param \Pohoda\List\ItemStorageType $itemStorage
     */
    public function addToSubStorages(\Pohoda\List\ItemStorageType $itemStorage)
    {
        $this->subStorages[] = $itemStorage;
        return $this;
    }

    /**
     * isset subStorages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubStorages($index)
    {
        return isset($this->subStorages[$index]);
    }

    /**
     * unset subStorages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubStorages($index)
    {
        unset($this->subStorages[$index]);
    }

    /**
     * Gets as subStorages
     *
     * @return \Pohoda\List\ItemStorageType[]
     */
    public function getSubStorages()
    {
        return $this->subStorages;
    }

    /**
     * Sets a new subStorages
     *
     * @param \Pohoda\List\ItemStorageType[] $subStorages
     * @return self
     */
    public function setSubStorages(array $subStorages = null)
    {
        $this->subStorages = $subStorages;
        return $this;
    }
}
