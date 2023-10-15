<?php

namespace Pohoda\Category;

/**
 * Class representing CategoryType
 *
 * Údaje kategorie internetového obchodu.
 * XSD Type: categoryType
 */
class CategoryType
{
    /**
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     *
     * @var int $parentId
     */
    private $parentId = null;

    /**
     * ID záznamu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Textový popis kategorie.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     *
     * @var int $sequence
     */
    private $sequence = null;

    /**
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     *
     * @var string $displayed
     */
    private $displayed = null;

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
     * @var \Pohoda\Category\CategoryType[] $subCategories
     */
    private $subCategories = null;

    /**
     * @var \Pohoda\Category\InternetParamsType $internetParams
     */
    private $internetParams = null;

    /**
     * Gets as parentId
     *
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     *
     * @param int $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

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
     * Gets as name
     *
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
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
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
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
     * Textový popis kategorie.
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
     * Textový popis kategorie.
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
     * Gets as sequence
     *
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     *
     * @param int $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as displayed
     *
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     *
     * @return string
     */
    public function getDisplayed()
    {
        return $this->displayed;
    }

    /**
     * Sets a new displayed
     *
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     *
     * @param string $displayed
     * @return self
     */
    public function setDisplayed($displayed)
    {
        $this->displayed = $displayed;
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

    /**
     * Adds as category
     *
     * @return self
     * @param \Pohoda\Category\CategoryType $category
     */
    public function addToSubCategories(\Pohoda\Category\CategoryType $category)
    {
        $this->subCategories[] = $category;
        return $this;
    }

    /**
     * isset subCategories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubCategories($index)
    {
        return isset($this->subCategories[$index]);
    }

    /**
     * unset subCategories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubCategories($index)
    {
        unset($this->subCategories[$index]);
    }

    /**
     * Gets as subCategories
     *
     * @return \Pohoda\Category\CategoryType[]
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * Sets a new subCategories
     *
     * @param \Pohoda\Category\CategoryType[] $subCategories
     * @return self
     */
    public function setSubCategories(array $subCategories = null)
    {
        $this->subCategories = $subCategories;
        return $this;
    }

    /**
     * Gets as internetParams
     *
     * @return \Pohoda\Category\InternetParamsType
     */
    public function getInternetParams()
    {
        return $this->internetParams;
    }

    /**
     * Sets a new internetParams
     *
     * @param \Pohoda\Category\InternetParamsType $internetParams
     * @return self
     */
    public function setInternetParams(?\Pohoda\Category\InternetParamsType $internetParams = null)
    {
        $this->internetParams = $internetParams;
        return $this;
    }
}
