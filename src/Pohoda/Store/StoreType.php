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

namespace Pohoda\Store;

/**
 * Class representing StoreType.
 *
 * XSD Type: storeType
 */
class StoreType
{
    private string $version = null;

    /**
     * ID záznamu (pouze pro export).
     */
    private int $id = null;

    /**
     * Název skladu.
     */
    private string $name = null;

    /**
     * Popis nebo plný název nebo adresa skladu.
     */
    private string $text = null;

    /**
     * Povolit stav zásob do minusu.
     */
    private string $allowNegInvBalance = null;

    /**
     * Skladník.
     */
    private \Pohoda\Type\RefType $storekeeper = null;

    /**
     * PLU.
     */
    private \Pohoda\Store\PLUtypeType $pLU = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private string $markRecord = null;

    /**
     * Zdrojový sklad.
     */
    private bool $sourceStore = null;

    /**
     * Cílový sklad.
     */
    private bool $destinationStore = null;

    /**
     * Založit skladovou zásobu.
     */
    private bool $createInventoryCard = null;

    /**
     * Jednotka PZD. Nastavení vlastníka skladu v režimu „Pobočkové zpracování dat“.
     */
    private \Pohoda\Type\RefType $unitPZD = null;

    /**
     * Sklady A.
     */
    private \Pohoda\Store\AccStockAType $accStockA = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private array $parameters = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

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
     * Gets as name.
     *
     * Název skladu.
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
     * Název skladu.
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
     * Popis nebo plný název nebo adresa skladu.
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
     * Popis nebo plný název nebo adresa skladu.
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
     * Gets as allowNegInvBalance.
     *
     * Povolit stav zásob do minusu.
     *
     * @return string
     */
    public function getAllowNegInvBalance()
    {
        return $this->allowNegInvBalance;
    }

    /**
     * Sets a new allowNegInvBalance.
     *
     * Povolit stav zásob do minusu.
     *
     * @param string $allowNegInvBalance
     *
     * @return self
     */
    public function setAllowNegInvBalance($allowNegInvBalance)
    {
        $this->allowNegInvBalance = $allowNegInvBalance;

        return $this;
    }

    /**
     * Gets as storekeeper.
     *
     * Skladník.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getStorekeeper()
    {
        return $this->storekeeper;
    }

    /**
     * Sets a new storekeeper.
     *
     * Skladník.
     *
     * @return self
     */
    public function setStorekeeper(?\Pohoda\Type\RefType $storekeeper = null)
    {
        $this->storekeeper = $storekeeper;

        return $this;
    }

    /**
     * Gets as pLU.
     *
     * PLU.
     *
     * @return \Pohoda\Store\PLUtypeType
     */
    public function getPLU()
    {
        return $this->pLU;
    }

    /**
     * Sets a new pLU.
     *
     * PLU.
     *
     * @return self
     */
    public function setPLU(?\Pohoda\Store\PLUtypeType $pLU = null)
    {
        $this->pLU = $pLU;

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
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Gets as sourceStore.
     *
     * Zdrojový sklad.
     *
     * @return bool
     */
    public function getSourceStore()
    {
        return $this->sourceStore;
    }

    /**
     * Sets a new sourceStore.
     *
     * Zdrojový sklad.
     *
     * @param bool $sourceStore
     *
     * @return self
     */
    public function setSourceStore($sourceStore)
    {
        $this->sourceStore = $sourceStore;

        return $this;
    }

    /**
     * Gets as destinationStore.
     *
     * Cílový sklad.
     *
     * @return bool
     */
    public function getDestinationStore()
    {
        return $this->destinationStore;
    }

    /**
     * Sets a new destinationStore.
     *
     * Cílový sklad.
     *
     * @param bool $destinationStore
     *
     * @return self
     */
    public function setDestinationStore($destinationStore)
    {
        $this->destinationStore = $destinationStore;

        return $this;
    }

    /**
     * Gets as createInventoryCard.
     *
     * Založit skladovou zásobu.
     *
     * @return bool
     */
    public function getCreateInventoryCard()
    {
        return $this->createInventoryCard;
    }

    /**
     * Sets a new createInventoryCard.
     *
     * Založit skladovou zásobu.
     *
     * @param bool $createInventoryCard
     *
     * @return self
     */
    public function setCreateInventoryCard($createInventoryCard)
    {
        $this->createInventoryCard = $createInventoryCard;

        return $this;
    }

    /**
     * Gets as unitPZD.
     *
     * Jednotka PZD. Nastavení vlastníka skladu v režimu „Pobočkové zpracování dat“.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getUnitPZD()
    {
        return $this->unitPZD;
    }

    /**
     * Sets a new unitPZD.
     *
     * Jednotka PZD. Nastavení vlastníka skladu v režimu „Pobočkové zpracování dat“.
     *
     * @return self
     */
    public function setUnitPZD(?\Pohoda\Type\RefType $unitPZD = null)
    {
        $this->unitPZD = $unitPZD;

        return $this;
    }

    /**
     * Gets as accStockA.
     *
     * Sklady A.
     *
     * @return \Pohoda\Store\AccStockAType
     */
    public function getAccStockA()
    {
        return $this->accStockA;
    }

    /**
     * Sets a new accStockA.
     *
     * Sklady A.
     *
     * @return self
     */
    public function setAccStockA(?\Pohoda\Store\AccStockAType $accStockA = null)
    {
        $this->accStockA = $accStockA;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelný parametr.
     *
     * @return self
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * isset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     */
    public function unsetParameters($index): void
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
