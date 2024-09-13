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

namespace Pohoda\Storage;

/**
 * Class representing ItemStorageType.
 *
 * Položky členění skladů.
 * XSD Type: itemStorageType
 */
class ItemStorageType
{
    /**
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".(Pouze pro export).
     */
    private int $id = null;

    /**
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
     */
    private string $code = null;

    /**
     * ID skladu do kterého členění patří. Pokud je uveden atribut "idStore", znamená to, že se jedná o první úroveň členění, tedy o sklad. V ostastních případech se jedná o větvení členění.
     */
    private int $idStore = null;

    /**
     * Název členění.
     */
    private string $name = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Nabízet dynamickými záložkami.
     */
    private string $offerTo = null;
    private \Pohoda\Storage\SubStoragesType $subStorages = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID záznamu, pokud zadaný uzel v seznamu členění neexistuje obsahuje hodnotu "0".(Pouze pro export)
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
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
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
     * Název skladu do kterého členění patří.U první úroveně členění se jedná o název skladu, u dalších větvení se jedná o název členění.
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
     * Gets as idStore.
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
     * Sets a new idStore.
     *
     * ID skladu do kterého členění patří. Pokud je uveden atribut "idStore", znamená to, že se jedná o první úroveň členění, tedy o sklad. V ostastních případech se jedná o větvení členění.
     *
     * @param int $idStore
     *
     * @return self
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;

        return $this;
    }

    /**
     * Gets as name.
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
     * Sets a new name.
     *
     * Název členění.
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

    /**
     * Gets as offerTo.
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
     * Sets a new offerTo.
     *
     * Nabízet dynamickými záložkami.
     *
     * @param string $offerTo
     *
     * @return self
     */
    public function setOfferTo($offerTo)
    {
        $this->offerTo = $offerTo;

        return $this;
    }

    /**
     * Gets as subStorages.
     *
     * @return \Pohoda\Storage\SubStoragesType
     */
    public function getSubStorages()
    {
        return $this->subStorages;
    }

    /**
     * Sets a new subStorages.
     *
     * @return self
     */
    public function setSubStorages(?\Pohoda\Storage\SubStoragesType $subStorages = null)
    {
        $this->subStorages = $subStorages;

        return $this;
    }
}
