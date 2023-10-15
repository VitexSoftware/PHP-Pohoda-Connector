<?php

namespace Pohoda\Filter;

/**
 * Class representing FilterStocksType
 *
 *
 * XSD Type: filterStocksType
 */
class FilterStocksType
{
    /**
     * Filtr podle ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Filtr podle kódu zásoby.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Filtr podle čísla čárového kódu.
     *
     * @var string $eAN
     */
    private $eAN = null;

    /**
     * Filtr podle pole kódu zásoby pro registrační pokladnu.
     *
     * @var int $pLU
     */
    private $pLU = null;

    /**
     * Filtr podle názvu skladové položky.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @var \Pohoda\Type\RefTypeStorageType $storage
     */
    private $storage = null;

    /**
     * Filtr podle ID, název skladu.
     *
     * @var \Pohoda\Type\RefType $store
     */
    private $store = null;

    /**
     * Hodnota Internet je na zásobě nastavena.
     *
     * @var string $internet
     */
    private $internet = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @var \DateTime $lastChanges
     */
    private $lastChanges = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * Filtr podle ID záznamu.
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
     * Vybere záznam dle zadaného externího identifikátoru.
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
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as code
     *
     * Filtr podle kódu zásoby.
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
     * Filtr podle kódu zásoby.
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
     * Gets as eAN
     *
     * Filtr podle čísla čárového kódu.
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN
     *
     * Filtr podle čísla čárového kódu.
     *
     * @param string $eAN
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;
        return $this;
    }

    /**
     * Gets as pLU
     *
     * Filtr podle pole kódu zásoby pro registrační pokladnu.
     *
     * @return int
     */
    public function getPLU()
    {
        return $this->pLU;
    }

    /**
     * Sets a new pLU
     *
     * Filtr podle pole kódu zásoby pro registrační pokladnu.
     *
     * @param int $pLU
     * @return self
     */
    public function setPLU($pLU)
    {
        $this->pLU = $pLU;
        return $this;
    }

    /**
     * Gets as name
     *
     * Filtr podle názvu skladové položky.
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
     * Filtr podle názvu skladové položky.
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
     * Gets as storage
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @param \Pohoda\Type\RefTypeStorageType $storage
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * Gets as store
     *
     * Filtr podle ID, název skladu.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * Filtr podle ID, název skladu.
     *
     * @param \Pohoda\Type\RefType $store
     * @return self
     */
    public function setStore(?\Pohoda\Type\RefType $store = null)
    {
        $this->store = $store;
        return $this;
    }

    /**
     * Gets as internet
     *
     * Hodnota Internet je na zásobě nastavena.
     *
     * @return string
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * Sets a new internet
     *
     * Hodnota Internet je na zásobě nastavena.
     *
     * @param string $internet
     * @return self
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
        return $this;
    }

    /**
     * Gets as lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @return \DateTime
     */
    public function getLastChanges()
    {
        return $this->lastChanges;
    }

    /**
     * Sets a new lastChanges
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @param \DateTime $lastChanges
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;
        return $this;
    }
}

