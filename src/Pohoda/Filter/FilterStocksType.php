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

namespace Pohoda\Filter;

/**
 * Class representing FilterStocksType.
 *
 * XSD Type: filterStocksType
 */
class FilterStocksType
{
    /**
     * Filtr podle ID záznamu.
     */
    private int $id = null;

    /**
     * Vybere záznam dle zadaného externího identifikátoru.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Filtr podle kódu zásoby.
     */
    private string $code = null;

    /**
     * Filtr podle čísla čárového kódu.
     */
    private string $eAN = null;

    /**
     * Filtr podle pole kódu zásoby pro registrační pokladnu.
     */
    private int $pLU = null;

    /**
     * Filtr podle názvu skladové položky.
     */
    private string $name = null;

    /**
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     */
    private \Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Filtr podle ID, název skladu.
     */
    private \Pohoda\Type\RefType $store = null;

    /**
     * Hodnota Internet je na zásobě nastavena.
     */
    private string $internet = null;

    /**
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     */
    private \DateTime $lastChanges = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * Filtr podle ID záznamu.
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
     * Gets as extId.
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
     * Sets a new extId.
     *
     * Vybere záznam dle zadaného externího identifikátoru.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as code.
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
     * Sets a new code.
     *
     * Filtr podle kódu zásoby.
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
     * Gets as eAN.
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
     * Sets a new eAN.
     *
     * Filtr podle čísla čárového kódu.
     *
     * @param string $eAN
     *
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;

        return $this;
    }

    /**
     * Gets as pLU.
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
     * Sets a new pLU.
     *
     * Filtr podle pole kódu zásoby pro registrační pokladnu.
     *
     * @param int $pLU
     *
     * @return self
     */
    public function setPLU($pLU)
    {
        $this->pLU = $pLU;

        return $this;
    }

    /**
     * Gets as name.
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
     * Sets a new name.
     *
     * Filtr podle názvu skladové položky.
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
     * Gets as storage.
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
     * Sets a new storage.
     *
     * Filtr podle ID, název členění. Je možné také zadat část názvu členění (zleva) - proběhne vyexportování zadané větve a souvisejících podvětví stromu členění.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as store.
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
     * Sets a new store.
     *
     * Filtr podle ID, název skladu.
     *
     * @return self
     */
    public function setStore(?\Pohoda\Type\RefType $store = null)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Gets as internet.
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
     * Sets a new internet.
     *
     * Hodnota Internet je na zásobě nastavena.
     *
     * @param string $internet
     *
     * @return self
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;

        return $this;
    }

    /**
     * Gets as lastChanges.
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
     * Sets a new lastChanges.
     *
     * Vyexportuje záznamy změněné od zadaného data.Pouze pro export.
     *
     * @return self
     */
    public function setLastChanges(?\DateTime $lastChanges = null)
    {
        $this->lastChanges = $lastChanges;

        return $this;
    }
}
