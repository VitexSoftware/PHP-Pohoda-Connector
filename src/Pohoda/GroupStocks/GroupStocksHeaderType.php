<?php

namespace Pohoda\GroupStocks;

/**
 * Class representing GroupStocksHeaderType
 *
 * Údaje kategorie internetového obchodu.
 * XSD Type: groupStocksHeaderType
 */
class GroupStocksHeaderType
{
    /**
     * ID záznamu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Jedinečný "Kód" skupiny zásob.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Název Skupiny zásob.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Textový popis skupiny zásob.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Zobrazení. Určuje, zda je skupina zásob přenášena na internetový obchod.
     *
     * @var string $internet
     */
    private $internet = null;

    /**
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @var string $picture
     */
    private $picture = null;

    /**
     * @var string $note
     */
    private $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Gets as id
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Jedinečný "Kód" skupiny zásob.
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
     * Jedinečný "Kód" skupiny zásob.
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
     * Název Skupiny zásob.
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
     * Název Skupiny zásob.
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
     * Gets as description
     *
     * Textový popis skupiny zásob.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textový popis skupiny zásob.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as internet
     *
     * Zobrazení. Určuje, zda je skupina zásob přenášena na internetový obchod.
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
     * Zobrazení. Určuje, zda je skupina zásob přenášena na internetový obchod.
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
     * Gets as picture
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @param string $picture
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
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

    /**
     * Gets as markRecord
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
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }
}

